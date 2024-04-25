<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product1Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/products', Product1Controller::class);
