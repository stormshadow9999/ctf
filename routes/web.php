<?php


Route::get('/', 'LevelController@index');
Route::post('/attemptlogin','LevelController@attemptLogin');

Route::get('/logout','LevelController@logout');


///////    LEVEL REQUESTS /////

Route::get('/requestlevel2','LevelController@requestLevel2');
Route::get('/requestlevel3','LevelController@requestLevel3');
Route::get('/requestlevel4','LevelController@requestLevel4');
Route::get('/requestlevel5','LevelController@requestLevel5');
Route::get('/requestlevel6','LevelController@requestLevel6');
Route::get('/requestlevel7','LevelController@requestLevel7');
Route::get('/requestlevel8','LevelController@requestLevel8');
Route::get('/requestlevel9','LevelController@requestLevel9');

//SQL I
Route::get('/searchlevel8','LevelController@searchLevel8');
