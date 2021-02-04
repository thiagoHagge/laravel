<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SeriesController extends Controller {
    public function __invoke()
    {
        $series = [
            'Desencanto',
            'Lupin',
            'Breaking Bad'
        ];
        echo "<ul>";
        foreach ($series as $series) {
            echo "<li>$series</li>";
        }
        echo "</ul>";
    }
    function listarSeries(){
        $series = [
            'Desencanto',
            'Lupin',
            'Breaking Bad'
        ];
        echo "<ul>";
        foreach ($series as $series) {
            echo "<li>$series</li>";
        }
        echo "</ul>";
    }
}
