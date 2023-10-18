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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/homepage', function () {
//     return view('homepage');
// });

// Route::get('/sign_in', function () {
//     return view('sign_in');
// });
// Route::get('/sign_up', function () {
//     return view('sign_up');
// });

// Route::get('/sign_up', function () {
//     return view('sign_up', [
//     ]);
// });

// Route::get('/homepage', [WCCController::class, 'homepage']);

Route::controller(loginregis::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/homepage', 'homepage')->name('homepage');
    Route::post('/logout', 'logout')->name('logout');
   });