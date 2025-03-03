<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

// Registrar rutas de autenticación de Laravel
Auth::routes();

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Página principal de recetas
Route::get('/recetas', function () {
    return view('recetas');
})->name('recetas');

// Ruta para ver una receta específica
Route::get('/receta/{nombre}', [RecetaController::class, 'mostrar'])->name('receta');

// Ruta de login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Ruta de registro
Route::get('/register', function () {
    return view('register');
})->name('register');

// Ruta de logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Ruta de home (redirección automática de Laravel)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

