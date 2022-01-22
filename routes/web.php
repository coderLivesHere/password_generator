<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('selecting-settings');
});

Route::get('/generate', 'App\Http\Controllers\Generate@output');