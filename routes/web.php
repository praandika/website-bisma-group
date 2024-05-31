<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowProductController;
use App\Http\Controllers\SimulationController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Job;
use App\Livewire\Product;
use App\Livewire\Spareparts;
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
Route::post('/spart/search', [HomeController::class, 'searchSpart'])->name('search.spart');
Route::post('/job/search', [HomeController::class, 'searchJob'])->name('search.job');
Route::get('/product/{cat}', Product::class);
Route::get('/spart/{cat}', Spareparts::class);
Route::get('/product/{model}/show', [ShowProductController::class, 'show'])->name('show');
Route::get('/simulation', [SimulationController::class, 'index'])->name('simulation');
Route::post('/simulation/count', [SimulationController::class, 'count'])->name('count');
Route::get('/contact', Contact::class);
Route::get('/job/{cat}', Job::class);
Route::get('/about', About::class);