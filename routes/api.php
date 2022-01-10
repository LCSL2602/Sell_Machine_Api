<?php

use App\Http\Controllers\commentController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\saleController;
use App\Http\Controllers\saleStatusController;
use App\Http\Controllers\typeMachineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\vendorController;
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

/**
 * Api users
 */
Route::get('/users',[UserController::class,'index']);
Route::get('/user/{id}',[UserController::class,'getUser']);
Route::post('/user',[UserController::class,'store']);
Route::put('/user/{id}',[UserController::class,'update']);
Route::delete('/user/{id}',[UserController::class,'remove']);

/**
 * Api customers
 */
Route::get('/customers',[customerController::class,'index']);
Route::get('/customer/{id}',[customerController::class,'getCustomer']);
Route::post('/customer',[customerController::class,'store']);
Route::put('/customer/{id}',[customerController::class,'update']);
Route::delete('/customer/{id}',[customerController::class,'remove']);

/**
 * Api typeMachine
 */
Route::get('/typeMachines',[typeMachineController::class,'index']);
Route::get('/typeMachine/{id}',[typeMachineController::class,'getTypeMachine']);
Route::post('/typeMachine',[typeMachineController::class,'store']);
Route::put('/typeMachine/{id}',[typeMachineController::class,'update']);
Route::delete('/typeMachine/{id}',[typeMachineController::class,'remove']);

/**
 * Api vendor
 */
Route::get('/vendors',[vendorController::class,'index']);
Route::get('/vendor/{id}',[vendorController::class,'getVendor']);
Route::post('/vendor',[vendorController::class,'store']);
Route::put('/vendor/{id}',[vendorController::class,'update']);
Route::delete('/vendor/{id}',[vendorController::class,'remove']);

/**
 * Api saleStatus
 */
Route::get('/saleStatuses',[saleStatusController::class,'index']);
Route::get('/saleStatus/{id}',[saleStatusController::class,'getSaleStatus']);
Route::post('/saleStatus',[saleStatusController::class,'store']);
Route::put('/saleStatus/{id}',[saleStatusController::class,'update']);
Route::delete('/saleStatus/{id}',[saleStatusController::class,'remove']);

/**
 * Api sale
 */
Route::get('/sales',[saleController::class,'index']);
Route::get('/sale/{id}',[saleController::class,'getSale']);
Route::post('/sale',[saleController::class,'store']);
Route::put('/sale/{id}',[saleController::class,'update']);
Route::delete('/sale/{id}',[saleController::class,'remove']);

/**
 * Api comment
 */
Route::get('/comments',[commentController::class,'index']);
Route::get('/comment/{id}',[commentController::class,'getComment']);
Route::post('/comment',[commentController::class,'store']);
Route::put('/comment/{id}',[commentController::class,'update']);
Route::delete('/comment/{id}',[commentController::class,'remove']);