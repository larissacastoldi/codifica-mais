<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Joias;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/joias', Joias::class);
