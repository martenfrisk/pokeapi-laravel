<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >

<div id="example"></div>
<div class="container">
    <form method="get" action="/" >
    {{ csrf_field() }}
        <label for="addpokemon">
            Add pokemon:
        </label>
        <input type="text" id="addpokemon" placeholder="Enter pokémon name..." name="addpokemon" />
        <button type="submit">Add</button>
    </form>
    <form method="post" action="/" >
    {{ csrf_field() }}
        <input type="number" id="addpokemon" class="hideme" name="addpokemon" value={{ rand(1, 151) }} />
        <button type="submit">Add random pokémon</button>
    </form>

@if (isset($pokes))
    <div class="pokedex">
        @foreach ($pokes as $poke)
            <div class="poke">
                <p class="pokename">{{ $poke->name }}</p>
                <img src={{ $poke->sprites }} />
                <a href={{ action('TestController@reset', ['name' => $poke->name]) }}>Remove this pokémon</a>
            </div>
        @endforeach
    </div>
@else
    <div>Your Pokédex is empty. Please add a pokémon.</div>
@endif
</div>
