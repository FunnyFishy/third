<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CarController;
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
  
  //Route to View --> A Page like 'Welcome.blade.php
  
// Route::get('/', function () {
//     return view('/Pages.home');
// });
 
Route::get('/',[pagecontroller::class,'home']);
Route::get('/product',[pagecontroller::class,'product']);
Route::get('/about',[pagecontroller::class,'about']);
Route::get('/contact',[pagecontroller::class,'contact']);
Route::get('/service',[pagecontroller::class,'service']);
Route::get('/example',[pagecontroller::class,'exam']);
Route::get('/qwerty',[pagecontroller::class,'qwer']);


//Posts endpoint
Route::get('/posts',[PostController::class,'index']);

Route::resource('/cars',CarController::class);



