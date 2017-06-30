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
	return redirect()->route('artworks.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Users
Route::resource('user', 'UserController');

//Artworks
Route::resource('artworks', 'PostController', ['except' => ['show', 'edit', 'update']]);
Route::get('artworks/tag/{tag}', 'PostController@indexTag');


//Signature
Route::get('signature', 'SignatureController@getSign');
Route::post('signature', 'SignatureController@postSign');
//Email newsletter
Route::get('email', 'EmailController@create');
Route::post('email', 'EmailController@store')->name('store.email');
//Contact Form
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

/*
 * PAGES Annexes
 */

Route::resource('pages', 'PagesController');