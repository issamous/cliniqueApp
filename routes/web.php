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

Auth::routes();

Route::get('patients','PacientController@index');
Route::get('patients/create','PacientController@create');
Route::post('patients','PacientController@store');
Route::get('patients/{id}/edit','PacientController@edit');
Route::put('patients/{id}','PacientController@update');
Route::delete('patients/{id}','PacientController@destroy');


Route::get('medciens','MedcienController@index');
Route::get('medciens/create','MedcienController@create');
Route::post('medciens','MedcienController@store');
Route::get('medciens/{id}/edit','MedcienController@edit');
Route::put('medciens/{id}','MedcienController@update');
Route::delete('medciens/{id}','MedcienController@destroy');


Route::get('laboratoires','LaboratoireController@index');
Route::get('laboratoires/create','LaboratoireController@create');
Route::post('laboratoires','LaboratoireController@store');
Route::get('laboratoires/{id}/edit','LaboratoireController@edit');
Route::put('laboratoires/{id}','LaboratoireController@update');
Route::delete('laboratoires/{id}','LaboratoireController@destroy');


Route::get('cliniques','CliniqueController@index');
Route::get('cliniques/create','CliniqueController@create');
Route::post('cliniques','CliniqueController@store');
Route::get('cliniques/{id}/edit','CliniqueController@edit');
Route::put('cliniques/{id}','CliniqueController@update');
Route::delete('cliniques/{id}','CliniqueController@destroy');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashbord', 'DashbordController@index');
