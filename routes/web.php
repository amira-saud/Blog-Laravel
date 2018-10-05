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
/*Route::get('posts',function(){
    return 'hello  from posts';
});*/

/*************POSTS *********************/
Route::get('posts','PostController@index');;
Route::get('posts/view/{id}','PostController@view');

Route::get('posts/edit/{id}','PostController@edit');
Route::put('posts/update/{id}','PostController@update');
Route::get('posts/create','PostController@create');
Route::post('posts','PostController@store');
Route::delete('posts/delete/{id}','PostController@destroy');


/*************CATEGORIES *********************/
Route::get('categories','CategoryController@index')->name('categories.index');
Route::get('categories/view/{id}','CategoryController@view');

Route::get('categories/edit/{id}','CategoryController@edit');
Route::put('categories/update/{id}','CategoryController@update');
Route::get('categories/create','CategoryController@create');
Route::post('categories','CategoryController@store');
Route::delete('categories/delete/{id}','CategoryController@destroy');

/*************USERS *********************/
Route::get('users','UserController@index');;
Route::get('users/view/{id}','UserController@view');

Route::get('users/edit/{id}','UserController@edit');
Route::put('users/update/{id}','UserController@update');
Route::get('users/create','UserController@create');
Route::post('users','UserController@store');
Route::delete('users/delete/{id}','UserController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
