<?php

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

Route::get('/', function () {
    return view('oldalak.fooldal');
});

Route::get('/fooldal', function () {
    return view('oldalak.fooldal');
});
Route::get('/elerhetoseg', function () {
    return view('oldalak.elerhetoseg');
});
Route::get('/adatvedelem', function () {
    return view('oldalak.adatvedelem');
});
Route::get('/projekt', function () {
    return view('oldalak.projekt');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/profilok', [ProfileController::class, 'showAllUsers']);