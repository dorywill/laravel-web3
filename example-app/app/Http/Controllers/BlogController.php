<?php
#12. Crie uma classe chamada BlogController com o método ultimosPosts().
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function ultimosPosts(){
        $posts = [
            'Post 1: Introdução ao Laravel',
            'Post 2: Entendendo Rotas',
            'Post 3: Controladores e Views',
        ];

        $html = "<h3>Últimos Posts </h3><ul>";
        foreach ($posts as $i => $post) {
            $html .= "<li>$post</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}
