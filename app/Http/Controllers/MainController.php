<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home () {
        echo 'Apresentação da página inicial';
    }

    public function generateExercises(Request $request) {
        echo 'Geração de exercícios';
    }

    public function printExercises() {
        echo 'Apresentação dos exercícios';
    }

    public function exportExercises() {
        echo 'Exportar exercícios para um arquivo de testes';
    }
}
