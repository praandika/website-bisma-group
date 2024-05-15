<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowProductController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Product;
use App\Livewire\Simulation;
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
Route::post('/product/search', [HomeController::class, 'search'])->name('search');
Route::get('/product/{cat}', Product::class);
Route::get('/product/{model}/show', [ShowProductController::class, 'show'])->name('show');
Route::get('/simulation', Simulation::class);
Route::get('/contact', Contact::class);
Route::get('/about', About::class);