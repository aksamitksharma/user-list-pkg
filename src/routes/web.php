<?php

Route::group(['namespace'=> 'Aksam\Contact\Http\Controllers'], function(){
  Route::get('/contact', 'ContactController@index');
  Route::post('/save', 'ContactController@save')->name('save');
});
