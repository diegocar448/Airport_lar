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
    
    Route::any('reserves/search', 'ReserveController@search')->name('reserves.search');
    Route::resource('reserves', 'ReserveController',[
        'except' => ['show', 'destroy']
    ]);
    
    Route::get('/', 'PanelController@index')->name('panel');


    
    

});


Route::group(['middleware' => 'auth'], function(){       

    Route::get('meu-perfil', "Panel\UserController@myProfile")->name('my.profile');

    Route::put('atualizar-perfil', "Panel\UserController@updateProfile")->name('update.profile');

    Route::get('detalhes-voo/{id}', "Site\SiteController@detailsFlight")->name('details.flight'); 

    Route::get('sair', "Panel\UserController@logout")->name('sair');   


    Route::post('reservar', "Site\SiteController@reserveFlight")->name('reserve.flight');    

    Route::get('detalhes-compra/{idReserve}', "Site\SiteController@purchaseDetail")->name('purchase.detail');  

    Route::get('minhas-compras', "Site\SiteController@myPurchases")->name('my.purchases');    
});

Route::get('promocoes', "Site\SiteController@promotions")->name('promotions');

Route::post('pesquisar', "Site\SiteController@search")->name('site.search.search');

//Route::get('site', 'Site\SiteController@index');
Route::get('/', 'Site\SiteController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();