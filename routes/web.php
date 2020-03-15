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

// Route::get('/', function () {
//     return view('welcome');
// });

//login admin
Route::get('/login', 'AdminController@login');
Route::post('/login/action', 'AdminController@loginAction');

//dashboard admin
Route::get('/dashboard', 'DashboardController@index');
Route::get('/sign-out', 'DashboardController@signOut');

//login customer
Route::get('/login1', 'CustomerController@login');
Route::post('/login1/action', 'CustomerController@loginAction');

//dashboard customer
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'HomeController@logOut');




