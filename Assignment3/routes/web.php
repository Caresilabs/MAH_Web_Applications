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


Route::get('/blog', 'BlogpostController@index');
Route::get('/blog/show/{id}', 'BlogpostController@show');

Route::group(['middleware' => 'auth'], function () {

   Route::get('/blog/create', 'BlogpostController@create');
   Route::post('/blog/store', 'BlogpostController@store');
   Route::get('/blog/edit/{id}', 'BlogpostController@edit');
   Route::post('/blog/update/{id}', 'BlogpostController@update');
   Route::delete('/blog/destroy/{id}', 'BlogpostController@destroy');



   //Route::get('/comment/edit/{id}', 'CommentController@edit');
   Route::post('/comment/store', 'CommentController@store');
   Route::delete('/comment/destroy/{id}', 'CommentController@destroy');
   //Route::post('/comment/update/{id}', 'CommentController@update');

    
});
