<?php



Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['prefix'=> 'auth'], function(){

	Route::get('/login', [
		'as'=> 'login',
		'uses'=> 'AuthController@login'
	]);	
		Route::post('/login', [
			'as'=> 'login_check',
			'uses'=> 'AuthController@login_check'
		]);	
	Route::get('/register', [
		'as'=> 'register',
		'uses'=> 'AuthController@register'
	]);		
		Route::post('/register', [
			'as'=> 'register',
			'uses'=> 'AuthController@register_check'
		]);

});

Route::group(['prefix'=> 'user'], function(){

	Route::get('/home', [
		'as'=> 'user_home',
		'uses'=> 'CustomerController@user_home'
	]);
	Route::get('/logout', [
		'as'=> 'user_logout',
		'uses'=> 'CustomerController@user_logout'
	]);

});

Route::group(['prefix'=> 'admin'], function(){

	Route::get('/home', [
		'as'=> 'admin_home',
		'uses'=> 'AdminController@admin_home'
	]);
	Route::get('/logout', [
		'as'=> 'admin_logout',
		'uses'=> 'AdminController@admin_logout'
	]);

});
