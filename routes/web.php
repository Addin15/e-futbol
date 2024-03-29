<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArenaController;

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
    return view('welcome');
})->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Compare
Route::get('/compare/{first}/{second}', [ArenaController::class, 'compare'])->name('compare');
Route::get('/compare/{first}', [ArenaController::class, 'compare'])->name('compare');
Route::get('/compare/', [ArenaController::class, 'compare'])->name('compare');