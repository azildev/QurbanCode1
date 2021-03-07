<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\BeforeMiddleware;
use App\Http\Middleware\AfterMiddleware;

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
    return view('panel.login', ['title' => 'LOGIN :: Laravel(VUEJS)']);
})->middleware('Before');
Route::post('/account/login', 'App\Http\Controllers\AccountController@login')->name('login');

// Auth::routes();
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard')->middleware('After');