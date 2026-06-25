<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Producto;

Route::get('/', function () {
    return view('welcome');
});

// PANEL RESTAURANTE
Route::get('/restaurante', function () {
    $productos = Producto::where('user_id', auth()->id())->get();
    return view('restaurante.restaurante', compact('productos'));
})->middleware('auth');

Route::get('/admin', function () {
    if (auth()->user()->rol !== 'admin') {
        abort(403);
    }
    return view('admin.dashboard');
})->middleware('auth');

Route::get('/usuarios', function () {
    if (auth()->user()->rol !== 'admin') {
        abort(403);
    }
    $usuarios = User::all();
    return view('admin.usuarios', compact('usuarios'));
})->middleware('auth');

// CRUD PRODUCTOS
Route::resource('productos', ProductoController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';