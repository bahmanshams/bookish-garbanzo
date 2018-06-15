<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('chat', 'ChatController@chat');

Route::post('send', 'ChatController@send');

Route::get('check', function (){
    return session('chat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
