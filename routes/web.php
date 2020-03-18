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

Route::get('/', 'IndexController@index');



Route::get('windows', function () {
    App::setLocale('uk');
    return view('windows', ['local' => '']);
});

Route::get('doors', function () {
    App::setLocale('uk');
    return view('doors', ['local' => '']);
});

Route::get('catalog', function () {
    App::setLocale('uk');
    return view('catalog', ['local' => '']);
});

Route::get('profile', function () {
    App::setLocale('uk');
    return view('profile', ['local' => '']);
});

Route::get('furniture', function () {
    App::setLocale('uk');
    return view('furniture', ['local' => '']);
});

Route::get('sale', function () {
    App::setLocale('uk');
    return view('sale', ['local' => '']);
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
    return view('index', ['local' => 'ru/']);
});

Route::get('/ru/windows', function () {
    App::setLocale('ru');
    return view('windows', ['local' => 'ru/']);
});

Route::get('/ru/doors', function () {
    App::setLocale('ru');
    return view('doors', ['local' => 'ru/']);
});

Route::get('/ru/catalog', function () {
    App::setLocale('ru');
    return view('catalog', ['local' => 'ru/']);
});

Route::get('/ru/profile', function () {
    App::setLocale('ru');
    return view('profile', ['local' => 'ru/']);
});

Route::get('/ru/furniture', function () {
    App::setLocale('ru');
    return view('furniture', ['local' => 'ru/']);
});

Route::get('/ru/sale', function () {
    App::setLocale('ru');
    return view('sale', ['local' => 'ru/']);
});

Auth::routes(
    [
        'register' => false,
        'reset' => false,
        'verify' => false
    ]
);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
