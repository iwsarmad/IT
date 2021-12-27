<?php

use Illuminate\Support\Facades\Route;

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
});




Route::get('/FLFL', function () {
    return "FLFL";
});



Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/setting', [App\Http\Controllers\AdminController::class, 'Settings']);
Route::post('/StoresSetting', [App\Http\Controllers\AdminController::class, 'StoresSetting']);
Route::get('/AddUser', [App\Http\Controllers\AdminController::class, 'AddUser']);
Route::post('/StoresUser', [App\Http\Controllers\AdminController::class, 'StoresUser']);
Route::get('/TripManagement', [App\Http\Controllers\AdminController::class, 'TripManagement']);
Route::post('/StoresShips', [App\Http\Controllers\AdminController::class, 'StoresShips']);
Route::post('/EditUser', [App\Http\Controllers\AdminController::class, 'EditUser']);
Route::post('/DeleteUser', [App\Http\Controllers\AdminController::class, 'DeleteUser']);
Route::get('/AddClient', [App\Http\Controllers\AdminController::class, 'AddClient']);
Route::post('/StoresClient', [App\Http\Controllers\AdminController::class, 'StoresClient']);
Route::post('/StoreNewBill', [App\Http\Controllers\AdminController::class, 'StoreNewBill']);
Route::get('/GetBillsByTripId', [App\Http\Controllers\AdminController::class, 'GetBillsByTripId']);
Route::get('/TripManagementFillBill', [App\Http\Controllers\AdminController::class, 'TripManagementFillBill']);
Route::post('/StoreBillContent', [App\Http\Controllers\AdminController::class, 'StoreBillContent']);
//B2BInvites

Route::get('/B2BInvites', [App\Http\Controllers\AdminController::class, 'B2BInvites']);



Route::get('/ReadFile', [App\Http\Controllers\AdminController::class, 'ReadFile']);

//Business
// TripManagementFillBill
// StoreNewBill GetBillsByTripId
// StoreBillContent