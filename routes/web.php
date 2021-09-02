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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::resource('Specialites','app\http\controllers\Specialitecontroller');
route::resource('Cours','app\Http\Controllers\courscontroller');
route::resource('Professeurs','app\Http\Controllers\professeurcontroller');
route::resource('Modules','app\http\controllers\modulecontroller');
route::resource('Salles','app\http\controllers\sallecontroller');


