<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\adminController@dashboard')->middleware('auth');
Route::get('/index.html', 'App\Http\Controllers\adminController@dashboard')->middleware('auth');

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


Route::get('/clientes', 'App\Http\Controllers\clientesController@index')->middleware('auth');
Route::get('/registar_cliente', 'App\Http\Controllers\clientesController@create')->middleware('auth');
Route::get('/editar_cliente/{id}', 'App\Http\Controllers\clientesController@edit')->middleware('auth');
Route::get('/visualizar_cliente/{id}', 'App\Http\Controllers\clientesController@show')->middleware('auth');
Route::get('/eliminar_cliente/{id}', 'App\Http\Controllers\clientesController@destroy')->middleware('auth');
Route::post('/actualizar_cliente/{id}', 'App\Http\Controllers\clientesController@update')->middleware('auth');
Route::post('/salvar_cliente', 'App\Http\Controllers\clientesController@store')->middleware('auth');

Route::get('/profissionais', 'App\Http\Controllers\profissionaisController@index')->middleware('auth');
Route::get('/registar_profissional', 'App\Http\Controllers\profissionaisController@create')->middleware('auth');
Route::get('/editar_profissional/{id}', 'App\Http\Controllers\profissionaisController@edit')->middleware('auth');
Route::get('/visualizar_profissional/{id}', 'App\Http\Controllers\profissionaisController@show')->middleware('auth');
Route::get('/eliminar_profissional/{id}', 'App\Http\Controllers\profissionaisController@destroy')->middleware('auth');
Route::post('/actualizar_profissional/{id}', 'App\Http\Controllers\profissionaisController@update')->middleware('auth');
Route::post('/salvar_profissional', 'App\Http\Controllers\profissionaisController@store')->middleware('auth');

Route::get('/pacientes', 'App\Http\Controllers\pacientesController@index')->middleware('auth');
Route::get('/registar_paciente', 'App\Http\Controllers\pacientesController@create')->middleware('auth');
Route::get('/editar_paciente/{id}', 'App\Http\Controllers\pacientesController@edit')->middleware('auth');
Route::get('/visualizar_paciente/{id}', 'App\Http\Controllers\pacientesController@show')->middleware('auth');
Route::get('/eliminar_paciente/{id}', 'App\Http\Controllers\pacientesController@destroy')->middleware('auth');
Route::post('/actualizar_paciente/{id}', 'App\Http\Controllers\pacientesController@update')->middleware('auth');
Route::post('/salvar_paciente', 'App\Http\Controllers\pacientesController@store')->middleware('auth');


Route::get('/turmas', 'App\Http\Controllers\turmasController@index')->middleware('auth');
Route::get('/registar_turma', 'App\Http\Controllers\turmasController@create')->middleware('auth');
Route::get('/editar_turma/{id}', 'App\Http\Controllers\turmasController@edit')->middleware('auth');
Route::get('/visualizar_turma/{id}', 'App\Http\Controllers\turmasController@show')->middleware('auth');
Route::get('/eliminar_turma/{id}', 'App\Http\Controllers\turmasController@destroy')->middleware('auth');
Route::post('/actualizar_turma/{id}', 'App\Http\Controllers\turmasController@update')->middleware('auth');
Route::post('/salvar_turma', 'App\Http\Controllers\turmasController@store')->middleware('auth');



Route::get('/usuarios', 'App\Http\Controllers\usuariosController@index')->middleware('auth');
Route::get('/registar_usuario', 'App\Http\Controllers\usuariosController@create')->middleware('auth');
Route::get('/editar_usuario/{id}', 'App\Http\Controllers\usuariosController@edit')->middleware('auth');
Route::get('/visualizar_usuario/{id}', 'App\Http\Controllers\usuariosController@show')->middleware('auth');
Route::get('/eliminar_usuario/{id}', 'App\Http\Controllers\usuariosController@destroy')->middleware('auth');
Route::post('/actualizar_usuario/{id}', 'App\Http\Controllers\usuariosController@update')->middleware('auth');
Route::post('/salvar_usuario', 'App\Http\Controllers\usuariosController@store')->middleware('auth');

 
require __DIR__.'/auth.php';