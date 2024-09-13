<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout_inicial.index');
});

Route::get('/barbers', function () {
    return view('barbers');
});
