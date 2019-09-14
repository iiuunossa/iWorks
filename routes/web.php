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


Route::get('/form', function () {
    return view('tasks._form');
});

Route::get('/create','TaskController@create');
Route::post('/create','TaskController@store');


Route::get('/group','GroupController@create');
Route::post('/group','GroupController@store');


Route::get('/division','TaskDivisionController@create');
Route::post('/division','TaskDivisionController@store');

Route::get('/pa','PaController@create');
Route::post('/pa','PaController@store');

Route::get('/type','TypeController@create');
Route::post('/type','TypeController@store');



Route::get('/show-group','GroupController@show');
Route::get('/show-division','TaskDivisionController@show');
Route::get('/show-pa','PaController@show');
Route::get('/show-task','TaskController@show');
Route::get('/show-type','TypeController@show');







