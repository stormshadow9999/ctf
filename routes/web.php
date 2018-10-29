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
Route::get('/requestlevel10','LevelController@requestLevel10');
Route::get('/requestlevel11','LevelController@requestLevel11');
Route::get('/requestlevel12','LevelController@requestLevel12');
Route::get('/requestlevel13','LevelController@requestLevel13');
Route::get('/requestlevel14','LevelController@requestLevel14');
Route::get('/requestlevel15','LevelController@requestLevel15');

Route::get('/fuckoff','LevelController@requestfuckoff');


//SQL I
Route::get('/searchlevel8','LevelController@searchLevel8');
