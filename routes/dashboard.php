<?php
Route::get('/','Dashboard\LoginController@index');
Route::post('/','Dashboard\LoginController@login')->name('login');
Route::group(['prefix' => 'dashboard',
                'namespace' => 'Dashboard'
            ], function () {


    Route::get('/lifeplan','LifePlanController@index')->name('lifeplan');
    Route::post('/lifeplan/fetch','LifePlanController@fetch')->name('fetch');
    Route::post('/lifeplan/hitung','LifePlanController@hitung');
    Route::post('/lifeplan/save','LifePlanController@savedata');
});
