<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});


Route::post('/login', 'App\Http\Controllers\AuthController@login');

Route::post('/register', 'App\Http\Controllers\AuthController@register');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/dashboard/rank', 'App\Http\Controllers\DashboardController@rank')->name('dashboard.rank');
    Route::get('/dashboard/settings', 'App\Http\Controllers\DashboardController@settings')->name('dashboard.settings');
    Route::get('/dashboard/friends', 'App\Http\Controllers\DashboardController@friends')->name('dashboard.friends');
    Route::get('/dashboard/account', 'App\Http\Controllers\DashboardController@account')->name('dashboard.account');
    Route::get('/dashboard/posts', 'App\Http\Controllers\DashboardController@posts')->name('dashboard.posts');
});
