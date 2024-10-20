<?php

use App\Http\Controllers\AdminController;
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

Route::get('/contacts-2', function () {
    return view('contacts-2');
})->name('contacts-2');

Route::get('/finish', function () {
    return view('finish');
})->name('finish');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/progress-bars', function () {
    return view('progress-bars');
})->name('progess-bars');

Route::get('/servico', function () {
    return view('servico');
})->name('servico');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/single-product', function () {
    return view('single-product');
})->name('sigle-product');

Route::get('/sobre-barbeiros', function () {
    return view('sobre-barbeiros');
})->name('sobre-barbeiros');

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/dashboard', function () {
    return view('adm_dashboard.dashboard');
})->name('dashboard');

Route::get('/login_adm', function(){
    return view('login.login_adm');
})->name('login_adm');

//parte de criação, alteração e exclução de usuarios
Route::get('/tabelas', [UserClienteController::class, 'index_cliente'])->name('tabelas');
Route::post('/tabelas', [UserClienteController::class, 'IncluirCliente']);
Route::post('/tabelas/upd/{id}', [UserClienteController::class, 'ExecutarAlteracao'])->name('tabelas.upd');
Route::get('/tabelas/exc/{id}', [UserClienteController::class, 'ExcluirCliente'])->name('tabelas_ex');
Route::get('/tabelas/upd/{id}', [UserClienteController::class, 'BuscarAlterar'])->name('tabelas_upd');

//Parte administrador
Route::get('/perfil',[UserAdmController::class, 'index_adm'])->name('perfil');
Route::post('/perfil', [UserAdmController::class, 'IncluirAdm']);
Route::post('/perfil/upd/{id}', [UserAdmController::class, 'ExecutarAlteracao'])->name('perfil.upd');
Route::get('/perfil/exc/{id}', [UserAdmController::class, 'ExcluirAdm'])->name('perfil_ex');
Route::get('/perfil/upd/{id}', [UserAdmController::class, 'BuscarAlterar'])->name('perfil_upd');

//Parte de login
// web.php

Route::get('/login_adm', function() {
    return view('adm_dashboard.login_adm');
})->name('login_adm');
Route::post('/login_adm', [AuthController::class, 'login']);


Route::post('/cadastrar_adm', [AuthController::class, 'register'])->name('cadastrar_adm');
Route::get('/cadastrar_adm', function() {
    return view('adm_dashboard.cadastrar_adm');
});

//Rotas de segurança
Route::middleware('auth')->group(function () {
    Route::get('/login', function () {
        return view("adm_dashboard.login_adm");
    })->name('login');

    //Route::get('/categoria', [Categoria::class, 'index'])->name('categoria');
});