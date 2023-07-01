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
 *  Route Groups
*/

Route::group(['middleware' => ['web']], function () {
	Route::get(LanguageSwitcher::getSwitchPath() . '/{language}', '\\ied3vil\\LanguageSwitcher\\LanguageSwitcherController@setLanguage');
});

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
	//return 'About Page!';
	$people = ['Gigi', 'Jesus', 'Jayson', 'Eliud'];
	//$people = [];
	return view('about', compact('people'));
}); */

//Top Menu
Route::get('/', 'PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('whyus', 'PagesController@whyus');
Route::get('services', 'PagesController@services');
Route::get('products', 'PagesController@products');
Route::get('blog', 'PagesController@blog');
Route::get('contact', 'PagesController@contact');

//Doctors
Route::get('doctors','DoctorsController@index');
Route::get('doctors/{doctor}','DoctorsController@show');

//Demo
Route::get('demo', 'DemoController@index');

//Set Locale
Route::get('setSpanish', 'TranslationsController@setLanguageToSpanish');
Route::get('setEnglish', 'TranslationsController@setLanguageToEnglish');

