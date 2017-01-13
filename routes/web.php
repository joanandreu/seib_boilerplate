<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__.'/Frontend/');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    includeRouteFiles(__DIR__.'/Backend/');
});

Route::get('backend/tipoentidads', ['as'=> 'backend.tipoentidads.index', 'uses' => 'Backend\TipoentidadController@index']);
Route::post('backend/tipoentidads', ['as'=> 'backend.tipoentidads.store', 'uses' => 'Backend\TipoentidadController@store']);
Route::get('backend/tipoentidads/create', ['as'=> 'backend.tipoentidads.create', 'uses' => 'Backend\TipoentidadController@create']);
Route::put('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.update', 'uses' => 'Backend\TipoentidadController@update']);
Route::patch('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.update', 'uses' => 'Backend\TipoentidadController@update']);
Route::delete('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.destroy', 'uses' => 'Backend\TipoentidadController@destroy']);
Route::get('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.show', 'uses' => 'Backend\TipoentidadController@show']);
Route::get('backend/tipoentidads/{tipoentidads}/edit', ['as'=> 'backend.tipoentidads.edit', 'uses' => 'Backend\TipoentidadController@edit']);

Route::get('backend/tipocargos', ['as'=> 'backend.tipocargos.index', 'uses' => 'Backend\TipocargoController@index']);
Route::post('backend/tipocargos', ['as'=> 'backend.tipocargos.store', 'uses' => 'Backend\TipocargoController@store']);
Route::get('backend/tipocargos/create', ['as'=> 'backend.tipocargos.create', 'uses' => 'Backend\TipocargoController@create']);
Route::put('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.update', 'uses' => 'Backend\TipocargoController@update']);
Route::patch('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.update', 'uses' => 'Backend\TipocargoController@update']);
Route::delete('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.destroy', 'uses' => 'Backend\TipocargoController@destroy']);
Route::get('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.show', 'uses' => 'Backend\TipocargoController@show']);
Route::get('backend/tipocargos/{tipocargos}/edit', ['as'=> 'backend.tipocargos.edit', 'uses' => 'Backend\TipocargoController@edit']);


Route::get('backend/tipocargos', ['as'=> 'backend.tipocargos.index', 'uses' => 'Backend\TipocargoController@index']);
Route::post('backend/tipocargos', ['as'=> 'backend.tipocargos.store', 'uses' => 'Backend\TipocargoController@store']);
Route::get('backend/tipocargos/create', ['as'=> 'backend.tipocargos.create', 'uses' => 'Backend\TipocargoController@create']);
Route::put('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.update', 'uses' => 'Backend\TipocargoController@update']);
Route::patch('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.update', 'uses' => 'Backend\TipocargoController@update']);
Route::delete('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.destroy', 'uses' => 'Backend\TipocargoController@destroy']);
Route::get('backend/tipocargos/{tipocargos}', ['as'=> 'backend.tipocargos.show', 'uses' => 'Backend\TipocargoController@show']);
Route::get('backend/tipocargos/{tipocargos}/edit', ['as'=> 'backend.tipocargos.edit', 'uses' => 'Backend\TipocargoController@edit']);


Route::get('backend/entidads', ['as'=> 'backend.entidads.index', 'uses' => 'Backend\EntidadController@index']);
Route::post('backend/entidads', ['as'=> 'backend.entidads.store', 'uses' => 'Backend\EntidadController@store']);
Route::get('backend/entidads/create', ['as'=> 'backend.entidads.create', 'uses' => 'Backend\EntidadController@create']);
Route::put('backend/entidads/{entidads}', ['as'=> 'backend.entidads.update', 'uses' => 'Backend\EntidadController@update']);
Route::patch('backend/entidads/{entidads}', ['as'=> 'backend.entidads.update', 'uses' => 'Backend\EntidadController@update']);
Route::delete('backend/entidads/{entidads}', ['as'=> 'backend.entidads.destroy', 'uses' => 'Backend\EntidadController@destroy']);
Route::get('backend/entidads/{entidads}', ['as'=> 'backend.entidads.show', 'uses' => 'Backend\EntidadController@show']);
Route::get('backend/entidads/{entidads}/edit', ['as'=> 'backend.entidads.edit', 'uses' => 'Backend\EntidadController@edit']);
