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
    return view('home');
});

//FRONTEND
	//Frontend/GeneralController
	Route::get('/about', 'Frontend\GeneralController@about')->name('about');
	Route::get('/contact', 'Frontend\GeneralController@contact')->name('contact');
	Route::get('/home', 'Frontend\GeneralController@home')->name('home');
	Route::get('/membership', 'Frontend\GeneralController@membership')->name('membership');
	Route::get('/partner', 'Frontend\GeneralController@partner')->name('partner');
	Route::get('/training', 'Frontend\GeneralController@training')->name('training');
	Route::get('/turnament', 'Frontend\GeneralController@turnament')->name('turnament');
	Route::get('/venue', 'Frontend\GeneralController@venue')->name('venue');
