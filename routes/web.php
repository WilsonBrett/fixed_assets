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
    return view('welcome');
});

//*****************************AssetsController*****************************
Route::get('/assets', 'assetsController@index');
Route::get('/assets/create', 'assetsController@create');
Route::post('/assets', 'assetsController@store');
Route::get('/assets/{id}', 'assetsController@show');
Route::get('/assets/{id}/edit', 'assetsController@edit');
Route::put('/assets/{id}', 'assetsController@update');
Route::delete('/assets/{id}', 'assetsController@delete');


// @TODO need a db, front end sass, sass dependencies, build process to convert sass/js to public dir, image assets.