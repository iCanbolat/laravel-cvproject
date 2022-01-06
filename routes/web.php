<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@welcome')->name('welcome');

Route::get('jobs', 'HomeController@guest')->name('employee.guest');
Route::get('employees', 'HomeController@guestt')->name('employer.guest');
Route::group(['middleware' => 'auth'], function(){

 

    Route::get('home', 'HomeController@index')->middleware('roles:2')->name('employee');

    Route::post('/home', 'HomeController@apply')->name('employee.apply');

    Route::get('/search', 'HomeController@search');
    Route::get('/search-employee', 'eHomeController@search');
  

    Route::get('eHome','eHomeController@index')->middleware('roles:1')->name('employer');
    Route::post('/eHome','eHomeController@download')->middleware('roles:1')->name('employer');
    
    Route::resource('eProfile', PostController::class)->middleware('roles:1');
    Route::resource('profile', EmployeeController::class)->middleware('roles:2');
  });
 
