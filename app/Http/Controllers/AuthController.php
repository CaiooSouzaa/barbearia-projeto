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
            // Validação dos dados

            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Criação do usuário
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            // Autenticar o usuário
            Auth::login($user);

            // Redirecionar ou retornar uma resposta
            return redirect()->route('dashboard')->with('success', 'Registro concluído com sucesso!');
        }

        public function login(Request $request)
        {
            // Validação dos dados
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            // Verificar as credenciais e autenticar o usuário
            if (Auth::attempt($credentials)) {
                
                // Login bem-sucedido
                $request->session()->regenerate();
                return redirect()->intended('dashboard')->with('success', 'Login bem-sucedido!');
            }


            // Se as credenciais estiverem erradas
            return back()->withErrors([
                'email' => 'As credenciais fornecidas estão incorretas.',
            ]);
        }

        public function showRegisterForm()
        {
            return view('adm_dashboard.register'); // Certifique-se de que você tenha uma view chamada 'register' em 'resources/views/auth/register.blade.php'
        }

        public function showLoginForm()
        {
            return view('adm_dashboard.login'); // Certifique-se de que você tenha uma view chamada 'login' em 'resources/views/auth/login.blade.php'
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
            return view('adm_dashboard.dashboard'); // Certifique-se de que esta view existe
        }
    }
