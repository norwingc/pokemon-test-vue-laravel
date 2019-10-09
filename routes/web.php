<?php

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

Route::view('/', 'pokemon.index')->name('home');
Route::view('/pokemon', 'pokemon.index')->name('pokemon');

Route::group(['middleware' => ['auth']], function () {
    Route::name('pokemon.show')->get('/pokemon/view/{id}', 'PokemonController@show');
});


Auth::routes();

