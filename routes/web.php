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
use App\Photo;
/*
|--------------------------------------------------------------------------
| Публічна частина
|--------------------------------------------------------------------------
|
|
*/

Route::redirect('/', '/uk/index');

// Route::get('/', 'IndexController@index')->name('index');

// Route::get('{locale}/index', 'IndexController@index');

Route::get('{locale}/index', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'our-works')->get();
        return view('index', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/windows', function ($locale) {
    App::setLocale($locale);
    return view('windows');
});

Route::get('{locale}/doors', function ($locale) {
    App::setLocale($locale);
    return view('doors');
});

Route::get('{locale}/catalog', function ($locale) {
    App::setLocale($locale);
    return view('catalog');
});

Route::get('{locale}/profile', function ($locale) {
    App::setLocale($locale);
    return view('profile');
});

Route::get('{locale}/furniture', function ($locale) {
    App::setLocale($locale);
    return view('furniture');
});

Route::get('{locale}/sale', function ($locale) {
    App::setLocale($locale);
    return view('sale');
});

/*
|--------------------------------------------------------------------------
| Авторизація
|--------------------------------------------------------------------------
|
|
*/

Auth::routes(
    [
        'register' => false,
        'reset' => false,
        'verify' => false
    ]
);

/*
|--------------------------------------------------------------------------
| Адмінстративна частина
|--------------------------------------------------------------------------
|
|
*/

Route::middleware('auth', 'is_admin')->group(function () {
    Route::get('/admin', 'Admined\AdminController@admin')
        ->name('admin');

    Route::resource('/admin/our-works', 'Admined\OurWorksController');
});



