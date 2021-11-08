<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetController;


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
    return view('welcome');
});

Route::get('/set', function () {
    return view('set');
});

Route::get('/device', function () {
    return view('device');
});

Route::get('/analyze', function () {
    return view('analyze');
});

Route::get('/level', function () {
    return view('level');
});

Route::get('/event', function () {
    return view('event');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
