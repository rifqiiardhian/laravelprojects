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

//login
Route::get('/login', 'AdminController@login');
Route::post('/login/action', 'AdminController@loginAction');

//dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::get('/sign-out', 'DashboardController@signOut');
