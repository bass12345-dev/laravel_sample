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

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('admin')->group(function  () {

        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
        Route::get('/songs', [App\Http\Controllers\Admin\SongsController::class, 'index']);
        Route::get('/artist', [App\Http\Controllers\Admin\ArtistController::class, 'index']);
        Route::get('/setlist', [App\Http\Controllers\Admin\SetlistController::class, 'index']);
        Route::get('/singers', [App\Http\Controllers\Admin\SingerController::class, 'index']);
        Route::get('/members', [App\Http\Controllers\Admin\MemberController::class, 'index']);
});


Route::prefix('user')->group(function  () {

        Route::get('/dashboard', [App\Http\Controllers\User\DashboardController::class, 'index']);
        Route::get('/songs', [App\Http\Controllers\User\SongsController::class, 'index']);
        Route::get('/setlist', [App\Http\Controllers\User\SetlistController::class, 'index']);
        Route::get('/singers', [App\Http\Controllers\User\SingerController::class, 'index']);
        
});