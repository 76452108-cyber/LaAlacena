<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {

    if (auth()->user()->rol !== 'admin') {
        abort(403);
    }

    return view('admin.dashboard');

})->middleware('auth');

Route::get('/usuarios', function () {

    if(auth()->user()->rol !== 'admin'){
        abort(403);
    }

    $usuarios = User::all();

    return view('admin.usuarios', compact('usuarios'));

})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
