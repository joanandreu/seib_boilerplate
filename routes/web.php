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


Route::get('admin/entidads', ['as'=> 'admin.entidads.index', 'uses' => 'Admin\EntidadController@index']);
Route::post('admin/entidads', ['as'=> 'admin.entidads.store', 'uses' => 'Admin\EntidadController@store']);
Route::get('admin/entidads/create', ['as'=> 'admin.entidads.create', 'uses' => 'Admin\EntidadController@create']);
Route::put('admin/entidads/{entidads}', ['as'=> 'admin.entidads.update', 'uses' => 'Admin\EntidadController@update']);
Route::patch('admin/entidads/{entidads}', ['as'=> 'admin.entidads.update', 'uses' => 'Admin\EntidadController@update']);
Route::delete('admin/entidads/{entidads}', ['as'=> 'admin.entidads.destroy', 'uses' => 'Admin\EntidadController@destroy']);
Route::get('admin/entidads/{entidads}', ['as'=> 'admin.entidads.show', 'uses' => 'Admin\EntidadController@show']);
Route::get('admin/entidads/{entidads}/edit', ['as'=> 'admin.entidads.edit', 'uses' => 'Admin\EntidadController@edit']);
