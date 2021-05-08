<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/', 'ChatsController@index');
	Route::get('messages', 'ChatsController@fetchMessages');
	Route::post('messages', 'ChatsController@sendMessage');
});
