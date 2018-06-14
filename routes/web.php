<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('chat', 'ChatController@chat');

Route::get('send', 'ChatController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
