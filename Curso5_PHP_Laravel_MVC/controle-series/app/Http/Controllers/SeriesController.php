<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use App\Repositories\SeriesRepository;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SeriesController extends Controller
{

    public function __construct(private SeriesRepository $repository)
    {
    }

    public function index(Request $request)
    {
            $series = Series::all();
            $mensagemSucesso = session('mensagem.sucesso');

            return view('series.index')->with('series', $series)
                ->with('mensagemSucesso', $mensagemSucesso);
        }


    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = $this->repository->add($request);

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso!");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso!");
    }

    public function edit(Series $series)
    {
        return view('series.edit')
            ->with('serie', $series);
    }

    public function update(Series $series, Season $seasonsQty, Episode $episodesPerSeason, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();
/*
        $seasonsQty->fill($request->all());
        dd($seasonsQty);
        $seasonsQty->save();

        $episodesPerSeason->fill($request->all());
        $episodesPerSeason->save();
 */
        return to_route('series.index')
            ->with('mensagem.sucesso', "Dados da '{$series->nome}' atualizada com sucesso!");
    }

    public function show()
    {
        return view('modal.index');
    }

}