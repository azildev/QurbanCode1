<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\BeforeMiddleware;
use App\Http\Middleware\AfterMiddleware;
use App\Http\Middleware\RevalidateBackHistory;

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


Route::middleware([BeforeMiddleware::class])->group(function () {
    Route::get('/', function () {
        return view('panel.login', ['title' => 'LOGIN :: Laravel(VUEJS)']);
    });
    Route::post('/account/login', 'App\Http\Controllers\AccountController@login')->name('login');
    
});
Route::get('/account/logout', 'App\Http\Controllers\AccountController@logout')->name('logout');
// Auth::routes();
Route::middleware([AfterMiddleware::class])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
