<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('chat', 'ChatController@chat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
