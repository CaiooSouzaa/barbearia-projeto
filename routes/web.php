<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout_inicial.index');
});
