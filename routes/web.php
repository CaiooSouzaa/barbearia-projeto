<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout_inicial.index');
});

Route::get('/404-page', function () {
    return view('404-page');
});

Route::get('/505-page', function () {
    return view('505-page');
});

Route::get('/agendamento', function () {
    return view('agendamentp');
});

Route::get('/barbers', function () {
    return view('barbers');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkot', function () {
    return view('checkout');
});

Route::get('/contacts-2', function () {
    return view('contacts-2');
});

Route::get('/finish', function () {
    return view('finish');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/progress-bars', function () {
    return view('progress-bars');
});

Route::get('/servico', function () {
    return view('servico');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/single-product', function(){
    return view('single-product');
});

Route::get('/sobre-barbeiros', function () {
    return view('sobre-barbeiros');
});

Route::get('/testimonials', function(){
    return view('testimonials');
});