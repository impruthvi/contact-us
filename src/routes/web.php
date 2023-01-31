<?php

Route::group(['namespace' => 'Impruthvi\Contact\Http\Controllers'], function(){

    Route::get('contect-us','ContactUsController@index')->name('contact');
    Route::post('contect-us','ContactUsController@store')->name('contact.store');
});