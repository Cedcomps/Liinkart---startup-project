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

//Index
Route::get('/', function() {
	return redirect()->route('post.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Posts
Route::resource('post', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::resource('post/tag/{tag}', 'PostController@indexTag');
//Users
Route::resource('user', 'UserController');


//Signature
Route::get('signature', 'SignatureController@getSign');
Route::post('signature', 'SignatureController@postSign');
//Email
Route::get('email', 'EmailController@create');
Route::post('email', 'EmailController@store')->name('store.email');

//Admin LTE
Route::get('admin', function () {
    return view('admin.admin_template');
});
//Contact Form
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');