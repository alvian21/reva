<?php
Route::get('/','Dashboard\LoginController@index');
Route::post('/','Dashboard\LoginController@login')->name('login');
Route::group(['prefix' => 'dashboard',
                'namespace' => 'Dashboard',
                'middleware' => 'auth'
            ], function () {

    Route::get('/','DashboardController@index');
    Route::get('/data','DataController@index')->name('data');
    Route::get('/data/{id}/detail','DataController@detail')->name('detail');
    Route::get('/data/delete','DataController@delete');
    Route::get('/lifeplan','LifePlanController@index')->name('lifeplan');
    Route::post('/lifeplan/fetch','LifePlanController@fetch')->name('fetch');
    Route::post('/lifeplan/hitung','LifePlanController@hitung');
    Route::post('/lifeplan/save','LifePlanController@savedata');
    Route::get('/logout','LoginController@logout')->name('logout');
});
