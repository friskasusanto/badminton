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
    return view('index');
});

//FRONTEND
	//Frontend/GeneralController
	Route::get('/reserve', 'Frontend\GeneralController@reserve')->name('reserve');
	Route::post('/reserve', 'Frontend\GeneralController@reserve_add')->name('reserve_add');

	Route::get('/about', 'Frontend\GeneralController@about')->name('about');
	Route::get('/contact', 'Frontend\GeneralController@contact')->name('contact');
	Route::get('/home', 'Frontend\GeneralController@home')->name('home');
	Route::get('/membership', 'Frontend\GeneralController@membership')->name('membership');
	Route::get('/partner', 'Frontend\GeneralController@partner')->name('partner');
	Route::get('/training', 'Frontend\GeneralController@training')->name('training');
	Route::get('/turnament', 'Frontend\GeneralController@turnament')->name('turnament');
	Route::get('/venue', 'Frontend\GeneralController@venue')->name('venue');
	Route::get('/try/{id}', 'Frontend\GeneralController@galeryMode')->name('gallery');

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth']], function ()  {

	Route::get('/home', 'HomeController@index')->name('home');

//BACKEND
	//Backend/GeneralController
	Route::get('/dasboard', 'Backend\GeneralController@dasboard')->name('dasboard');

	//Backend/AboutController
	Route::get('/aboutUs/{id}', 'Backend\AboutController@index')->name('aboutUs');
	Route::post('/aboutUs/{id}', 'Backend\AboutController@edit')->name('aboutUs_edit');

	//Backend/ContactController
	Route::get('/contact/{id}', 'Backend\ContactController@index')->name('contact');
	Route::post('/contact/{id}', 'Backend\ContactController@edit')->name('contact_edit');

	//Backend/GaleryController
	Route::get('/indexImg', 'Backend\GaleryController@indexImg')->name('indexImg');
	Route::get('/indexName', 'Backend\GaleryController@indexName')->name('indexName');
	Route::post('/galeryName', 'Backend\GaleryController@galeryName')->name('galeryName');
	Route::post('/img', 'Backend\GaleryController@img')->name('img');

	//Backend/MembershipController
	Route::get('/membership/{id}', 'Backend\MembershipController@index')->name('membership');
	Route::post('/membership/{id}', 'Backend\MembershipController@edit')->name('membership_edit');

	//Backend/PartnerController
	Route::get('/partner/{id}', 'Backend\PartnerController@index')->name('partner');
	Route::post('/partner/{id}', 'Backend\PartnerController@edit')->name('partner_edit');

	//Backend/TournamentController
	Route::get('/tournament/{id}', 'Backend\TournamentController@index')->name('tournament');
	Route::post('/tournament/{id}', 'Backend\TournamentController@edit')->name('tournament_edit');

	//Backend/VenueController
	Route::get('/venue/{id}', 'Backend\VenueController@index')->name('venue');
	Route::post('/venue/{id}', 'Backend\VenueController@edit')->name('venue_edit');


});
