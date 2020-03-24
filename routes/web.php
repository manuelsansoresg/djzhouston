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
Route::get('/eventos', 'HomeController@events');
Route::get('/events', 'HomeController@events');

Route::get('/galeria-de-fotos', 'HomeController@sound_lighting');
Route::get('/gallery-pictures', 'HomeController@sound_lighting');

Route::get('/event/{title_sug}', 'HomeController@event');
Route::get('/albums', 'HomeController@albums');

Route::get('/contact', 'HomeController@contact');
Route::get('/contacto', 'HomeController@contact');

Route::post('/send-contact', 'ContactController@store');

Route::get('/thanks', 'HomeController@thanks');

Route::get('/blog', 'HomeController@blogs');
Route::get('/blog/{title_sug}', 'HomeController@blog');




Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'eng|es'
]);

Auth::routes();

Route::get('/home', 'admin\SliderController@index')->name('home')->middleware('auth');

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

    Route::resource('album', 'admin\AlbumController');

    Route::resource('event-picture', 'admin\EventPicturesController');
    Route::get('event-picture/create/{event_id}', 'admin\EventPicturesController@create');
    Route::get('event-picture/{id}/edit/{event_id}', 'admin\EventPicturesController@edit');


    Route::resource('sound-lighting', 'admin\SoundLightingController');
    Route::resource('sound-lighting-content', 'admin\SoundLightingContentController');

    Route::resource('sound-lighting-picture', 'admin\SoundLightPictureController');
    Route::get('sound-lighting-picture/create/{event_id}', 'admin\SoundLightPictureController@create');
    Route::get('sound-lighting-picture/{id}/edit/{event_id}', 'admin\SoundLightPictureController@edit');

    Route::resource('blog', 'admin\BlogController');
    Route::resource('blog-content', 'admin\BlogContentController');

    Route::resource('blog-picture', 'admin\BlogPictureController');
    Route::get('blog-picture/create/{event_id}', 'admin\BlogPictureController@create');
    Route::get('blog-picture/{id}/edit/{event_id}', 'admin\BlogPictureController@edit');

});
