<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TarefaController;

Route::get('/contato', function(){
    return "Essa é a página de contato da empresa X!";
});

// 2. Crie uma rota chamada "/saudacao/{nome}" que receba um parâmetro e mostre: Exemplo: "/saudacao/Ana" → "Olá, Ana! Seja bem-vinda ao sistema."

Route::get('/saudacao/{nome}', function($nome){
    return "Olá, {$nome}! Seja bem-vindo(a) ao sistema.";
});

// 3. Crie uma rota chamada "/dobro/{numero}" que receba um número e exiba o dobro dele.
Route::get('/dobro/{numero}', function($numero){
    $dobro = $numero * 2;
    return "O dobro de {$numero} é {$dobro}.";
});

// 4. Crie uma rota chamada "/dataHora" que exiba a data e hora atual do servidor.
route::get('/dataHora', function(){
    $dataHora =  Carbon::now('America/Sao_Paulo')->format('d/m/Y H:i:s');
    return "Data e hora atual: {$dataHora}";
});

// 5. Crie uma rota chamada "/tecnologias" que exiba em uma lista HTML algumas tecnologias que você gosta (ex.: PHP, Laravel, JavaScript, Python, etc.).

Route::get('/tecnologias', function () {
    $tecnologias = [
                'PHP',
                'SQL',
                'python',
            ];
    $html = "<h3>Lista HTML </h3><ul>";
    foreach ($tecnologias as $tecnologia) {
        $html .= "<li>$tecnologia</li>";
    }
    $html .= "</ul>";

    return $html;
});

// 6. Crie uma rota chamada "/links" que exiba uma lista com links reais para sites úteis no dia a dia de um dev (ex.:

Route::get('/links', function () {
    $links = [
        'Laravel' => 'https://laravel.com/docs',
        'PHP' => 'https://www.php.net/docs.php',
        'GitHub' => 'https://github.com',
        'MySQL' => 'https://dev.mysql.com/doc/',
    ];

    $html = "<h2>Links sites links</h2><ul>";
    foreach ($links as $nome => $url) {
        $html .= "<li><a href=\"$url\" target=\"_blank\">$nome</a></li>";
    }
    $html .= "</ul>";

    return $html;
});

//7. Crie uma rota chamada "/noticias" que exiba uma lista com 3 notícias fictícias de tecnologia.

Route::get('/noticias', function () {
    $noticias = [
        'Ataque ao GitHub!!!!! Milhares de diretorios vazados.',
        'Extra! Prompts que adicionam criptomoedas em sua carteira.',
        'Java completamente extinto.'
    ];

    $html = "<h3>Notícias </h3><ul>";
    foreach ($noticias as $noticia) {
        $html .= "<li>$noticia</li>";
    }
    $html .= "</ul>";

    return $html;
});

# 9. Crie uma rota chamada "/produtos" que exiba uma lista de produtos (nome e preço).
Route::get('/produtos', [ProdutoController::class, 'listar']);

#11. Crie ama rota chamada "/clientes/{id}" deve simular a busca de um cliente pelo ID e exibir um nome fictício.
Route::get('/clientes/{id}', [ClienteController::class, 'mostrar']);

#13. Crie a rota "/blog" deve retornar os 3 últimos posts fictícios de um blog.
Route::get('/blog', [BlogController::class, 'ultimosPosts']);

#15. Crie uma rota chamada "/tarefas" deve retornar uma lista de tarefas do dia (ex.: "Estudar Laravel", "Revisar PHP", "Ler documentação").
Route::get('/tarefas', [TarefaController::class, 'listar']);


Route::get('/', function () {
    return view('welcome');
});

//Rota simples
Route::get('/ola', function(){
    return "Olá Mundo.";
});

Route::get('soma', function(){
    $a = 100;
    $b = 200;
    $soma = $a + $b;
    return "A soma é {$soma}";
});

//Rota com passagem de parâmetros
Route::get('/somaa/{v1}/{v2}', function($v1, $v2){
    $soma = $v1 + $v2;
    return "A soma é {$soma}";
});

/**
 * Colocar interrogação no parâmetro (ex. param2),
 * diz que vai ser opcional
 */
Route::get('/adicionar-produto/{param1}/{param2?}',
function($p1, $p2 = null) {
    $texto  = "O parâmetro 1 da URL é {$p1}<br>";
    if ($p2 != null)
        $texto .= "O parâmetro 2 da URL é {$p2}<br>";
    return $texto;
});


Route::get('/series2', function () {
    $series = [
                'Lost',
                'Greys Anatomy',
                'Agents of SHIELD',
            ];
    $html = "<ul>";
    foreach ($series as $serie) {
        $html .= "<li>$serie</li>";
    }
    $html .= "</ul>";

    return $html;
});

// Route::get('/series', [SeriesController::class, 'listarSeries']);
Route::get('/series/index', [SeriesController::class, 'index']);
Route::get('/series/create', [SeriesController::class, 'create']);

Route::get('/home', HomeController::class);
Route::get('/principal', [HomeController::class, 'principal']);

Route::get('/layout', function(){
    return view('layout/layout');
});

Route::get('/layoutTeste', function(){
    return view('layout/layoutTeste',[
        'produto1' => 'Monitor Positivo',
        'produto2' => 'Mousepad',
        'produto3' => 'Teclado dell'
    ]);

});