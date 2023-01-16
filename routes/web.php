<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('guest.welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard'); 

//middleware verifica se l'utente è autenticato/loggato

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('projects', ProjectController::class)->parameters(['projects' => 'project:slug']); //lui si aspetta un id, noi diciamo che è lo slug
        Route::resource('categories', CategoryController::class)->parameters(['categories' => 'category:slug']); //in questo caso potremo fare a meno dello slug
        Route::resource('tags', TagController::class)->parameters(['tags' => 'tag:slug'])->except('show', 'create', 'edit'); //voglio fare tutto nella index
    });

// Route::middleware('auth')->group = per proteggere una serie di rotte e raggrupparle da un sistema di autenticazione

//lo commentiamo perchè in pacificdev non viene aggiornato da tailwindcss etc
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';