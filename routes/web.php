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


Route::get('/clientes', 'App\Http\Controllers\clientesController@index');
Route::get('/registar_cliente', 'App\Http\Controllers\clientesController@create');
Route::get('/editar_cliente/{id}', 'App\Http\Controllers\clientesController@edit');
Route::get('/visualizar_cliente/{id}', 'App\Http\Controllers\clientesController@show');
Route::get('/eliminar_cliente/{id}', 'App\Http\Controllers\clientesController@destroy');
Route::post('/actualizar_cliente/{id}', 'App\Http\Controllers\clientesController@update');
Route::post('/salvar_cliente', 'App\Http\Controllers\clientesController@store');

Route::get('/profissionais', 'App\Http\Controllers\profissionaisController@index');
Route::get('/registar_profissional', 'App\Http\Controllers\profissionaisController@create');
Route::get('/editar_profissional/{id}', 'App\Http\Controllers\profissionaisController@edit');
Route::get('/visualizar_profissional/{id}', 'App\Http\Controllers\profissionaisController@show');
Route::get('/eliminar_profissional/{id}', 'App\Http\Controllers\profissionaisController@destroy');
Route::post('/actualizar_profissional/{id}', 'App\Http\Controllers\profissionaisController@update');
Route::post('/salvar_profissional', 'App\Http\Controllers\profissionaisController@store');

Route::get('/pacientes', 'App\Http\Controllers\pacientesController@index');
Route::get('/registar_paciente', 'App\Http\Controllers\pacientesController@create');
Route::get('/editar_paciente/{id}', 'App\Http\Controllers\pacientesController@edit');
Route::get('/visualizar_paciente/{id}', 'App\Http\Controllers\pacientesController@show');
Route::get('/eliminar_paciente/{id}', 'App\Http\Controllers\pacientesController@destroy');
Route::post('/actualizar_paciente/{id}', 'App\Http\Controllers\pacientesController@update');
Route::post('/salvar_paciente', 'App\Http\Controllers\pacientesController@store');


Route::get('/turmas', 'App\Http\Controllers\turmasController@index');
Route::get('/registar_turma', 'App\Http\Controllers\turmasController@create');
Route::get('/editar_turma/{id}', 'App\Http\Controllers\turmasController@edit');
Route::get('/visualizar_turma/{id}', 'App\Http\Controllers\turmasController@show');
Route::get('/eliminar_turma/{id}', 'App\Http\Controllers\turmasController@destroy');
Route::post('/actualizar_turma/{id}', 'App\Http\Controllers\turmasController@update');
Route::post('/salvar_turma', 'App\Http\Controllers\turmasController@store');

 
require __DIR__.'/auth.php';