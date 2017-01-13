<?php
Route::get('backend/tipoentidads', ['as'=> 'backend.tipoentidads.index', 'uses' => 'Backend\TipoentidadController@index']);
Route::post('backend/tipoentidads', ['as'=> 'backend.tipoentidads.store', 'uses' => 'Backend\TipoentidadController@store']);
Route::get('backend/tipoentidads/create', ['as'=> 'backend.tipoentidads.create', 'uses' => 'Backend\TipoentidadController@create']);
Route::put('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.update', 'uses' => 'Backend\TipoentidadController@update']);
Route::patch('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.update', 'uses' => 'Backend\TipoentidadController@update']);
Route::delete('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.destroy', 'uses' => 'Backend\TipoentidadController@destroy']);
Route::get('backend/tipoentidads/{tipoentidads}', ['as'=> 'backend.tipoentidads.show', 'uses' => 'Backend\TipoentidadController@show']);
Route::get('backend/tipoentidads/{tipoentidads}/edit', ['as'=> 'backend.tipoentidads.edit', 'uses' => 'Backend\TipoentidadController@edit']);