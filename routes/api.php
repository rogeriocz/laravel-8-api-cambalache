<?php

use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TypeController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/products', function (Request $request) {
    return $request->user();
}); */




// Api de menssages
/* Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']); */

Route::get('/types', [TypeController::class, 'index']);
Route::apiResource('emails', EmailController::class);
Route::apiResource('anuncios', AnuncioController::class);
