<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[BusinessController::class,'index']);
Route::get('login_form',[BusinessController::class,'login_val']);
Route::get('stock',[BusinessController::class,'stock']);
Route::get('addstock',[BusinessController::class,'stock_action']);
Route::get('view',[BusinessController::class,'show']);
Route::get("update/{id}",[BusinessController::class,'edit']);
Route::get("updatestock",[BusinessController::class,'update']);
Route::get('delete/{id}',[BusinessController::class,'delete']);

