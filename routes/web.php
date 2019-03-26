<?php

//User Route
Route::group(['namespace'=>'User'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('requesttutor', 'RequestTutorController@index');
	Route::get('loginregister', 'AllController@index');
});


Route::get('admin/home', function () {
    return view('admin.home');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('verify/{token}', 'verifyController@verify')->name('verify');
