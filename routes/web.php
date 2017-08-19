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

//Administration Back office
Route::resource('dashboard', 'EspaceAdminController');

//Authentification
Auth::routes();
// OAuth google/facebook/twitter
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//Users & Like system
Route::resource('user', 'UserController');
Route::post('/like', ['as' => 'like', 'uses' => 'UserController@likeUser']);

//Artworks & tags
Route::resource('artworks', 'PostController', ['except' => ['edit', 'update']]);
Route::get('artworks/tag/{tag}', 'PostController@indexTag');
Route::get('search', ['as' => 'search', 'uses' => 'PostController@search']);
Route::post('revision/{post}', ['as' => 'artworks.revision', 'uses' => 'PostController@revision']);
//Mise en relation par email si pas de messagerie interne
//Route::post('linking/{post}', 'PropositionController@sendEmail')->name('linking');

//Email for Slack
Route::get('email', 'SlackController@create');
Route::post('email', 'SlackController@store')->name('store.email');
//Contact Form
Route::get('contact', 'ContactController@create');
Route::post('contact', 'ContactController@store');

/**
 * Messagerie interne
 */
Route::group(['prefix' => 'messages'], function () {
	Route::get('/', ['as'       => 'messages', 'uses' => 'MessagesController@index']);
	Route::get('create', ['as'  => 'messages.create', 'uses' => 'MessagesController@create']);
	Route::post('/', ['as'      => 'messages.store', 'uses' => 'MessagesController@store']);
	Route::get('{id}', ['as'    => 'messages.show', 'uses' => 'MessagesController@show']);
	Route::put('/update', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

/*
 * PAGES Annexes
 */
Route::get('about', function(){	return view('pages.about'); })->name('about');
Route::get('donation', function(){ return view('pages.donation'); })->name('donation');
Route::get('faq', function(){ 
	$categories = App\Category::orderBy('category')->get();
	return view('pages.faq', compact('categories')); 
	})->name('faq');
Route::get('press', function(){	return view('pages.press'); })->name('press');
Route::get('mentions', function(){ return view('pages.mentions'); })->name('mentions');

/**
 * Certificat Authenticité Pdf
 */
Route::get('/certificat/{post}', ['as' => 'certificat.pdf', 'uses' => 'CertificatController@artworkPdf']);