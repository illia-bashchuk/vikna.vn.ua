<?php

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

/*
|--------------------------------------------------------------------------
| Українська локалізація
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', function () {
    App::setLocale('uk');
    return view('index');
});

Route::get('/windows', function () {
    App::setLocale('uk');
    return view('windows');
});

Route::get('/doors', function () {
    App::setLocale('uk');
    return view('doors');
});

Route::get('/catalog', function () {
    App::setLocale('uk');
    return view('catalog');
});

Route::get('/profile', function () {
    App::setLocale('uk');
    return view('profile');
});

Route::get('/furniture', function () {
    App::setLocale('uk');
    return view('furniture');
});

Route::get('/sale', function () {
    App::setLocale('uk');
    return view('sale');
});

/*
|--------------------------------------------------------------------------
| Російська локалізація
|--------------------------------------------------------------------------
|
|
*/

Route::get('/ru', function () {
    App::setLocale('ru');
    return view('index');
});

Route::get('/ru/windows', function () {
    App::setLocale('ru');
    return view('windows');
});

Route::get('/ru/doors', function () {
    App::setLocale('ru');
    return view('doors');
});

Route::get('/ru/catalog', function () {
    App::setLocale('ru');
    return view('catalog');
});

Route::get('/ru/profile', function () {
    App::setLocale('ru');
    return view('profile');
});

Route::get('/ru/furniture', function () {
    App::setLocale('ru');
    return view('furniture');
});

Route::get('/ru/sale', function () {
    App::setLocale('ru');
    return view('sale');
});
