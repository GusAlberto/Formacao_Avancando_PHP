<x-layout title="Editar Série '{!! $serie->nome !!}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true" />
 {{--
    <x-series.form :action="route('series.update', $seasonsQty->id)" :nome="$seasons->nome" :update="true" />
    <x-series.form :action="route('series.update', $episodes->id)" :nome="$episodes->nome" :update="true" />
--}}
</x-layout>
