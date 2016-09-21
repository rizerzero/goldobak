<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
 

Route::auth();

// Route::resource('users','UserController');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth'], 'namespace' => 'Dashboard\Acl'], function () {

    Route::get('roles', [
        'as'         => 'roles.index',
        'uses'       => 'RoleController@index',
        'middleware' => ['permission:role-list|role-create|role-edit|role-delete'],
    ]);

    Route::get('roles/create', [
							        'as'         => 'roles.create',
							        'uses'       => 'RoleController@create',
							        'middleware' => ['permission:role-create'],
    ]);

    Route::post('roles/create', [
									'as'         => 'roles.store',
									'uses'       => 'RoleController@store',
									'middleware' => ['permission:role-create'],
    							]);


    Route::get('roles/{id}',[
    						  		'as' => 'roles.show', 
    						  		'uses' => 'RoleController@show'
    						]);

    Route::get('roles/{id}/edit',[
    							    'as' => 'roles.edit', 
    							    'uses' => 'RoleController@edit', 
    							    'middleware' => ['permission:role-edit']
    							 ]);

    Route::patch('roles/{id}',  [
    							 	'as' => 'roles.update', 
    							 	'uses' => 'RoleController@update', 
    							 	'middleware' => ['permission:role-edit']
    							 ]);

    Route::delete('roles/{id}', [
    								'as' => 'roles.destroy', 
    								'uses' => 'RoleController@destroy', 
    								'middleware' => ['permission:role-delete']
    							]);

    Route::get('item', ['as' => 'item.index', 'uses' => 'ItemController@index', 'middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
    Route::get('item/create', ['as' => 'item.create', 'uses' => 'ItemController@create', 'middleware' => ['permission:item-create']]);
    Route::post('item/create', ['as' => 'item.store', 'uses' => 'ItemController@store', 'middleware' => ['permission:item-create']]);
    Route::get('item/{id}', ['as' => 'item.show', 'uses' => 'ItemController@show']);
    Route::get('item/{id}/edit', ['as' => 'item.edit', 'uses' => 'ItemController@edit', 'middleware' => ['permission:item-edit']]);
    Route::patch('item/{id}', ['as' => 'item.update', 'uses' => 'ItemController@update', 'middleware' => ['permission:item-edit']]);
    Route::delete('item/{id}', ['as' => 'item.destroy', 'uses' => 'ItemController@destroy', 'middleware' => ['permission:item-delete']]);
});
