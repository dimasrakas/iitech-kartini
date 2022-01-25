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
    return view('pages.app');
});

Route::get('/submit', function () {
    return view('pages.submit');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/announcement', function () {
    return view('pages.announcement');
});

Route::get('/archives', function () {
    return view('pages.archives');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/editorial', function () {
    return view('pages.editorial');
});