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
}
