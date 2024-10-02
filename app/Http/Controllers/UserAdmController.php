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
}
