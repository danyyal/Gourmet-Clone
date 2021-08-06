<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    return view('home');
  });
  Route::get('about', function () {
    return view('about');
  });
  Route::get('career', function () {
    return view('career');
  });
  Route::get('contact', function () {
    return view('contact');
  });
  Route::get('product', function () {
    return view('product');
  });
  Route::get('Distribution', function () {
    return view('Distribution');
  });
  Route::get('store_locator', function () {
    return view('store_locator');
  });


  
  //route for form 
  Route::post('signUp',[userController::class,'Contact']);
  Route::get('DB_Table',[userController::class,'DB_Table']);

  
  
  // Route::view('about','about-us');