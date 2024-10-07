<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
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
