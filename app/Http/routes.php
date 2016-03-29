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
Blade::setContentTags('<%', '%>');        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data

/** Rotas View */
Route::get('/','HomeController@index');
Route::get('/renda','RendaController@index');

/** Rotas Api */
Route::get('/api/vocabulary/words','WordsController@know');
Route::get('/api/vocabulary/words/{word}','WordsController@words');

Route::post('/api/vocabulary/words','WordsController@newWord');
Route::post('/api/vocabulary/words/{id}','WordsController@updateWord');

