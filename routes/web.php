<?php

Route::get('/','StaticPagescontroller@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('/signup','UsersController@create')->name('signup');
Route::resource('users','UsersController');