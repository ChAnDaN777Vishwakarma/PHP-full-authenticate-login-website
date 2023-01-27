<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
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
    return view('login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/logout',[LogoutController::class,'logout']);
Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'store1']);
Route::get('/signup',[SignupController::class,'signup']);
Route::post('/signup',[SignupController::class,'store']);