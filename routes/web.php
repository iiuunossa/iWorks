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
Route::post('/save','TaskController@store');


Route::get('/group','GroupController@create');
Route::post('/save','GroupController@store');


Route::get('/division','TaskDivisionController@create');
Route::post('/save','TaskDivisionController@store');

Route::get('/pa','PaController@create');
Route::post('/save','PaController@store');



