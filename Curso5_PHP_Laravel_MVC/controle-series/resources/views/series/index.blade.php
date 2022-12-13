<x-layout title="{{ __('messages.app_name') }}">

    <a href="{{ route('series.create') }}" class="btn btn-dark mt-2 mb-2">
        Adicionar
    </a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}

            {{-- FORMULÁRIO PARA ATUALIZAÇÃO  --}}
            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                    Atualizar
                </a>

                {{-- FORMULÁRIO PARA EXCLUSÃO --}}
                <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Excluir
                    </button>
                </form>
            </span>
            
        </li>
        @endforeach
    </ul>
</x-layout>
