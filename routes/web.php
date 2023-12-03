<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SongUserController;
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
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('Userdashboard', function () {
        return view('Userdashboard');
    })->name('Userdashboard');

    Route::controller(SongController::class)->prefix('songs')->group(function () {
        Route::get('', 'index')->name('songs');
        Route::get('create', 'create')->name('songs.create');
        Route::post('store', 'store')->name('songs.store');
        Route::get('show/{id}', 'show')->name('songs.show');
        Route::get('edit/{id}', 'edit')->name('songs.edit');
        Route::put('edit/{id}', 'update')->name('songs.update');
        Route::delete('destroy/{id}', 'destroy')->name('songs.destroy');

    });
    Route::controller(SongUserController::class)->prefix('usersongs')->group(function () {
        Route::get('', 'index')->name('usersongs');
        Route::get('create', 'create')->name('createusersongs');
        Route::post('store', 'store')->name('storeusersongs');
        Route::get('show/{id}', 'show')->name('usershow');

    });
    Route::get('/search', [SearchController::class, 'index'])->name('search');
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('/userprofile', [App\Http\Controllers\AuthController::class, 'userprofile'])->name('userprofile');
});
