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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', function() {
	return redirect()->route('artworks.index');
});

//Authentification
Auth::routes();
// OAuth google/facebook/twitter
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//Administration Back office
Route::get('dashboard', function() {
	return view('admin.dashboard');
})->name('dashboard');

//Users & Like system
Route::resource('user', 'UserController');
Route::post('/like', ['as' => 'like', 'uses' => 'UserController@likeUser']);

//Artworks & tags
Route::resource('artworks', 'PostController', ['except' => ['edit', 'update']]);
Route::get('artworks/tag/{tag}', 'PostController@indexTag');


//Email for Slack
Route::get('email', 'SlackController@create');
Route::post('email', 'SlackController@store')->name('store.email');
//Contact Form
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

/*
 * PAGES Annexes
 */
Route::get('about', function(){	return view('pages.about'); })->name('about');
Route::get('team', function(){ return view('pages.team'); })->name('team');
Route::get('faq', function(){ return view('pages.faq'); })->name('faq');
Route::get('cgu', function(){ return view('pages.cgu'); })->name('cgu');
Route::get('press', function(){	return view('pages.press'); })->name('press');

/**
 * Certificat Authenticité Pdf
 */
Route::get('/certificat/{post}', ['as' => 'certificat.pdf', 'uses' => 'CertificatController@artworkPdf']);