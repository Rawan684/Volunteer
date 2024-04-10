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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{ 
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/About', 'HomeController@About')->name('home.About');
    Route::get('/contact', 'HomeController@contact')->name('home.contact');
    Route::get('/show', 'HomeController@show')->name('home.show');
    Route::get('/showReq', 'HomeController@showReq')->name('home.showReq');
    Route::get('/type', 'HomeController@type')->name('home.type');
    Route::get('/AddRec', 'HomeController@AddRec')->name('home.AddRec');
    Route::get('/AddDon', 'HomeController@AddDon')->name('home.AddDon');
    Route::get('/storeDon', 'HomeController@storeDon')->name('home.storeDon');
    Route::get('/storeRec', 'HomeController@storeRec')->name('home.storeRec');
    Route::get('/dashdon', 'HomeController@dashdon')->name('home.dashdon');
    Route::get('/Dash', 'HomeController@Dash')->name('home.Dash');
    Route::get('/Admin', 'HomeController@Admin')->name('home.Admin');
    Route::get('/AdminReq', 'HomeController@AdminReq')->name('home.AdminReq');
    Route::get('/destroy', 'HomeController@destroy')->name('home.destroy');
    Route::get('/destroyr', 'HomeController@destroyr')->name('home.destroyr');
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});