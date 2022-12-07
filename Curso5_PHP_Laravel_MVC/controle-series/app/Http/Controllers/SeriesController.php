<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Breaking Bad',
            'PRISON BREAK',
            'Grey\'s Anatomy',
            'Doctor House',
        ];

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }
}
