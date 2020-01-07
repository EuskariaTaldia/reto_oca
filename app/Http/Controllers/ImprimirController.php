<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImprimirController extends Controller
{

    public function getInformacion() {
        return view('imprimir.informacion');
    }
    

    public function getPreguntas() {
        return view('imprimir.preguntas');
    }


    public function getTablero() {
        return view('imprimir.tablero');
    }

}
