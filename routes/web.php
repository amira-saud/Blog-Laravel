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
Route::get(
    'posts',
    'PostController@index'
)->name('posts.index');
Route::get('posts/view/{id}','PostController@view');

Route::get('posts/edit/{id}','PostController@edit');
Route::put('posts/update/{id}','PostController@update');
Route::get('posts/create','PostController@create');
Route::post('posts','PostController@store');
Route::delete('posts/delete/{id}','PostController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
