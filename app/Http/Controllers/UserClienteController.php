<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCliente;
use App\Services\TelegramService;

class UserClienteController extends Controller
{
    public function index_cliente()
    {
        $cliente = UserCliente::where("ativo_cliente", "1")->get();
        return view('tabelas.tables_cliente', compact('cliente'));
    }

    public function IncluirCliente(Request $request, TelegramService $telegramService)
    {
        // Validação dos campos
        $request->validate([
            'name_cliente' => 'required|string|max:255',
            'cpf_cliente' => 'required|string|max:11',
            'numero_cliente' => 'required|string|max:15',
            'data_agendamento' => 'required|date', // Validação para a data
            'horario_agendamento' => 'required|date_format:H:i', // Validação para o horário
        ]);

        // Criar um novo cliente
        $novaCliente = new UserCliente;
        $novaCliente->name_cliente = $request->input("name_cliente");
        $novaCliente->cpf_cliente = $request->input("cpf_cliente");
        $novaCliente->numero_cliente = $request->input("numero_cliente");
        $novaCliente->data_agendamento = $request->input("data_agendamento"); // Salvar a data
        $novaCliente->horario_agendamento = $request->input("horario_agendamento"); // Salvar o horário
        $novaCliente->ativo_cliente = 1;
        $novaCliente->save();

        // Preparar a mensagem do Telegram
        $nomeCliente = $novaCliente->name_cliente;
        $dataAgendamento = $novaCliente->data_agendamento;
        $horarioAgendamento = $novaCliente->horario_agendamento;
        $mensagem = "Olá, $nomeCliente! Seu cadastro foi realizado com sucesso. Seu agendamento está para o dia $dataAgendamento às $horarioAgendamento.";

        // Enviar mensagem via Telegram
        $chatId = '1642295470'; // Substitua pelo chatId correto do cliente, se necessário
        $telegramService->sendMessage($chatId, $mensagem);

        return redirect('/tabelas')->with('success', 'Cliente cadastrado e notificado com sucesso!');
    }

    public function agendar(Request $request, TelegramService $telegramService)
    {
        $request->validate([
            'name_cliente' => 'required|string|max:255',
            'cpf_cliente' => 'required|string|max:14', // CPF com máscara
            'numero_cliente' => 'required|string|max:15', // Telefone com máscara
            'data_agendamento' => 'required|date',
            'horario_agendamento' => 'required|string|max:5',
            'chat_id' => 'required|string', // Adicione a validação para o chat_id
        ]);

        // Verificar se o horário já está agendado
        $agendamentoExistente = UserCliente::where('data_agendamento', $request->data_agendamento)
            ->where('horario_agendamento', $request->horario_agendamento)
            ->exists();

        if ($agendamentoExistente) {
            return redirect()->back()->withErrors(['horario_agendamento' => 'Este horário já está agendado.']);
        }

        // Criar novo agendamento
        $cliente = UserCliente::create([
            'name_cliente' => $request->name_cliente,
            'cpf_cliente' => $request->cpf_cliente,
            'numero_cliente' => $request->numero_cliente,
            'data_agendamento' => $request->data_agendamento,
            'horario_agendamento' => $request->horario_agendamento,
            'chat_id' => $request->chat_id, // Certifique-se de que você está passando o chat_id corretamente
            'ativo_cliente' => 1, // Definindo o cliente como ativo
        ]);

        // Enviar notificação via Telegram
        $message = "Novo agendamento: \nNome: {$cliente->name_cliente} \nCPF: {$cliente->cpf_cliente} \nTelefone: {$cliente->numero_cliente} \nData: {$cliente->data_agendamento} \nHorário: {$cliente->horario_agendamento}";
        $telegramService->sendMessage($cliente->chat_id, $message);

        return redirect()->back()->with('success', 'Agendamento realizado com sucesso!');
    }

    public function ExcluirCliente($id)
    {
        $userCliente = UserCliente::where("id", $id)->first();
        $userCliente->ativo_cliente = 0;
        $userCliente->save();
        return redirect('/tabelas');
    }

    public function BuscarAlterar($id)
    {
        $cliente = UserCliente::where("id", $id)->first();
        return view('tabelas.alterar_cliente', compact('cliente'));
    }

    public function ExecutarAlteracao(Request $request)
    {
        $dado_nome = $request->input("name_cliente");
        $dado_cpf = $request->input("cpf_cliente");
        $dado_numero = $request->input("numero_cliente");
        $dado_data = $request->input("data_agendamento");
        $dado_horario = $request->input("horario_agendamento");

        $dado_id = $request->input('id');

        $userCliente = UserCliente::where("id", $dado_id)->first();
        $userCliente->name_cliente = $dado_nome;
        $userCliente->cpf_cliente = $dado_cpf;
        $userCliente->numero_cliente = $dado_numero;
        $userCliente->data_agendamento = $dado_data;
        $userCliente->horario_agendamento = $dado_horario;
        $userCliente->save();

        return redirect('/tabelas');
    }

    public function testarTelegram(TelegramService $telegramService)
{
    $chatId = '1642295470'; // Use o chat_id correto
    $mensagem = 'Teste de mensagem do bot.';

    $result = $telegramService->sendMessage($chatId, $mensagem);

    if ($result->ok) {
        return response()->json(['status' => 'Mensagem enviada com sucesso!']);
    } else {
        return response()->json(['status' => 'Erro ao enviar mensagem.', 'error' => $result->description]);
    }
}


    public function showAgendar(Request $request)
    {
        // Obtenha o chat_id da requisição se estiver disponível
        $chatId = $request->input('chat_id'); // Ou defina de outra maneira

        // Passa o chatId para a view
        return view('agendar', compact('chatId')); // Ajuste conforme a localização do arquivo
    }

    // Método para processar a criação do agendamento
    public function criarAgendamento(Request $request, TelegramService $telegramService)
{
    // Validação dos dados do formulário
    $request->validate([
        'name_cliente' => 'required|string|max:255',
        'cpf_cliente' => 'required|string|max:14',
        'numero_cliente' => 'required|string|max:15',
        'data_agendamento' => 'required|date',
        'horario_agendamento' => 'required|string|max:5',
        'chat_id' => 'nullable|string', // Pode ser nulo se não for enviado
    ]);

    // Verificar se o horário já está agendado
    $agendamentoExistente = UserCliente::where('data_agendamento', $request->data_agendamento)
        ->where('horario_agendamento', $request->horario_agendamento)
        ->exists();

    if ($agendamentoExistente) {
        return redirect()->back()->withErrors(['horario_agendamento' => 'Este horário já está agendado.']);
    }

    // Criação do cliente
    $cliente = UserCliente::create([
        'name_cliente' => $request->name_cliente,
        'cpf_cliente' => $request->cpf_cliente,
        'numero_cliente' => $request->numero_cliente,
        'data_agendamento' => $request->data_agendamento,
        'horario_agendamento' => $request->horario_agendamento,
        'chat_id' => $request->chat_id, // Salva o chat_id se disponível
    ]);

    // Enviar notificação via Telegram
    if ($cliente->chat_id) { // Verifica se o chat_id está disponível
        $message = "Olá, {$cliente->name_cliente}! Seu agendamento foi realizado com sucesso para o dia {$cliente->data_agendamento} às {$cliente->horario_agendamento}.";
        
        // Tente enviar a mensagem
        $result = $telegramService->sendMessage($cliente->chat_id, $message);

        // Verifique a resposta do Telegram
        if (!$result->ok) {
            // Log da mensagem de erro se a notificação falhar
        }
    }

    return redirect()->back()->with('success', 'Agendamento realizado com sucesso!');
}
}
