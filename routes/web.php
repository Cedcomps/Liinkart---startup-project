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
Route::get('/', 'WelcomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
//Admin LTE
Route::get('admin', function () {
    return view('admin.admin_template');
});


Auth::routes();

Route::get('facture/{n}', function($n) {
	return view('facture')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('mentions', function () {
    return view('mentions');
});
//Users
Route::resource('user', 'UserController');
//Form
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
//Signature
Route::get('signature', 'SignatureController@getSign');
Route::post('signature', 'SignatureController@postSign');
//Email
Route::get('email', 'EmailController@create');
Route::post('email', 'EmailController@store')->name('store.email');

