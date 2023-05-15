<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CultureController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PoissonController;
use App\Http\Controllers\Admin\ReclamationController;
use App\Http\Controllers\Admin\StatistiqueController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth', 'role:Admin', 'verified'])->name('Admin.')->prefix('Admin')->group(function(){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/reclamation', ReclamationController::class);
    Route::resource('/culture', CultureController::class);
    Route::resource('/message', MessageController::class);
    Route::resource('/client', ClientController::class);
    Route::resource('/statistique', StatistiqueController::class);
    Route::resource('/poisson', PoissonController::class);
});
Route::resource('client',ClientController::class);
Route::get('/index', [ClientController::class, 'liste_etudiant']);
Route::get('/create', [ClientController::class, 'Ajouter_etudiant']);
Route::post('/create/traitement', [ClientController::class, 'Ajouter_traitement']);
Route::get('/edit/{id}', [ClientController::class, 'edit_etudiant']);
Route::post('/edit/traitement', [ClientController::class, 'edit_traitement']);
Route::get('/delete/{id}', [ClientController::class, 'delete_etudiant']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
