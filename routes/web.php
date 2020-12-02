<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('produto', ProdutoController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('produto/create', [ProdutoController::class, 'create']);

