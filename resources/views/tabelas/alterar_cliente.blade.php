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
                Id cliente: {{ $userAlterar->id }}
            </div>
            <div class="modal-content">
                <form method="POST" action="{{ route('tabelas.upd', ['id' => $userAlterar->id]) }}">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id" value="{{ $userAlterar->id }}" />
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name_cliente" id="name_cliente"
                                placeholder="Digite o nome" value="{{ $userAlterar->name_cliente }}"/>
                            <label for="name_cliente">NOME</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cpf_cliente" id="cpf_cliente"
                                placeholder="Digite o CPF" value="{{ $userAlterar->cpf_cliente }}"/>
                            <label for="cpf_cliente">CPF</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="numero_cliente" id="numero_cliente"
                                placeholder="Digite o telefone" value="{{ $userAlterar->numero_cliente }}"/>
                            <label for="numero_cliente">TELEFONE</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
@endsection
