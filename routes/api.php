<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\TagController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/v1/products', [ProductController::class, 'index']);
Route::post('v1/products', [ProductController::class, 'store']);
Route::get('/v1/products/{id}', [ProductController::class, 'show']);

Route::get('/v1/tags', [TagController::class, 'index']);
Route::post('v1/tags', [TagController::class, 'store']);
