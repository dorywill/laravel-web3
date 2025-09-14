<?php

#14. Crie a classe TarefaController com o método listar().
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{

    public function listar(){
        $tarefas = [
            'Estudar Laravel',
            'Revisar PHP',
            'Ler documentação',
        ];

        $html = "<h3>Tarefas do Dia</h3><ol>";
        foreach ($tarefas as $tarefa) {
            $html .= "<li>$tarefa</li>";
        }
        $html .= "</ol>";
        return $html;
    }
}

