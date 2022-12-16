

{{-- !-- Modal de confirmação de exclusão -->  --}}

<form action="{{ route('series.destroy', $series->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">
            Você tem certeza que quer deletar{{ $serie->name }}?
        </h5>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Cancelar
        </button>
        <button type="submit" class="btn btn-danger">
            Sim, delete a série.
        </button>
    </div>
</form>

<script>


</script>
