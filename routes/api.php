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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/GetxData', [App\Http\Controllers\ApiController::class, 'GetxData'])->name('GetxData');
Route::get('/b2b_invites', [App\Http\Controllers\ApiController::class, 'b2b_invites'])->name('b2b_invites');
Route::get('/customers', [App\Http\Controllers\ApiController::class, 'customers'])->name('customers');
Route::get('/suppliers', [App\Http\Controllers\ApiController::class, 'suppliers'])->name('suppliers');
Route::get('/customer_details', [App\Http\Controllers\ApiController::class, 'customer_details'])->name('customer_details');
Route::get('/customers_contact', [App\Http\Controllers\ApiController::class, 'customers_contact'])->name('customers_contact');
Route::get('/products', [App\Http\Controllers\ApiController::class, 'products'])->name('products');
Route::get('/unity_measures', [App\Http\Controllers\ApiController::class, 'unity_measures'])->name('unity_measures');
Route::get('/price_list', [App\Http\Controllers\ApiController::class, 'price_list'])->name('price_list');
Route::get('/discounts', [App\Http\Controllers\ApiController::class, 'discounts'])->name('discounts');
Route::get('/stocks', [App\Http\Controllers\ApiController::class, 'stocks'])->name('stocks');
Route::get('/documents', [App\Http\Controllers\ApiController::class, 'documents'])->name('documents');
Route::get('/expiration_date', [App\Http\Controllers\ApiController::class, 'expiration_date'])->name('expiration_date');