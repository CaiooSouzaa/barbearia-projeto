@extends('tabelas.tables')

@section('conteudo')
    <style>
        h1 {
            font-size: 32px;
            text-align: center;
        }

        .breadcrumb-item {
            font-size: 18px;
        }

        .card-header,
        .card-body,
        label,
        input {
            font-size: 18px;
        }

        .btn {
            font-size: 16px;
        }

        .form-floating {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        .table {
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            padding: 10px;
        }

        .form-control {
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #5bc0de;
            box-shadow: 0 0 5px rgba(91, 192, 222, 0.5);
        }

        .form-floating label {
            transition: all 0.3s ease;
        }

        .form-control:focus+label {
            color: #5bc0de;
            transform: translateY(-18px) scale(0.85);
        }

        .card {
            margin-top: 20px;
        }

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
                                            placeholder="Digite o nome" value="{{ $cliente->name_cliente }}" />
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
                                            placeholder="Digite o CPF" value="{{ $cliente->cpf_cliente }}" />
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
                                            placeholder="Digite o telefone" value="{{ $cliente->numero_cliente }}" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">
                                    <label for="data_agendamento">DATA</label>
                                </td>
                                <td>
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="data_agendamento"
                                            id="data_agendamento" placeholder="Selecione a data"
                                            value="{{ $cliente->data_agendamento }}" />
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">
                                    <label for="horario_agendamento">HORÁRIO</label>
                                </td>
                                <td>
                                    <select class="form-control" name="horario_agendamento" id="horario_agendamento">
                                        <option value="">Selecione um horário</option>
                                        @foreach ($horarios as $horario)
                                            <option value="{{ $horario }}"
                                                {{ $horario == $cliente->horario_agendamento ? 'selected' : '' }}>
                                                {{ $horario }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                    </tbody>
                </table>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                        onclick="window.location.href='{{ route('tabelas') }}'">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
