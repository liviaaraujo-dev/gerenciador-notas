<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/cadastro', [UserController::class, 'index'])->name('users.index');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/login', [LoginController::class, 'loginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Route::get('/login', [LoginController::class, 'loginForm'])->name('users.login.form');
// Route::post('/login', [LoginController::class, 'login'])->name('users.login');
Route::middleware(['auth'])->group(function () {
    Route::get('/list-users', [UserController::class, 'listUsers'])->name('users.list');
    Route::get('/list-notes', [NoteController::class, 'index'])->name('notes.list');
    Route::get('/create-note', [NoteController::class, 'create'])->name('notes.create');
    Route::post('/note', [NoteController::class, 'store'])->name('notes.store');
    // Route::resource('users', UserController::class);
});
