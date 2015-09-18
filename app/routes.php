<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//********************* Common routes for Guest and Authenticated users

//This line will print the environment (local or production)
//on the top left corner
// print(App::environment());

Route::get('/','HomeController@index' , function()
{
	return View::make('index');
});


Route::get('/Home','HomeController@home' , function()
{
	return View::make('index');
});

// Registrando las rutas

Route::any('/',array('as' => 'index' , 'uses' => 'HomeController@index'));
Route::any('/Home',array('as' => 'Home' , 'uses' => 'HomeController@index'));

// Redireccion de errores not found

App::missing(function($exception){

return Response::View('errors.404',array(),404);


});