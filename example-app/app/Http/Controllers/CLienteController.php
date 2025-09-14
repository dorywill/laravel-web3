<?php
# 10. Crie um ClienteController com o método mostrar($id).
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CLienteController extends Controller{
    public function mostrar($id){

        $clientes = [
            1 => 'João',
            2 => 'Maria',
            3 => 'José',
        ];

        $nome = $clientes[$id] ?? 'Cliente não encontrado';

        return "Cliente ID {$id}: {$nome}";
    }
}
