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



Route::group(['prefix' => 'panel', 'namespace' => 'Panel'], function(){

    Route::any('brands/search', 'BrandController@search')->name('brands.search');
    Route::get('brands/{id}/planes', 'BrandController@planes')->name('brands.planes');
    Route::resource('brands', 'BrandController');

    Route::any('planes/search', 'PlaneController@search')->name('planes.search');
    Route::resource('planes', 'PlaneController');

    Route::any('states/search', 'StateController@search')->name('states.search');
    Route::get('states', 'StateController@index')->name('states.index');

    Route::any('state/{initials}/cities/search', 'CityController@search')->name('states.cities.search');
    Route::get('state/{initials}/cities', 'CityController@index')->name('states.cities');

    Route::any('flights/search', 'FlightController@search')->name('flights.search');
    Route::resource('flights', 'FlightController');

    Route::any('city/{id}/airports/search', 'AirportController@search')->name('airports.search');
    Route::resource('city/{id}/airports', 'AirportController');

    Route::any('users/search', 'UserController@search')->name('users.search');
    Route::resource('users', 'UserController');
    
    Route::get('/', 'PanelController@index')->name('panel');


    
    

});




Route::get('promocoes', "Site\SiteController@promotions")->name('promotions');

//Route::get('site', 'Site\SiteController@index');
Route::get('/', 'Site\SiteController@index');


Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
