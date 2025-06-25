<?php

use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\AluguelController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

// Página inicial protegida (após login ou cadastro)
Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');

// Equipamentos (requer login)
Route::resource('equipamentos', EquipamentoController::class)->middleware('auth');

// Aluguéis (requer login)
Route::resource('alugueis', AluguelController::class)->middleware('auth');

// Autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// web.php
Route::delete('/conta/excluir', [AuthController::class, 'destroy'])->name('account.delete');
Route::get('/alterar-senha', [AuthController::class, 'showChangePasswordForm'])->middleware('auth')->name('password.change.form');
Route::post('/alterar-senha', [AuthController::class, 'changePassword'])->middleware('auth')->name('password.change');



Route::get('/chat', [ChatController::class, 'index'])->name('chat.ajuda');
Route::post('/chat', [ChatController::class, 'responder'])->name('chat.enviar');


Route::get('/chat-ajuda', [ChatController::class, 'index'])->name('chat.ajuda');
Route::post('/chat-ajuda', [ChatController::class, 'responder'])->name('chat.responder');



// Painel do Usuário (Dashboard)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
