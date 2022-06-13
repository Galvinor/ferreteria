<?php

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

// Route::middleware('auth:api')->group(function () {
//     Route::get('user',[AuthController::class,'user']);
//     Route::resource('product',productController::class);
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('product', 'Api\productController');
Route::resource('provider', 'Api\providerController');

// Route::post('login',[AuthController::class,'login']);
// Route::post('register',[AuthController::class,'register']);
