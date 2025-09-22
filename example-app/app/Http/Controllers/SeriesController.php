<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{

    public function index() {
        $series = [
                'Lost',
                'Greys Anatomy',
                'Agents of SHIELD',
                'Breaking Bad',
                'Eu a Patroa e as Crianças'
            ];
        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return view('series.index', ['html' => $html]);
    }



    public function create(){
        return view('series.create');
    }

}
