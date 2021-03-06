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

Route::get('/', array('uses'=> 'CasketsController@index'));


Route::resource('caskets', 'CasketsController');

Route::resource('vaults', 'VaultsController');

Route::resource('infos', 'InfosController');

Route::resource('reflections', 'ReflectionsController');

Route::post('/caskets/update/do', array('as' => 'update_casket', 'uses' => 'CasketsController@update'));