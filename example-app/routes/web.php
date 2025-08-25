<?php
//php artisan serve para iniciar o servidor

use Illuminate\Support\Facades\Route;

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

Route::get('/adicionar-produto/{param1}/{param2}', function($p1, $p2 = null){
    $textto = "O parâmetro 1 da URL é: {$p1} <br>";
    if($p2 != null)
        $textto .= "O parâmetro 2 da URL é: {$p2}";
    return $textto;
});