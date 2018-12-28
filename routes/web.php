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
Route::post('/language', 'SiteController@language')->name('site.language');
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::view('/master','front.layouts.master');
//Route::view('/back','back.layouts.master');
Route::get('/','HomePageController@index')->name('homepage');
Route::get('/category/{id}','HomePageController@adsByCategory')->name('home.category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addpost','PostController@create')->name('addpost');
Route::post('/addpost','PostController@store')->name('savepost');

Route::get('/showdetails/{id}','HomePageController@adsDetails')->name('showdetails');
