<?php

//User Route
Route::group(['namespace'=>'User'], function(){
	Route::get('/', 'HomeController@index');
	//Request Tutor controller
	Route::get('requesttutor', 'RequestTutorController@index');
	Route::post('save-requesttutor', 'RequestTutorController@store');
	Route::resource('request', 'tutorrequestController');
	//Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'RequestTutorController@myformAjax'));
	Route::get('loginregister', 'AllController@index');
});

//Admin panel route
Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/home', 'HomeController@index')->name('admin.home');

	//District route
	Route::resource('admin/district', 'DistrictController');
	// Area route
	Route::resource('admin/area', 'AreaController');

	Route::resource('admin/medium', 'mediumCntroller');

	Route::resource('admin/class', 'classCntroller');

	Route::resource('admin/subject', 'subjectCntroller');

	Route::resource('admin/day', 'dayCntroller');

	Route::resource('admin/salary', 'salaryCntroller');

	Route::resource('admin/gender', 'genderController');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('verify/{token}', 'verifyController@verify')->name('verify');
