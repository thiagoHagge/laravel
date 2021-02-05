<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller {
    public function __invoke() {
        $series = Serie::all();
        // var_dump($series);
        // exit();
        return view('series.index', compact('series'));
    }
    public function create() {
        return view('series.create');
    }
    public function store(Request $request) {
        $serie = Serie::create($request->all);
    }
}
