<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('chat', 'ChatController@chat');

Route::post('send', 'ChatController@send');

Route::post('getOldMessage', 'ChatController@getOldMessage');

Route::post('deleteSession','ChatController@deleteSession');

Route::post('saveToSession', 'ChatController@saveToSession');

Route::get('check', function (){
    return session('chat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
