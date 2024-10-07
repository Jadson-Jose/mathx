<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo 'apresentar a pagina inicial';
    }

    public function generateExercises(Request $request)
    {
        echo 'gerar exercicios';
    }

    public function printExercises()
    {
        echo 'imprimir exercicios no navegador';
    }

    public function exportExercises()
    {
        echo 'exportar exercicios para um arquivo de texto.';
    }
}
