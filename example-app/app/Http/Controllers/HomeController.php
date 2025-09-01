<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //return "Retornando o 'HomeController.invoke'";
        return view("home");
    }

    public function principal()
    {
        return "Retornando o 'HomeController.principal'";
    }

}
