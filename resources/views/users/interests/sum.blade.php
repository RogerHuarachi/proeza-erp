<div class="modal fade" id="interestSum{{ $interest->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sumar Monto</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('iadmins.sum', $interest->id) }}" method="POST">
            {{ csrf_field() }}
            {{ @method_field('PUT') }}
            @csrf
            <div class="card-body">
                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>Categoria</label>
                            <label class="form-control form-control-border">{{ $interest->name }}</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Artículo</label>
                            <label class="form-control form-control-border">{{ $interest->item->name }}</label>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Monto</label>
                            <input type="text" class="form-control form-control-border"
                            placeholder="Monto" name="money" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
      </div>
    </div>
</div>
