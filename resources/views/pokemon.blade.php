<p>XP: {{ json_decode($pokemon)->base_experience }}</p>
<p>Abilities: {{ json_decode($pokemon)->abilities[0]->ability->name }}</p>
<p>Name: {{ json_decode($pokemon)->name }}</p>
<img src="{{ json_decode($pokemon)->sprites->front_default }}" />
<p>{{ gettype($pokemon) }}</p>
