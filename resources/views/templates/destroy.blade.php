<div class="modal fade" id="modal-destroy" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirmação de exclusão</h4>
            </div>
            <div class="modal-body">
                <p>Você tem certeza que deseja excluir este registro?</p>
            </div>
            <div class="modal-footer">

                <form action="#" method="POST">
                    @method('DELETE')
                    @csrf

                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">
                        Cancelar
                    </button>

                    <button type="submit" class="btn btn-sm btn-danger">
                        Confirmar
                    </button>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@push('scripts')
<script data-teste="">
    $('#modal-destroy').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

        var modal = $(this)
        modal.find('.modal-footer form').attr('action', url)
})
</script>

@endpush