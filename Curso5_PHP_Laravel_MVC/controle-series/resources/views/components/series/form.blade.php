<form action="{{ $action }}" method="post">
    @csrf

    @if($update)
    @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">
            Nome:
        </label>
        <input type="text"
               id="nome"
               name="nome"
               class="form-control"
               @isset ($nome) value="{{ $nome }}" @endisset>
    </div>

    <div class="mb-3">
        <label for="seasonsQty" class="form-label">
            Temporadas:
        </label>
        <input type="text"
               id="seasonsQty"
               name="seasonsQty"
               class="form-control"
               @isset ($seasonsQty) value="{{ $seasonsQty }}" @endisset>
    </div>

    <div class="mb-3">
        <label for="episodesPerSeason" class="form-label">
            Episódios:
        </label>
        <input type="text"
               id="episodesPerSeason"
               name="episodesPerSeason"
               class="form-control"
               @isset ($episodesPerSeason) value="{{ $episodesPerSeason }}" @endisset>
    </div>

    <button type="submit" class="btn btn-primary">
        Adicionar
    </button>
    
</form>
