<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('autores', App\Http\Controllers\AutoreController::class);
Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('libros', App\Http\Controllers\LibroController::class);
Route::resource('prestamos', App\Http\Controllers\PrestamoController::class);
Route::resource('reservas', App\Http\Controllers\ReservaController::class);


