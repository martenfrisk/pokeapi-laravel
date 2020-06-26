<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

<div id="example"></div>
<div class="container">
    <form method="get" action="/pokemon/save">
        {{ csrf_field() }}
        <label for="addpokemon">
            Add pokemon:
        </label>
        <input type="text" id="addpokemon" placeholder="Enter pokémon name..." name="addpokemon"/>
        <button type="submit">Add</button>
    </form>
    <form method="get" action="/pokemon/save">
        {{ csrf_field() }}
        <input type="number" id="addpokemon" class="hideme" name="addpokemon" value={{ rand(1, 151) }} />
        <button type="submit">Add random pokémon</button>
    </form>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{$error}}</div>
        @endforeach
    @endif
    @if (isset($pokes))
        <div class="pokedex">
            @foreach ($pokes as $poke)
                <div class="poke">
                    <div class="pokename">{{ $poke->name }}</div>
                    <div class="pokeID">id: {{ $poke->id }}</div>
                    <img src={{ $poke->sprites }} />
                    <div class="stats">
                        <div>
                            <div>height</div>
                            <div>
                                {{ $poke->height }}
                            </div>
                        </div>
                        <div>
                            <div>weight</div>
                            <div>
                                {{ $poke->weight }}
                            </div>
                        </div>
                        <div>
                            <div>xp</div>
                            <div>
                                {{ $poke->base_experience }}
                            </div>
                        </div>
                    </div>
                    <a href={{ action('TestController@reset', ['name' => $poke->name]) }}>Remove this pokémon</a>
                </div>
            @endforeach
        </div>
    @else
        <div>Your Pokédex is empty. Please add a pokémon.</div>
    @endif
</div>
