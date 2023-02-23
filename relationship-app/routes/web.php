<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\PhotoController;

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

Route::get('showcomment/{id}',[PostController::class,'show']);

Route::get('showpost/{id}',[PostController::class,'showPost']);


Route::get('showuser/{id}',[UserController::class,'index']);
Route::get('showrole/{id}',[UserController::class,'show']);
Route::get('showalluser',[UserController::class,'getData']);

Route::get('/driver/{id}', [PassengerController::class, 'index']);
Route::get('/passenger/{id}', [PassengerController::class, 'passengerdata']);

Route::get('/photo/{id}',[PhotoController::class,'showPhoto']);

Route::get('/{age}',function($age){
    return view('welcome');
})->middleware('age');

Route::get('user/profile',function(){
    return "user Profile";
});



