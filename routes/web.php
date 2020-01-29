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

Route::get('/', 'IndexController@index')->name('index');

Route::get('/offers', 'OfferController@offers')->name('offers');
Route::get('/offers/add', 'OfferController@add')->name('offers-add')->middleware('auth');
Route::post('/offers/submit', 'OfferController@submit')->name('offers-submit')->middleware('auth');
Route::get('/offers/edit/{offer}', 'OfferController@edit')->name('offers-edit')->middleware(['auth','checkUser']);
Route::get('/offers/remove/{offer}', 'OfferController@remove')->name('offers-remove')->middleware(['auth','checkUser']);
Route::post('/offers/edit/submit/{offer}', 'OfferController@submitedit')->name('offers-submit-edit')->middleware(['auth','checkUser']);

Route::get('/articles', 'ArticleController@articles')->name('articles');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
