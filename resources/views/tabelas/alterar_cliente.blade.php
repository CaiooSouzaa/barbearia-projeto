@extends('tabelas.tables')

@section('conteudo')
    <style>
        h1 {
            font-size: 32px; /* Aumenta o tamanho do título */
            text-align: center; /* Centraliza o título */
        }

        .breadcrumb-item {
            font-size: 18px; /* Aumenta o tamanho das entradas do breadcrumb */
        }

        .card-header, .card-body, label, input {
            font-size: 18px; /* Aumenta o tamanho do texto geral */
        }

        .btn {
            font-size: 16px; /* Aumenta o tamanho do texto dos botões */
        }

        /* Estilizando o formulário para ficar centralizado */
        .form-floating {
            width: 100%;
            max-width: 500px; /* Limita o tamanho do formulário */
            margin: 0 auto; /* Centraliza horizontalmente */
        }

        /* Estilizando a tabela */
        .table {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            vertical-align: middle;
            text-align: center;
            padding: 10px;
        }

        .form-control {
            transition: all 0.3s ease; /* Animação ao focar no campo */
        }

        .form-control:focus {
            border-color: #5bc0de; /* Cor do campo ao ser focado */
            box-shadow: 0 0 5px rgba(91, 192, 222, 0.5); /* Efeito de sombra ao focar */
        }

        /* Estilizando a animação de foco */
        .form-floating label {
            transition: all 0.3s ease;
        }

        .form-control:focus + label {
            color: #5bc0de; /* Muda a cor do rótulo ao focar */
            transform: translateY(-18px) scale(0.85); /* Muda a posição e tamanho do rótulo */
        }

        .card {
            margin-top: 20px;
        }

        /* Centralizando o conteúdo da modal */
        .modal-content {
            padding: 20px;
        }
    </style>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Clientes</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Clientes</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Id cliente: {{ $cliente->id }}
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="2" class="text-center">Informações do Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="{{ route('tabelas.upd', $cliente->id) }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $cliente->id }}">

                            <tr>
                                <td class="text-center">
                                    <label for="name_cliente">NOME</label>
                                </td>
                                <td>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name_cliente" id="name_cliente"
                                               placeholder="Digite o nome" value="{{ $cliente->name_cliente }}"/>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">
                                    <label for="cpf_cliente">CPF</label>
                                </td>
                                <td>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="cpf_cliente" id="cpf_cliente"
                                               placeholder="Digite o CPF" value="{{ $cliente->cpf_cliente }}"/>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">
                                    <label for="numero_cliente">TELEFONE</label>
                                </td>
                                <td>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="numero_cliente" id="numero_cliente"
                                               placeholder="Digite o telefone" value="{{ $cliente->numero_cliente }}"/>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.href='{{ route('tabelas') }}'">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
