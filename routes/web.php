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
Route::get('/', 'App\Http\Controllers\CrudController@welcome');


Route::get('/welcome', 'App\Http\Controllers\CrudController@welcome');
Route::get('crud_show','App\Http\Controllers\CrudController@show');
Route::get('crud_delete/{id}','App\Http\Controllers\CrudController@destroy');
Route::get('crud_create','App\Http\Controllers\CrudController@create');
Route::POST('crud_submit','App\Http\Controllers\CrudController@store');
Route::get('crud_edit/{id}','App\Http\Controllers\CrudController@edit');
Route::POST('crud_update/{id}','App\Http\Controllers\CrudController@update')->name('crud_update');
Route::POST('excel','App\Http\Controllers\CrudController@excel')->name('excel');
Route::get('search','App\Http\Controllers\CrudController@search');


Route::get('/fishis_add');
Route::get('fisheris_show', 'App\Http\Controllers\FishermanController@show');
Route::get('fisheris_delete/{id}','App\Http\Controllers\FishermanController@destroy');
Route::get('fisheris_create','App\Http\Controllers\FishermanController@create');
Route::POST('fisheris_submit','App\Http\Controllers\FishermanController@store');
Route::get('fisheris_edit/{id}','App\Http\Controllers\FishermanController@edit');
Route::POST('fisheris_update/{id}','App\Http\Controllers\FishermanController@update')->name('fisheris_update');

Route::get('socialServiceShow', 'App\Http\Controllers\SocialServiceController@show');
Route::get('socialService_delete/{id}','App\Http\Controllers\SocialServiceController@destroy');
Route::get('socialService_create','App\Http\Controllers\SocialServiceController@create');
Route::POST('socialService_submit','App\Http\Controllers\SocialServiceController@store');
Route::get('socialServiceEdit/{id}','App\Http\Controllers\SocialServiceController@edit');
Route::POST('socialServiceUpdate/{id}','App\Http\Controllers\SocialServiceController@update')->name('socialServiceUpdate');


Route::get('/demo', 'App\Http\Controllers\CrudController@demo');



