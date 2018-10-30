<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['namespace' => 'User', 'prefix' => '/'], function () {

    Route::get('/', [
        'uses' => 'RabbitController@index',
        'as' => 'home'
    ]);

    Route::get('about', [
        'uses' => 'RabbitController@about',
        'as' => 'about'
    ]);

    Route::get('portfolio', [
        'uses' => 'RabbitController@portfolio',
        'as' => 'portfolio'
    ]);

    Route::get('order', [
        'uses' => 'RabbitController@order',
        'as' => 'order'
    ]);

    Route::post('order', [
        'uses' => 'RabbitController@postOrder',
        'as' => 'order.submit'
    ]);

    Route::get('service/{id}', [
        'uses' => 'RabbitController@detailService',
        'as' => 'detail.service'
    ]);

    Route::get('feedback', [
        'uses' => 'RabbitController@feedback',
        'as' => 'feedback'
    ]);

    Route::post('feedback', [
        'uses' => 'RabbitController@postFeedback',
        'as' => 'feedback.submit'
    ]);

    Route::get('contact', [
        'uses' => 'RabbitController@contact',
        'as' => 'contact'
    ]);

    Route::post('contact', [
        'uses' => 'MailController@postContact',
        'as' => 'contact.submit'
    ]);


});

Route::group(['namespace' => 'Auth', 'prefix' => 'account'], function () {

    Route::post('login', [
        'uses' => 'LoginController@login',
        'as' => 'login'
    ]);

    Route::post('logout', [
        'uses' => 'LoginController@logout',
        'as' => 'logout'
    ]);

    Route::get('activate', [
        'uses' => 'ActivationController@activate',
        'as' => 'activate'
    ]);

    Route::get('login/{provider}', [
        'uses' => 'SocialAuthController@redirectToProvider',
        'as' => 'redirect'
    ]);

    Route::get('login/{provider}/callback', [
        'uses' => 'SocialAuthController@handleProviderCallback',
        'as' => 'callback'
    ]);

});

