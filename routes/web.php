<?php

//User Route
Route::group(['namespace'=>'User'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('requesttutor', 'RequestTutorController@index');
});


Route::get('admin/home', function () {
    return view('admin.home');
});