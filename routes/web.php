<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

/* Route::get('/home', [HomeController::class, 'index'])->name('home'); */
Route::get('/home', [HomeController::class, 'index2'])->name('home');
Route::redirect('/', '/home');
/* Route::resource('invitados', App\Http\Controllers\InvitadoController::class); */