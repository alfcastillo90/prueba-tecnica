<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($genero)
    {
        $generos = array("drama", "comedia","accion","terror");

        if(!in_array(strtolower($genero),$generos))
        {
            abort(404);
        }
        return view('pelicula',['tipo'=>$genero]);
    }
}
