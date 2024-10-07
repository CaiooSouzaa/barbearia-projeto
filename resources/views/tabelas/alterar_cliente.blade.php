@extends('tabelas.tables')

@section('conteudo')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Clientes</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Clientes</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Id cliente: {{$cliente-> id}}
            </div>
            <div class="modal-content">
                <!--colocar /upd em action para pegar -->
                <form method="POST" action="/tabelas/upd">
                    @csrf <!--colocar quando tiver formulario-->
                    <div class="modal-body">
                        <input type="text" name="id" value="{{ $cliente->id }}" />
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name_cliente" id="name_cliente"
                                placeholder="Digite o nome" value="{{ $cliente->name_cliente }}"/>
                            <label for="floatingInput">Nome</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submite" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
            <div class = "card-body">
            </div>
        </div>
    </div>
@endsection
