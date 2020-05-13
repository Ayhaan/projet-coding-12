<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'AllController@show');

Auth::routes([
    'register' => false, // Registration Routes...
    // 'reset' => false, // Password Reset Routes...
    // 'verify' => false, // Email Verification Routes...
  ]);

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('/profil', 'ProfilController')->middleware('auth');
Route::resource('/head', 'HeadController')->middleware('auth');
Route::resource('/service', 'ServiceController')->middleware('auth');
Route::resource('/portfolio', 'PortfolioController')->middleware('auth');
Route::resource('/about', 'AboutController')->middleware('auth');
Route::resource('/contact', 'ContactController')->middleware('auth');


