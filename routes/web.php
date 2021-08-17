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

Route::get('/', 'HomeController@welcome');


Route::group(['middleware' => 'auth'], function(){

 

    Route::get('home', 'HomeController@index')->middleware('roles:2')->name('employee');

    Route::get('eHome','eHomeController@index')->middleware('roles:1')->name('employer');
    
  
  });
 
Route::resource('profile', PostController::class);