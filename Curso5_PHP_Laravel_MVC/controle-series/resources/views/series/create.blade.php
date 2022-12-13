<x-layout title="{{ __('messages.app_name') }}">

    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false" />

</x-layout>