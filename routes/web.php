<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountController;

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

    Route::get('/dashboard/rank', [DashboardController::class, 'rank'])->name('dashboard.rank');

    Route::get('/dashboard/settings', 'App\Http\Controllers\DashboardController@settings')->name('dashboard.settings');

    Route::get('/dashboard/friends', [DashboardController::class, 'friends'])->name('dashboard.friends');

    Route::post('/dashboard/add-friend', [DashboardController::class, 'addFriend'])->name('dashboard.addFriend');

    Route::get('/dashboard/account', [AccountController::class, 'showAccount'])->name('dashboard.account');

    Route::get('/dashboard/posts', 'App\Http\Controllers\DashboardController@posts')->name('dashboard.posts');

    Route::get('/dashboard/add_friend', function () {
        return view('dashboard/add_friend');
    });

    Route::get('/dashboard/requests', 'App\Http\Controllers\DashboardController@friendRequests')->name('dashboard.requests');

    Route::post('/dashboard/requests/accept/{requestId}', 'App\Http\Controllers\DashboardController@acceptRequest')->name('dashboard.requests.accept');

    Route::post('/dashboard/requests/decline/{requestId}', 'App\Http\Controllers\DashboardController@declineRequest')->name('dashboard.requests.decline');


    Route::delete('/dashboard/removeFriend/{friendId}', [DashboardController::class, 'removeFriend'])->name('dashboard.removeFriend');
    
    Route::post('/dashboard/update-password', [AccountController::class, 'updatePassword'])->name('update-password');

    Route::post('/dashboard.account.update');


});
