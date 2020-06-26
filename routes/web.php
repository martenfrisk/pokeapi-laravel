<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/pokemon', 'TestController@index');


Route::get('/pokemon/reset', 'TestController@reset');

Route::get('/pokemon/save', 'TestController@store');

Route::get('/', function () {
    return view('viewpokemondb');
});
