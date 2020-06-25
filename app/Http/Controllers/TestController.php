<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pokemon;
use GuzzleHttp\Client;

class TestController extends Controller {

    public function index()
    {
        // $pokes = App\Pokemon::all();

        // foreach ($pokes as $poke) {

        // }


        $pokes = Pokemon::all();
        return view("viewpokemondb", ['pokes' => $pokes]);
    }

    public function store(Request $request) {

        $client = new Client(['base_uri' => 'https://pokeapi.co/api/v2/']);

        $url = 'https://pokeapi.co/api/v2/pokemon/' . $request->addpokemon;
        try {
            $res = $client->get($url)->getBody();
        } catch (Guzzle\Http\ClientException $e) {
            echo 'Error: ' . $e->getResponse();
        }
        $pokemon = Pokemon::firstOrCreate(
            ['name' => json_decode($res)->name],
            [
                'base_experience' => json_decode($res)->base_experience,
                'height' => json_decode($res)->height,
                'weight' => json_decode($res)->weight,
                'is_default' => json_decode($res)->is_default,
                'sprites' => json_decode($res)->sprites->front_default
            ]
        );
        // $pokemon->save();
        $pokes = Pokemon::all();
        return view("viewpokemondb", ['pokes' => $pokes]);

    }

    public function reset(Request $request) {
        $deletePokemon = Pokemon::where('name', $request->name)->delete();

        $pokes = Pokemon::all();
        return view("viewpokemondb", ['pokes' => $pokes]);
    }
}
