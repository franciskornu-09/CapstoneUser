<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*This route is to direct the user to the index page where they see the events pulled from the 
 database */
Route::get('/', 'EventController@index');

/*This route is to direct the user to the register page */
Route::get('index','IndexController@index');

/*This route is to direct the user to the log in page */
Route::get('home', 'HomeController@index');

Route::get('about','AboutController@index');

Route::get('agent','AgentController@index');

Route::get('events','EventController@index');

Route::get('gallery','GalleryController@index');

Route::get('pull','PullController@index');

Route::get('signup','PrefernceController@index');

Route::get('pro','PrefernceController@create');

Route::get('first','ContactController@index');

Route::get('single','SingleController@index');

Route::get('search','SearchController@show');

Route::get('map','MapController@index');

Route::post('insert','FindController@index');

Route::get('provideXml','MapController@show');

Route::get('inbox','MessageController@index');

Route::post('message','SingleController@show');

Route::get('testing','AboutController@create');

Route::get('alert','PullController@create');

Route::post('send','PullController@store');

Route::filter('auth', function()
{
    if( ! Session::get('id')){
        return Redirect::guest('user/login');       
    } 
});

$router->get('/show/{id}',[
    'uses' => 'PrefernceController@show',
    'as'   => 'switch'
]);

$router->get('/maps/{id}',[
    'uses' => 'MapController@show',
    'as'   => 'mapLoc'
]);

$router->get('/code/{id}',[
    'uses' => 'GalleryController@store',
    'as'   => 'codeDisplay'
]);

$router->get('/edit/{id}',[
    'uses' => 'PrefernceController@edit',
    'as'   => 'editProfile'
]);

$router->get('/qrcode/{id}',[
    'uses' => 'GalleryController@show',
    'as'   => 'qr'
]);

$router->get('/events',[
    'uses' => 'EventController@index',
    'as'   => 'qr2'
]);

$router->get('/dispaly/{id}',[
    'uses' => 'MessageController@show',
    'as'   => 'show'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



