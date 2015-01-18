<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

/*
 |--------------------------------------------------------------------------
 | GUEST PUBLIC GROUP ROUTES
 |--------------------------------------------------------------------------
 */
Route::group(array('before' => array('guest')), function(){

	/*
	 | WELCOME ROUTE
	 */
	Route::get('/', array('as' => 'welcome', 'uses' => 'HomeController@index'));

	/*
	 | TEAM ROUTE
	 */
	Route::get('team/{id}', array('as' => 'team', 'uses' => 'HomeController@team'));

	/*
	 | CSRF SECURITY ROUTES
	 */
	Route::group(array('before' => 'csrf'), function(){
		/*
		 | REGISTER ROUTE
		 */
		 Route::post('/', ['as' => 'register', 'uses' => 'HomeController@register']);
	});

});