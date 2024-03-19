<?php

use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
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


/* ROTTE PER UTENTI NON REGISTRATI */
Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/serviceContainer', [Controller::class, 'serviceContainer'])->name('serviceContainer');
Route::get('/serviceStorage', [Controller::class, 'serviceStorage'])->name('serviceStorage');
Route::get('/serviceVirtualMachine', [Controller::class, 'serviceVirtualMachine'])->name('serviceVirtualMachine');



/* ROTTE GESTIONE PROFILO */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* ROTTE ADMIN PRIVATE */
Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('dashboard-services', [ServiceController::class, 'index'])->name('dashboard-services');
        Route::resource('service', ServiceController::class);
    });

require __DIR__.'/auth.php';
