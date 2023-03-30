<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarModelController;
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


Route::resource('brands',BrandController::class, ['only' => ['index', 'show']]);
Route::resource('carModels',CarModelController::class, ['only' => ['index', 'show']]);
Route::resource('cars',CarController::class, ['only' => ['index', 'show']]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('brands', BrandController::class, ['only' => ['index', 'show']]);
    Route::resource('carModels', CarModelController::class, ['only' => ['index', 'show']]);
    Route::resource('cars', CarController::class, ['only' => ['index', 'show']]);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('brands', BrandController::class, ['except' => ['index', 'show']]);
    Route::resource('carModels', CarModelController::class, ['except' => ['index', 'show']]);
    Route::resource('cars', CarController::class, ['except' => ['index', 'show']]);
});

require __DIR__ . '/auth.php';
