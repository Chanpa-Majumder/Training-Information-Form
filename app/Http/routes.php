<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/training_info', 'TrainingController@create');
Route::post('/training_info', 'TrainingController@store');
Route::get('/trainings', 'TrainingController@index');
Route::get('/training/{training_slug?}', 'TrainingController@show');
Route::get('/training/{training_slug?}/edit', 'TrainingController@edit');
Route::post('/training/{training_slug?}/edit','TrainingController@update');
Route::post('/training/{training_slug?}/delete','TrainingController@destroy');

