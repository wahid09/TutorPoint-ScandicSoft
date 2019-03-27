<?php

//User Route
Route::group(['namespace'=>'User'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('requesttutor', 'RequestTutorController@index');
	Route::get('loginregister', 'AllController@index');
});

//Admin panel route
Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/home', 'HomeController@index')->name('admin.home');

	//District route
	Route::resource('admin/district', 'DistrictController');
	// Area route
	Route::resource('admin/area', 'AreaController');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('verify/{token}', 'verifyController@verify')->name('verify');
