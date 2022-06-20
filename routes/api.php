<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ArenaController;
use App\Http\Controllers\FieldController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/search/{q}', [ArenaController::class, 'findArena']);
Route::get('/arenas/get', [ArenaController::class, 'getArenas']);
Route::get('/arenas/{arenaID}/field', [ArenaController::class, 'getFields']);

Route::post('/fields/availability', [FieldController::class, 'getAvailability']);
Route::post('/fields/book', [FieldController::class, 'bookFields']);