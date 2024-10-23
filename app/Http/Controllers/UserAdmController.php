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
        $name = $request->input("name");
        $password = $request->input("password");
        $email = $request->input("email");



        $nova = new UserAdm;
        $nova->name = $name;
        $nova->senha_adm = $senha_adm;
        $nova->email_adm = $email_adm;
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
        $dado_nome = $request->input("name");
        $dado_senha = $request->input("password");
        $dado_email = $request->input("email");
        $dado_id = $request->input('id');

        $user = UserAdm::where("id", $dado_id)->first();
        $user->name = $dado_nome;
        $user->senha_adm = $dado_senha;
        $user->email_adm = $dado_email;
        $user->save();

        return redirect('/perfil');
    }
}
