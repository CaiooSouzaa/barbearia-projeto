@extends('tabelas.tables')
@section('conteudo')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Authors table</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            NOME</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            CPF</th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            TELEFONE</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ALTERAÇÕES</th>
                                    </tr>
                                </thead>
                                <!--parte que vai aparecer os dados-->
                                <tbody>
      
                                    @foreach ($cliente as $linhas)
                                        <tr>
                                            <td>{{ $linhas->id }}</td>                                            
                                            <td>{{ $linhas->name_cliente }}</td>
                                            <td>{{ $linhas->cpf_cliente }}</td>
                                            <td>{{ $linhas->numero_cliente }}</td>
                                            <td>
                                                <a href='{{ route('tabelas_ex', ['id' => $linhas->id]) }}'
                                                    class='btn btn-danger'>
                                                    <span class='fa fa-trash'></span>
                                                </a>
                                                |

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
                    @csrf <!--colocar quando tiver formulario-->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nova categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nome_cliente" id="nome_cliente"
                                placeholder="Digite o nome">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cat_descricao" id="cat_descricao"
                                placeholder="Digite o nome da categoria">
                            <label for="floatingInput">Categoria</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submite" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
