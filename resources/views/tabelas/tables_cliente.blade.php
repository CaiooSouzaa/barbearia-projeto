@extends('tabelas.tables')
@section('conteudo')
    <div class="container-fluid py-4">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-4">
                    <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        NOVO
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Tabela de Clientes</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NOME</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CPF</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TELEFONE</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AÇÕES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cliente as $linhas)
                                        <tr>
                                            <td>{{ $linhas->id }}</td>
                                            <td>{{ $linhas->name_cliente }}</td>
                                            <td>{{ $linhas->cpf_cliente }}</td>
                                            <td>{{ $linhas->numero_cliente }}</td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('tabelas_ex', ['id' => $linhas->id]) }}" class="btn btn-danger me-2" aria-label="Excluir">
                                                        <span class="fa fa-trash"></span>
                                                    </a>
                                                    <a href="{{ route('tabelas_upd', ['id' => $linhas->id]) }}" class="btn btn-success" aria-label="Alterar">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/tabelas">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Novos Clientes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name_cliente" class="form-label">NOME</label>
                            <input type="text" class="form-control" name="name_cliente" id="name_cliente" placeholder="Digite o nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="cpf_cliente" class="form-label">CPF</label>
                            <input type="text" class="form-control" name="cpf_cliente" id="cpf_cliente" placeholder="Digite o CPF" required>
                        </div>
                        <div class="mb-3">
                            <label for="numero_cliente" class="form-label">TELEFONE</label>
                            <input type="text" class="form-control" name="numero_cliente" id="numero_cliente" placeholder="Digite o telefone" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
