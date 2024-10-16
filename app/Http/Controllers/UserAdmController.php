<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAdm;

class UserAdmController extends Controller
{
    public function index_adm()
    {
        $administrador = UserAdm::where("user_ativo", "1")->get();

        return view('perfil.perfil_adm_2', compact('administrador'));
    }


    public function IncluirAdm(Request $request)
    {
        $name_adm = $request->input("name_adm");
        $senha_adm = $request->input("senha_adm");
        $telefone_adm = $request->input("telefone");
        $email_adm = $request->input("email");
        $localizacao_adm = $request->input("localizacao");



        $nova = new UserAdm;
        $nova->name_adm = $name_adm;
        $nova->senha_adm = $senha_adm;
        $nova->telefone_adm = $telefone_adm;
        $nova->email_adm = $email_adm;
        $nova->localizacao_adm = $localizacao_adm;
        $nova->user_ativo = 1;
        $nova->save();

        return redirect('/perfil');
    }

    public function ExcluirAdm($id)
    {
        $user = UserAdm::where("id", $id)->first();

        $user->user_ativo = 0;
        $user->save();
        return redirect('/perfil');
    }

    public function BuscarAlterar($id)
    {
        $administrador = UserAdm::where("id", $id)->first();

        return view('perfil.perfil_editar', compact('administrador'));
    }

    public function ExecutarAlteracao(Request $request)
    {
        $dado_nome = $request->input("name_adm");
        $dado_senha = $request->input("senha_adm");
        $dado_telefone = $request->input("telefone_adm");
        $dado_email = $request->input("email_adm");
        $dado_localizacao = $request->input("localizacao_adm");
        $dado_id = $request->input('id');

        $user = UserAdm::where("id", $dado_id)->first();
        $user->name_adm = $dado_nome;
        $user->senha_adm = $dado_senha;
        $user->telefone_adm = $dado_telefone;
        $user->email_adm = $dado_email;
        $user->localizacao = $dado_localizacao;
        $user->save();

        return redirect('/perfil');
    }
}
