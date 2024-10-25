<?php

use App\Http\Controllers\UserAdmController;
use App\Http\Controllers\UserClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('layout_inicial.index');
})->name('index');

Route::get('/agendamento', function () {
    return view('agendamento');
})->name('agendamento');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkot', function () {
    return view('checkout');
})->name('checkot');

Route::get('/servico', function () {
    return view('servico');
})->name('servico');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');


Route::get('/sobre-barbeiros', function () {
    return view('sobre-barbeiros');
})->name('sobre-barbeiros');

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/dashboard', function () {
    return view('adm_dashboard.dashboard');
})->name('dashboard');




//Parte administrador
Route::middleware('auth:user')->group(function () {
    Route::get('/perfil', [AuthController::class, 'index_adm'])->name('perfil');
    Route::post('/perfil/upd/{id}', [AuthController::class, 'ExecutarAlteracao'])->name('perfil.upd');
    Route::get('/perfil/exc/{id}', [AuthController::class, 'ExcluirAdm'])->name('perfil_ex');
    Route::get('/perfil/upd/{id}', [AuthController::class, 'BuscarAlterar'])->name('perfil_upd');
});



// Rotas de Login e Registro
// Rotas de Login e Registro para usuários não autenticados
Route::middleware('guest:user')->group(function () {
    Route::get('/login', function () {
        return view("adm_dashboard.login");
    })->name('login');
    
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', function () {
        return view("adm_dashboard.register");
    })->name('register');
    
    Route::post('/register', [AuthController::class, 'register']);
});

// Rotas protegidas para usuários autenticados
Route::middleware('auth:user')->group(function () {
    Route::get('/dashboard', function () {
        return view('adm_dashboard.dashboard');
    })->name('dashboard');

    Route::get('/tabelas', [UserClienteController::class, 'index_cliente'])->name('tabelas');
    Route::post('/tabelas', [UserClienteController::class, 'IncluirCliente']);
    Route::post('/tabelas/upd/{id}', [UserClienteController::class, 'ExecutarAlteracao'])->name('tabelas.upd');
    Route::get('/tabelas/exc/{id}', [UserClienteController::class, 'ExcluirCliente'])->name('tabelas_ex');
    Route::get('/tabelas/upd/{id}', [UserClienteController::class, 'BuscarAlterar'])->name('tabelas_upd');
});
