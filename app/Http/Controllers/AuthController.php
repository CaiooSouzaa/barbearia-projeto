<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registro concluído com sucesso!');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Login bem-sucedido!');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('adm_dashboard.register');
    }

    public function showLoginForm()
    {
        return view('adm_dashboard.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Você saiu com sucesso!');
    }

    public function index()
    {
        return view('adm_dashboard.dashboard');
    }

    public function ExcluirAdm($id)
    {
        $user = Auth::find($id);

        if ($user) {
            $user->user_ativo = 0;
            $user->save();
            return redirect('/perfil')->with('success', 'Administrador excluído com sucesso!');
        }

        return redirect('/perfil')->with('error', 'Usuário não encontrado.');
    }

    public function BuscarAlterar($id)
    {
        $administrador = Auth::find($id);

        if ($administrador) {
            return view('perfil.perfil_editar', compact('administrador'));
        }

        return redirect('/perfil')->with('error', 'Usuário não encontrado.');
    }

    public function ExecutarAlteracao(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = Auth::find($request->input('id'));

        if ($user) {
            $user->name = $request->input('name');
            $user->email = $request->input('email_adm');

            if ($request->input('senha_adm')) {
                $user->password = Hash::make($request->input('senha_adm'));
            }

            $user->save();

            return redirect('/perfil')->with('success', 'Dados atualizados com sucesso!');
        }

        return redirect('/perfil')->with('error', 'Usuário não encontrado.');
    }
}
