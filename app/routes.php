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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@home'));

Route::get('sing-up', array('as' => 'sing-up', 'uses' => 'HomeController@singUp'));

Route::group(array('before' => 'csrf'), function(){

	Route::post('/', array('as' => 'register', 'uses' => 'HomeController@register'));
		
});

Route::get('candidatos', array('as' => 'users', 'uses' => 'HomeController@users'));

Route::get('equipo/{id}', ['as' => 'team', 'uses' => 'HomeController@team']);

Route::get('carrera/{slug}/{id}', ['as' => 'category', 'uses' => 'HomeController@category']);	

Route::get('candidato/{slug}/{id}', ['as' => 'user', 'uses' => 'HomeController@user']);