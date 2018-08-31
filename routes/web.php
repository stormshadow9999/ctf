<?php


Route::get('/', 'LevelController@index');
Route::post('/attemptlogin','LevelController@attemptLogin');

Route::get('/logout','LevelController@logout');


///////    LEVEL REQUESTS /////

Route::get('/requestlevel2','LevelController@requestLevel2');
Route::get('/requestlevel3','LevelController@requestLevel3');
Route::get('/requestlevel4','LevelController@requestLevel4');
Route::get('/requestlevel5','LevelController@requestLevel5');

