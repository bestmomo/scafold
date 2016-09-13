<?php

Route::get('home', '\MarcusCampos\Scafold\Http\Controllers\HomeController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\LoginController@getLogin');
Route::post('auth/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout', 'Auth\LoginController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\RegisterController@getRegister');
Route::post('auth/register', 'Auth\RegisterController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\ForgotPasswordController@getEmail');
Route::post('password/email', 'Auth\ForgotPasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@getReset');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset');
