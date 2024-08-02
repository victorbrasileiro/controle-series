<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
class SeriesController extends Controller
{
    public function index() {
        $series = Serie::query()->orderBy('nome')->get(); // pra ordenar os nomes em ordem crescente

        return view('series.index') -> with('series', $series);
    }

    public function create() 
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());

        return to_route('series.index');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->series);

        return to_route('series.index');
    }
}

