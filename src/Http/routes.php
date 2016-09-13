<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('home', '\MarcusCampos\Scafold\Http\Controllers\HomeController@index');


    Route::group(['prefix' => 'auth'], function (){
        // Login Routes...
        Route::get('login', ['as' => 'auth.login', 'uses' => 'Auth\LoginController@showLoginForm']);
        Route::post('login', ['as' => 'auth.login.post', 'uses' => 'Auth\LoginController@login']);
        Route::get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\LoginController@logout']);

        // Registration Routes...
        Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
        Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);
    });

    Route::group(['prefix' => 'password'], function (){
        // Password Reset Routes...
        Route::get('reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
        Route::post('email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
        Route::get('reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
        Route::post('reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);
    });

});
