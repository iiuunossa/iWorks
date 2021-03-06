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

Route::get('/tag','TagController@create');
Route::post('/tag','TagController@store');



Route::get('/search', function () {
    return view('layouts.search');
});



Route::get('/show-group','GroupController@show');
Route::get('/show-division','TaskDivisionController@show');
Route::get('/show-pa','PaController@show');
Route::get('/show-task','TaskController@show');
Route::patch('/show-task/{id}','TaskController@update');
Route::get('/show-type','TypeController@show');
Route::get('/show-tag','TagController@show');





Auth::routes();
Route::get('/home','HomeController@index')->name('home');


Route::get('/show-group/{id}','GroupController@edit');
Route::patch('/show-group/{id}','GroupController@update');
Route::delete('show-group/{id}','GroupController@destroy');

Route::get('/show-division/{id}','TaskDivisionController@edit');
Route::patch('/show-division/{id}','TaskDivisionController@update');
Route::delete('show-division/{id}','TaskDivisionController@destroy');

Route::get('/show-tag/{id}','TagController@edit');
Route::patch('/show-tag/{id}','TagController@update');
Route::delete('show-tag/{id}','TagController@destroy');

Route::get('/show-pa/{id}','PaController@edit');
Route::patch('/show-pa/{id}','PaController@update');
Route::delete('show-pa/{id}','PaController@destroy');




Route::get('/tag', function(){
    $data[] = ['id' => 1, 'value' => 'Dev'];
    $data[] = ['id' => 2, 'value' => 'Dancing'];
    $data[] = ['id' => 3, 'value' => 'MA'];

    $myTag[] = ['id' => 1, 'value' => 'Dev'];
    
    return view('test-tag')->with(['data' => $data, 'myTag' => $myTag]);
});

Route::post('/post-tag', function(){
    $tags = json_decode(request()->input('tag'),true);
    $getTags = [];
    foreach($tags as $tag)
    {
        $getTags[] = $tag['id'];
    }
    return $getTags;
});