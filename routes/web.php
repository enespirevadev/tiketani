<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\VenueController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'index'])->name('home.search');


Route::get('/checkout/{event}', [HomeController::class, 'checkout'])->name('home.checkout');
Route::post('/checkout/{event}', [HomeController::class, 'checkout'])->name('home.checkout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('events', EventController::class)
    ->only(['index', 'create', 'edit', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('venues', VenueController::class)
    ->only(['index', 'create', 'edit', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('teams', TeamController::class)
    ->only(['index', 'create', 'edit', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('tournaments', TournamentController::class)
    ->only(['index', 'create', 'edit', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('customers', CustomerController::class)
    ->only(['index', 'create', 'edit', 'store', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('orders', OrderController::class)
    ->only(['index', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
