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

// Route::resource('/user', 'UserController');








Route::get('/admin/pending', 'AdminController@pendingposts');
Route::get('/admin/filter', 'AdminController@index');
Route::get('/admin/mypending', 'AdminController@myadminpending');
Route::get('/admin/supervise', 'AdminController@supervisedpost');
Route::get('/admin/{post}', 'AdminController@show');
Route::get('/admin/concluded', 'AdminController@concluded');
Route::patch('/admin/{post}', 'AdminController@update');
// Route::resource('users', 'UserController', ['only'=> ['index','edit','create','store','update','delete']]);






Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');


// Route::get('/posts/{post}/edit', 'PostController@edit');
// Route::get('/post/{post}/edit', 'PostController@edit');
Route::get('/posts/all', 'PostController@allposts');
Route::get('/posts/pending', 'PostController@pendingposts');
Route::get('/posts/filter', 'PostController@index');

Route::resource('/post', 'PostController');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'AdminController@index')->middleware('admin');
