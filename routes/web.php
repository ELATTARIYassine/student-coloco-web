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


Route::get('/api/housings-offers', 'Front\HousingController@index');
Route::get('/api/housings-demands', 'Front\DemandController@index');
Route::get('/api/housings-offers/create', 'Front\HousingController@create');
Route::get('/api/housings-demands/create', 'Front\DemandController@create');



Auth::routes();

Route::get('/', 'Front\PagesController@home')->name('front.home');
Route::get('/housings-offers', 'Front\PagesController@housings')->name('front.housings');
Route::get('/housings-offers/create', 'Front\PagesController@create_housing')->name('front.housings.create');
Route::get('/demands', 'Front\PagesController@demands')->name('front.demands');
Route::group(['middleware' => 'auth'], function () {
    Route::post('/housings-offers/save', 'Front\PagesController@save_housing')->name('front.housings.store');
    Route::get('/housings-offers/{id}', 'Front\PagesController@housingsDetails')->name('front.housings.show');
    Route::get('/demands/create', 'Front\PagesController@create_demand')->name('front.demands.create');
    Route::post('/demands/save', 'Front\PagesController@save_demand')->name('front.demands.store');
});

