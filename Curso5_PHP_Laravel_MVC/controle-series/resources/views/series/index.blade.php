<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mt-2 mb-3">
        Adicionar
    </a>

    @isset($mensagemSucesso)
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
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
                            @csrf
                            @method('UPDATE')
                                Atualizar
                        </a>
                    </span>


                {{-- FORMULÁRIO PARA EXCLUSÃO --}}

                    <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            Excluir
                        </button>
                    </form>

            </li>
        @endforeach
    </ul>
</x-layout>
