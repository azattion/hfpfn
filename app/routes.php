<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

//Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('/', 'HomeController@index');

Route::get('/genealogy/statistika','GenealogyController@statis');

Route::get('/genealogy/{id?}', 'GenealogyController@index');

Route::group(['where' => ['id' => '[0-9]+']], function() {
    
    Route::get('genealogy/view/{id}', 'GenealogyController@view');
    
    Route::get('genealogy/add/{id}',  'GenealogyController@add');
    Route::post('genealogy/store', ['as' => 'store', 'uses' => 'GenealogyController@store'])->before('csrf');

    Route::get('genealogy/addof', ['as' => 'addof', 'uses' => 'GenealogyController@addOf']);
    Route::post('genealogy/storeof', ['as' => 'storeof', 'uses' => 'GenealogyController@storeOf'])->before('csrf');

    Route::get('genealogy/edit/{id}','GenealogyController@edit');
    Route::post('genealogy/update', ['as' => 'update', 'uses' => 'GenealogyController@update'])->before('csrf');
    
    Route::get('genealogy/del/{id}', 'GenealogyController@del');
    Route::post('genealogy/delete', ['as' => 'delete', 'uses' => 'GenealogyController@delete'])->before('csrf');

    Route::get('genealogy/move/{id}', 'GenealogyController@move');
    Route::post('genealogy/moveup', ['as' => 'moveup', 'uses' => 'GenealogyController@moveUp'])->before('csrf');

    Route::get('genealogy/moveof', ['as' => 'moveof', 'uses' => 'GenealogyController@moveOf']);
    Route::post('genealogy/moveofup', ['as' => 'moveofup', 'uses' => 'GenealogyController@moveOf_up'])->before('csrf');
});
