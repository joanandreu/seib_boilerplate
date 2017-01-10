<?php

Route::get('admin/entidads', ['as'=> 'admin.entidads.index', 'uses' => 'Admin\EntidadController@index']);
Route::post('admin/entidads', ['as'=> 'admin.entidads.store', 'uses' => 'Admin\EntidadController@store']);
Route::get('admin/entidads/create', ['as'=> 'admin.entidads.create', 'uses' => 'Admin\EntidadController@create']);
Route::put('admin/entidads/{entidads}', ['as'=> 'admin.entidads.update', 'uses' => 'Admin\EntidadController@update']);
Route::patch('admin/entidads/{entidads}', ['as'=> 'admin.entidads.update', 'uses' => 'Admin\EntidadController@update']);
Route::delete('admin/entidads/{entidads}', ['as'=> 'admin.entidads.destroy', 'uses' => 'Admin\EntidadController@destroy']);
Route::get('admin/entidads/{entidads}', ['as'=> 'admin.entidads.show', 'uses' => 'Admin\EntidadController@show']);
Route::get('admin/entidads/{entidads}/edit', ['as'=> 'admin.entidads.edit', 'uses' => 'Admin\EntidadController@edit']);