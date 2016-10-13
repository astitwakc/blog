<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
/*
Route::get('backend/blogs',['as'=>'blogs.index','uses'=>'Backend\BlogController@index']);
Route::get('backend/blogs/create',['as'=>'blogs.create','uses'=>'Backend\BlogController@create']);
Route::post('backend/blogs',['as'=>'blogs.store','uses'=>'Backend\BlogController@store']);
*/

Route::get('backend/blogs/{blog}/confirm',[
   'as' => 'blogs.delete.confirm',
    'uses' => 'Backend\BlogController@confirm'
]);
Route::resource('backend/blogs','Backend\BlogController');