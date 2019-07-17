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

Route::get('/','PublicController@index')->name('index');

Route::post('/language','LanguageController@index');

Route::post('/language/',array(

    'as'=>'language',
    'uses'=>'LanguageController@index'
));

//Route::get('/contact', 'ContactController@show');
Route::post('/contact',  'ContactController@mailToAdmin');
