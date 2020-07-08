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

Route::get('/', function () {
    return view('welcome');
});

// auth rutas
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('users', 'UserController');
Route::resource('categories', 'CategoryController');
Route::resource('publications', 'PublicationController');
Route::resource('training_programs', 'Training_programController');
Route::resource('quarters','QuartersController');
Route::resource('research_seedbeds','ResearchSeedbedController');
Route::resource('cultural_events','CulturalEventController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Reports (Exports)
Route::get('generate/pdf/users', 'UserController@pdf');
Route::get('generate/excel/users', 'UserController@excel');

// Imports (Excel)
Route::post('import/excel/users', 'UserController@import');

// Role Apprentice
Route::get('mydata', 'UserController@mydata');
Route::put('mydata/{id}', 'UserController@updmydata');

