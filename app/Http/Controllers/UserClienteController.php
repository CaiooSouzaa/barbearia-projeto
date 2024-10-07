<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCliente;

class UserClienteController extends Controller
{
    public function index_cliente()
    {
        $cliente = UserCliente::where("ativo_cliente", "1")->get();
        return view('tabelas.tables_cliente', compact('cliente'));
    }

    public function IncluirCliente(Request $request)
    {
        $name_cliente = $request->input("name_cliente");
        $cpf_cliente= $request->input("cpf_cliente");
        $numero_cliente= $request->input("numero_cliente");
        
        $novaCliente = new UserCliente;
        $novaCliente->name_cliente = $name_cliente;
        $novaCliente->cpf_cliente = $cpf_cliente;
        $novaCliente->numero_cliente = $numero_cliente;
        $novaCliente->ativo_cliente = 0;
        $novaCliente->save();

        return redirect('/tabelas');
    }

    public function ExcluirCliente($id){
        $userCliente = UserCliente::where("id", $id)->first();

        $userCliente->ativo_cliente = 0;
        $userCliente->save();
    }

    public function BuscarAlterar($id){
        $userAlterar = UserCliente::where("id", $id)->first();

        return view('tabela_clientes.alterar_cliente', compact('userAlterar'));
    }

    public function ExecutarAlteracao(Request $request){
        $dado_nome = $request->input("name_adm");
        $dado_cpf = $request->input("cpf_cliente");
        $dado_numero= $request->input("numero_cliente");
        
        $dado_id = $request->input('id');

        $userCliente = UserCliente::where("id", $dado_id)->first();
        $userCliente->name_cliente = $dado_nome;
        $userCliente->cpf_cliente = $dado_cpf;
        $userCliente->numero_cliente = $dado_numero;  
        $userCliente->save();

        return redirect('/tabelas');
    }
}
