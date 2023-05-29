<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'App\Http\Controllers\adminController@dashboard')->middleware('auth')->middleware('auth');
Route::get('/logout', 'App\Http\Controllers\adminController@logout')->middleware('auth');

Route::get('/admin', 'App\Http\Controllers\adminController@index')->middleware('auth');
Route::get('/permissoes', 'App\Http\Controllers\adminController@permissoes')->middleware('auth');
Route::get('/roles_users','App\Http\Controllers\adminController@roles_users') ->name('roles');
Route::get('/permissions_roles','App\Http\Controllers\adminController@permissions_roles')->name('permissions');
Route::get('/permissions_roles_by_id/{id}','App\Http\Controllers\adminController@permissions_roles_by_id')->middleware('auth');
Route::post('/salvar_roles_users','App\Http\Controllers\adminController@salvar_roles_users')->middleware('auth');
Route::post('/actualizar_roles_users','App\Http\Controllers\adminController@actualizar_roles_users')->middleware('auth');
Route::post('/salvar_permissions_roles','App\Http\Controllers\adminController@salvar_permissions_roles')->middleware('auth');
Route::get('/login', 'App\Http\Controllers\adminController@login')->middleware('auth');
// Route::get('/novo_usuario', 'App\Http\Controllers\adminController@novo_usuario')->middleware('auth');

 
require __DIR__.'/auth.php';
