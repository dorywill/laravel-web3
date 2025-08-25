<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries(){
        $series = [
            "Breaking Bad",
            "Game of Thrones",
            "The Witcher",
            "Stranger Things"
        ];

        $html = "<ul>";
        foreach($series as $serie){
            $html .= "<li>{$serie}</li>";
        }
        $html .= "</ul>";
        return $html;
    }
}
