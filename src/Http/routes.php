<?php

Route::get('home', '\Bestmomo\Scafold\Http\Controllers\HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);