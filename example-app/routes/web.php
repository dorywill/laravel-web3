<?php
//php artisan serve para iniciar o servidor

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return "BRUTAL";
});

Route::get('soma', function(){
    $a = 100;
    $b = 200;
    $soma = $a + $b;
    return "A soma é {$soma}";
});

Route::get('/soma/{v1}/{v2}', function($v1, $v2){
    $soma = $v1 + $v2;
    return "A soma é {$soma}";
});

Route::get('/adicionar-produto/{param1}/{param2?}', function($param1, $param2 = null){
    $texto = "O parâmetro 1 da URL é {$param1} <br>";
    if($param2 != null)
        $texto .= "O parâmetro 2 da URL é {$param2}<br>";
    return $texto;
});


Route::get('/series', [SeriesController::class, 'listarSeries']);

