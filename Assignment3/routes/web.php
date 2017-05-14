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
Route::get('/blog/{id}', 'BlogpostController@show');

Route::group(['middleware' => 'auth'], function () {
   // Route::get('/', function ()    {
        // Uses Auth Middleware
   // });

   Route::get('/blog/edit', 'BlogpostController@edit');
   Route::get('/blog/create', 'BlogpostController@create');
   Route::get('/blog/{id}/edit', 'BlogpostController@edit');
   Route::post('/blog/{id}/store', 'BlogpostController@store');
   Route::post('/blog/{id}/update', 'BlogpostController@update');
   Route::delete('/blog/{id}/destroy', 'BlogpostController@destroy');



   //Route::get('/comment/edit', 'BlogpostController@edit');
   //Route::get('/comment/create', 'BlogpostController@create');
   Route::get('/comment/{id}/edit', 'CommentController@edit');
   Route::post('/comment/store', 'CommentController@store');
   Route::delete('/comment/{id}/destroy', 'CommentController@destroy');
   Route::post('/comment/{id}/update', 'CommentController@update');

    
});
