<?php
Route::get('/login','Dashboard\LoginController@index')->name('getLogin');
Route::get('/register','Dashboard\LoginController@indexregister')->name('indexreg');
Route::post('/register','Dashboard\LoginController@register')->name('register');
Route::post('/login','Dashboard\LoginController@login')->name('login');
Route::group(['prefix' => 'dashboard',
                'namespace' => 'Dashboard',
                'middleware' => 'auth'
            ], function () {
    Route::get('/datanew','DataController@newindex')->name('newdata');
    Route::get('/','DashboardController@index')->name('dashboard');
    Route::get('/data','DataController@newindex')->name('data');
    Route::post('/data/update','DataController@getUpdate');
    Route::post('/data/hitung','DataController@hitung');
    Route::get('/data/{id}/detail','DataController@detail')->name('detail');
    Route::get('/data/{id}/edit','DataController@getEdit')->name('editdata');
    Route::get('/data/delete','DataController@delete');
    Route::get('/lifeplan','LifePlanController@index')->name('lifeplan');
    Route::post('/lifeplan/fetchurl','LifePlanController@fetchurl');
    Route::get('/lifeplan/create','LifePlanController@create')->name('lifeplan.create');
    Route::get('/lifeplan/create/rumah','LifePlanController@rumah');
    Route::get('/lifeplan/create/liburan','LifePlanController@liburan');
    Route::get('/lifeplan/create/mobil','LifePlanController@mobil');
    Route::get('/lifeplan/create/pendidikan','LifePlanController@pendidikan');
    Route::post('/lifeplan/cekbox','LifePlanController@cekbox');
    Route::post('/lifeplan/fetch','LifePlanController@fetch')->name('fetch');
    Route::post('/lifeplan/hitung','LifePlanController@hitung');
    Route::post('/lifeplan/save','LifePlanController@savedata');
    Route::get('/logout','LoginController@logout')->name('logout');
});
