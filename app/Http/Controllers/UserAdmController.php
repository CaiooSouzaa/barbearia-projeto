<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAdm;

class UserAdmController extends Controller
{
    public function index()
    {
        $administrador = UserAdm::where("user_ativo", "0")->get();
        return view('tabelas.tables', compact('administrador'));
    }

    public function IncluirAdministrador(Request $request)
    {
        $name_adm = $request->input("name_adm");
        $senha_adm = $request->input("senha_adm");

        $nova = new UserAdm;
        $nova->name_adm = $name_adm;
        $nova->senha_adm = $senha_adm;
        $nova->user_ativo = 0;
        $nova->save();

        return redirect('/tabelas');
    }

    public function ExcluirCategoria($id){
        $user = UserAdm::where("id", $id)->first();

        $user->user_ativo = 0;
        $user->save();
    }

    public function BuscarAlterar($id){
        $userAlterar = UserAdm::where("id", $id)->first();

        return view('tabela_clientes.alterar_cliente', compact('userAlterar'));
    }

    public function ExecutarAlteracao(Request $request){
        $dado_nome = $request->input("name_adm");
        $dado_senha = $request->input("senha_adm");
        $dado_id = $request->input('id');

        $user = UserAdm::where("id", $dado_id)->first();
        $user->name_adm = $dado_nome;
        $user->senha_adm = $dado_senha;
        $user->save();

        return redirect('/tabelas');
    }
}
