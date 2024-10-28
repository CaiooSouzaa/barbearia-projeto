<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Agendar Consulta</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('agendar') }}">
            @csrf
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
            <div class="mb-3">
                <label for="data_agendamento" class="form-label">DATA AGENDAMENTO</label>
                <input type="date" class="form-control" name="data_agendamento" id="data_agendamento" required>
            </div>
            <div class="mb-3">
                <label for="horario_agendamento" class="form-label">HORÁRIO AGENDAMENTO</label>
                <select class="form-control" name="horario_agendamento" id="horario_agendamento" required>
                    @for ($i = 8; $i <= 18; $i++)
                        @foreach (['00', '15', '30', '45'] as $minuto)
                            @php
                                $horario = sprintf('%02d:%s', $i, $minuto);
                            @endphp
                            <option value="{{ $horario }}">{{ $horario }}</option>
                        @endforeach
                    @endfor
                </select>
            </div>
            <input type="hidden" name="chat_id" value="{{ $chatId ?? '' }}"> <!-- Campo oculto para o chat_id -->
            <button type="submit" class="btn btn-primary">Agendar</button>
        </form>
    </div>
</body>

</html>
