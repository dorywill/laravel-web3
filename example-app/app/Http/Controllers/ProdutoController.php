<?php
#8. Crie um ProdutoController com o método listar().

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listar() {
        $nome = [
                'Mouse',
                'Teclado',
                'Monitor',
                'Headset',
            ];
        $preco =
        [
                'R$ 70,00',
                'R$ 200,00',
                'R$ 800,00',
                'R$ 240,00',
            ];
        $html = "<h3>Lista Produtos </h3><ul>";
        foreach ($nome as $i => $nomes) {
            $html .= "<li>$nomes - {$preco[$i]}</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}
