<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/single-product', function(){
    return view('single-product');
})->name('sigle-product');

Route::get('/sobre-barbeiros', function () {
    return view('sobre-barbeiros');
})->name('sobre-barbeiros');

Route::get('/testimonials', function(){
    return view('testimonials');
});

Route::get('/login2', function(){
    return view('login2');
});