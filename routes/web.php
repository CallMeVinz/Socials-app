<?php

use App\Http\Controllers\ContactController;
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
    return view('welcome');
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

Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::get('/contact/create', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');
Route::get('/contact/{id}/edit', [ContactController::class,'edit'])->name('contact.edit');
Route::put('/contact/{id}', [ContactController::class,'update'])->name('contact.update');
Route::delete('/contact/{id}', [ContactController::class,'destroy'])->name('contact.destroy');
