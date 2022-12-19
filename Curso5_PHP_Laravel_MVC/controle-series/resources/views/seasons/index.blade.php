<x-layout title="Temporadas de {!! $series->nome !!}" class="mt-2">
    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                   Temporada {{ $season->number }}

                {{-- FORMULÁRIO PARA ATUALIZAÇÃO  --}}
                <span class="badge bg-secondary">
                    {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>