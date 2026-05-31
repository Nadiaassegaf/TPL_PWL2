<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SupplierController;

Route::get('/suppliers', [SupplierController::class, 'index']);