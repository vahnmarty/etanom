<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PaypalController;

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


Route::group(['prefix' => 'paypal'], function(){
    Route::post('paypal/token', [PaypalController::class, 'createToken']);
    Route::post('orders/{code}', [PaypalController::class, 'createOrder']);
    Route::post('orders/capture/{orderID}', [PaypalController::class, 'capture']);
    Route::post('orders/authorize/{orderID}', [PaypalController::class, 'authorizeOrder']);
});
