<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller {
    public function __invoke(Request $request) {
        $series = Serie::query()
            ->orderBy('name')
            ->get();
        $message = $request->session()->get('message');

        return view('series.index', compact('series', 'message'));
    }
    public function create() {
        return view('series.create');
    }
    public function store(Request $request) {
        $serie = Serie::create($request->all());
        $request->session()
            ->flash(
                'message',
                "Série {$serie->id} criada com sucesso: {$serie->nome}"
            );
        return redirect()->route('series_list');
    }

    public function destroy (Request $request) {
        Serie::destroy($request->id);
        $request->session()
            ->flash(
                'message',
                "Série removida com sucesso!"
            );
            return redirect()->route('series_list');
    }
}
