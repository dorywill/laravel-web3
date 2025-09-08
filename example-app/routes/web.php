<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\HomeController;

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

// 1. Crie uma rota chamada "/contato" que exiba o texto: "Essa é a página de contato da empresa X".
Route::get('/contato', function(){
    return "Essa é a página de contato da empresa X";
});

// 2. Crie uma rota chamada "/saudacao/{nome}" que receba um parâmetro e mostre: Exemplo: "/saudacao/Ana" → "Olá, Ana! Seja bem-vinda ao sistema."

Route::get('/saudacao/{nome}', function($nome){
    return "Olá, {$nome}! Seja bem-vinda ao sistema.";
});

// 3. Crie uma rota chamada "/dobro/{numero}" que receba um número e exiba o dobro dele.
Route::get('/dobro/{numero}', function($numero){
    $dobro = $numero * 2;
    return "O dobro de {$numero} é {$dobro}";
});

// 4. Crie uma rota chamada "/dataHora" que exiba a data e hora atual do servidor.
route::get('/dataHora', function(){
    $dataHora = date('d/m/Y H:i:s');
    return "Data e hora atual: {$dataHora}";
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

Route::get('/series', [SeriesController::class, 'listarSeries']);

Route::get('/home', HomeController::class);
Route::get('/principal', [HomeController::class, 'principal']);

