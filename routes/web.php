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

Route::get('/', function () {
	return view('home');
});

//*****************************AssetsController*****************************
Route::get('/assets', 'AssetsController@index');
Route::get('/assets/create', 'AssetsController@create');
Route::get('/assets/{id}', 'AssetsController@show');
Route::get('/assets/{id}/edit', 'AssetsController@edit');
Route::put('/assets/{id}', 'AssetsController@update')->middleware('SanitizeAsset');
Route::post('/assets', 'AssetsController@store')->middleware('SanitizeAsset');
Route::delete('/assets/{id}', 'AssetsController@delete');
