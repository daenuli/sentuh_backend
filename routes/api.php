<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::prefix('product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::post('/store', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/destroy/{id}', 'destroy');
    });
    // Route::get('/', [ProductController::class, 'index']);
    // Route::get('/{id}', [ProductController::class, 'show']);
    // Route::post('/store', [ProductController::class, 'store']);
    // Route::put('/{id}', [ProductController::class, 'update']);
    // Route::delete('/destroy/{id}', [ProductController::class, 'destroy']);
    // Route::get('/', [ProductController::class, 'index']);
    // Route::post('store', [ProductController::class, 'store']);
    // Route::put('store/{id}', [ProductController::class, 'update']);
    // Route::delete('store/{id}', [ProductController::class, 'destroy']);
});
