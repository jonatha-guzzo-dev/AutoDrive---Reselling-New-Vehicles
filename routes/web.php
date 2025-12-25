<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\veiculosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/exibe_v', [veiculosController::class, 'exibe'])->name('veiculos.exibe');
    Route::post('/insere_v', [veiculosController::class, 'insere'])->name('veiculos.insere');
    Route::get('/lista_v', [veiculosController::class, 'lista'])->name('veiculos.lista');

    Route::get('/edita_v/{id}', [veiculosController::class, 'edita'])->name('veiculos.edita');
    Route::post('/atualiza_v/{id}', [veiculosController::class, 'atualiza'])->name('veiculos.atualiza');

    Route::get('/apaga_v/{id}', [veiculoController::class, 'apaga'])->name('veiculos.apaga');
    
});



require __DIR__.'/auth.php';

