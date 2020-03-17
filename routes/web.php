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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');

Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'eng|es'
]);

Auth::routes();

Route::get('/home', 'admin\SliderController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],   function () {
    Route::resource('slider', 'admin\SliderController');

    Route::resource('service', 'admin\ServiceController');
    Route::resource('service-content', 'admin\ServiceContentController');

    Route::resource('genre', 'admin\GenreController');
    Route::resource('genre-content', 'admin\GenreContentController');

    Route::resource('package', 'admin\PackageController');
    Route::resource('package-content', 'admin\PackageContentController');

    Route::resource('event', 'admin\EventController');
    Route::resource('event-content', 'admin\EventContentController');

    Route::resource('about', 'admin\AboutController');

    Route::resource('contact', 'admin\ContactController');
});
