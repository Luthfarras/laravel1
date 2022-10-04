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
    return view('welcome');
});
Route::get('template', function () {
    return view('template');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('elements', function () {
    return view('elements');
});
Route::get('charts', function () {
    return view('charts');
});
Route::get('panels', function () {
    return view('panels');
});
Route::get('notifications', function () {
    return view('notifications');
});
Route::get('pageprofile', function () {
    return view('pageprofile');
});
Route::get('pagelogin', function () {
    return view('pagelogin');
});
Route::get('pagelockscreen', function () {
    return view('pagelockscreen');
});
Route::get('tables', function () {
    return view('tables');
});
Route::get('typography', function () {
    return view('typography');
});
Route::get('icons', function () {
    return view('icons');
});

// Route::get('p', function () {
//     return view('halaman');
// });
