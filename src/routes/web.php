<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Kushkumarsoni\Contact\Http\Controllers','middleware'=>['web']],function(){
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@store')->name('contact.store');
});
