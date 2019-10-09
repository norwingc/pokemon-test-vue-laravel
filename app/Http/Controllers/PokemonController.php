<?php

namespace App\Http\Controllers;

use App\Hability;
use App\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PokemonController extends Controller
{
    /**
     * Undocumented function
     * @param [type] $id
     * @return void
     */
    public function show($id)
    {
        return view('pokemon.show', compact('id'));
    }
}
