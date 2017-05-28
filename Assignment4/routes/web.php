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

Auth::routes();

Route::get('/', 'WelcomeController@index');

Route::get('/blog', 'BlogpostController@index');
Route::get('/blog/show/{id}', 'BlogpostController@show');

Route::get('/tag', 'TagController@index');
Route::get('/tag/{id}', 'TagController@showtag');

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/blog/create', 'BlogpostController@create');
    Route::post('/blog/store', 'BlogpostController@store');
    Route::get('/blog/edit/{id}', 'BlogpostController@edit');
    Route::put('/blog/update/{id}', 'BlogpostController@update');
    Route::delete('/blog/destroy/{id}', 'BlogpostController@destroy');
    
    
    Route::post('/comment/store', 'CommentController@store');
    Route::delete('/comment/destroy/{id}', 'CommentController@destroy');
    
    
    Route::get('/tag/create', 'TagController@create');
    Route::post('/tag/store', 'TagController@store');

    Route::get('/tag/edit/{id}', 'TagController@edit');
    Route::put('/tag/update/{id}', 'TagController@update');

    Route::delete('/tag/destroy/{id}', 'TagController@destroy');
    
});