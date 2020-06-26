<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class SquadController extends Controller
{
    public function index()
    {
        return Pokemon::all();
    }
    public function show($id)
    {
        return Pokemon::find($id);
    }
}
