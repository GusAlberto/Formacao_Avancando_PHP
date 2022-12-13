<x-layout title="{{ __('messages.app_name') }}">

    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true" />

</x-layout>
