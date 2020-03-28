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
| Публічна частина сайту
|--------------------------------------------------------------------------
|
|
*/

Route::redirect('/', '/uk/index');

Route::get('{locale}/index', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'our-works')->get();
        return view('index', [
            'photos' => $photos,
        ]);
})->name('index');

Route::get('{locale}/windows', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'windows')->get();
        return view('windows', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/doors', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'doors')->get();
        return view('doors', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/catalog', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'catalog')->get();
        return view('catalog', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/profile', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'profile')->get();
        return view('profile', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/furniture', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'furniture')->get();
        return view('furniture', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/sale', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'sale')->get();
        return view('sale', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/dstu', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'dstu')->get();
        return view('dstu', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/windowsill', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'windowsill')->get();
        return view('windowsill', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/anti-theft', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'anti-theft')->get();
        return view('anti-theft', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/aluminium', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'aluminium')->get();
        return view('aluminium', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/roller', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'roller')->get();
        return view('roller', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/gates', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'gates')->get();
        return view('gates', [
            'photos' => $photos,
        ]);
});

Route::get('{locale}/warranty', function ($locale) {
    App::setLocale($locale);
    $photos = Photo::where('page', 'warranty')->get();
        return view('warranty', [
            'photos' => $photos,
        ]);
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
| Відправка пошти
|--------------------------------------------------------------------------
|
|
*/

Route::post('/mail', 'MailController@mail');

/*
|--------------------------------------------------------------------------
| Адмінстративна частина сайту
|--------------------------------------------------------------------------
|
|
*/

Route::middleware('auth', 'is_admin')->group(function () {
    Route::get('/admin', 'Admined\AdminController@admin')
        ->name('admin');

    Route::resource('/admin/edit-our-works', 'Admined\OurWorksController');
    Route::resource('/admin/edit-windows', 'Admined\WindowsController');
    Route::resource('/admin/edit-doors', 'Admined\DoorsController');
    Route::resource('/admin/edit-catalog', 'Admined\CatalogController');
    Route::resource('/admin/edit-profile', 'Admined\ProfileController');
    Route::resource('/admin/edit-furniture', 'Admined\FurnitureController');
    Route::resource('/admin/edit-sale', 'Admined\SaleController');
    Route::resource('/admin/edit-dstu', 'Admined\DstuController');
    Route::resource('/admin/edit-windowsill', 'Admined\WindowsillController');
    Route::resource('/admin/edit-anti_theft', 'Admined\Anti_theftController');
    Route::resource('/admin/edit-aluminium', 'Admined\AluminiumController');
    Route::resource('/admin/edit-roller', 'Admined\RollerController');
    Route::resource('/admin/edit-gates', 'Admined\GatesController');
    Route::resource('/admin/edit-warranty', 'Admined\WarrantyController');

});



