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
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/rank', 'DashboardController@rank')->name('dashboard.rank');
    Route::get('/dashboard/settings', 'DashboardController@settings')->name('dashboard.settings');
    Route::get('/dashboard/friends', 'DashboardController@friends')->name('dashboard.friends');
    Route::get('/dashboard/account', 'DashboardController@account')->name('dashboard.account');
    Route::get('/dashboard/posts', 'DashboardController@posts')->name('dashboard.posts');
});
