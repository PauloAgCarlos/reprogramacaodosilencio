<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\adminController@dashboard')->middleware('auth');
Route::get('/index.html', 'App\Http\Controllers\adminController@dashboard')->middleware('auth');

Route::get('/dashboard', 'App\Http\Controllers\adminController@dashboard')->middleware('auth')->middleware('auth');
Route::get('/logout', 'App\Http\Controllers\adminController@logout')->middleware('auth');

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

Route::get('/turmas', 'App\Http\Controllers\turmasController@index')->middleware('auth');
Route::get('/registar_turma', 'App\Http\Controllers\turmasController@create')->middleware('auth');
Route::get('/editar_turma/{id}', 'App\Http\Controllers\turmasController@edit')->middleware('auth');
Route::get('/visualizar_turma/{id}', 'App\Http\Controllers\turmasController@show')->middleware('auth');
Route::get('/eliminar_turma/{id}', 'App\Http\Controllers\turmasController@destroy')->middleware('auth');
Route::post('/actualizar_turma/{id}', 'App\Http\Controllers\turmasController@update')->middleware('auth');
Route::post('/salvar_turma', 'App\Http\Controllers\turmasController@store')->middleware('auth');



Route::get('/alunos', 'App\Http\Controllers\alunosController@index')->middleware('auth');
Route::get('/registar_aluno', 'App\Http\Controllers\alunosController@create')->middleware('auth');
Route::get('/editar_aluno/{id}', 'App\Http\Controllers\alunosController@edit')->middleware('auth');
Route::get('/visualizar_aluno/{id}', 'App\Http\Controllers\alunosController@show')->middleware('auth');
Route::get('/eliminar_aluno/{id}', 'App\Http\Controllers\alunosController@destroy')->middleware('auth');
Route::post('/actualizar_aluno/{id}', 'App\Http\Controllers\alunosController@update')->middleware('auth');
Route::post('/salvar_aluno', 'App\Http\Controllers\alunosController@store')->middleware('auth');



Route::get('/seeds', 'App\Http\Controllers\seedsController@index')->middleware('auth');
Route::get('/registar_seed', 'App\Http\Controllers\seedsController@create')->middleware('auth');
Route::get('/editar_seed/{id}', 'App\Http\Controllers\seedsController@edit')->middleware('auth');
Route::get('/visualizar_seed/{id}', 'App\Http\Controllers\seedsController@show')->middleware('auth');
Route::get('/eliminar_seed/{id}', 'App\Http\Controllers\seedsController@destroy')->middleware('auth');
Route::post('/actualizar_seed/{id}', 'App\Http\Controllers\seedsController@update')->middleware('auth');
Route::post('/salvar_seed', 'App\Http\Controllers\seedsController@store')->middleware('auth');



Route::get('/certificados', 'App\Http\Controllers\certificadosController@index')->middleware('auth');
Route::get('/registar_certificado', 'App\Http\Controllers\certificadosController@create')->middleware('auth');
Route::get('/editar_certificado/{id}', 'App\Http\Controllers\certificadosController@edit')->middleware('auth');
Route::get('/visualizar_certificado/{id}', 'App\Http\Controllers\certificadosController@show')->middleware('auth');
Route::get('/eliminar_certificado/{id}', 'App\Http\Controllers\certificadosController@destroy')->middleware('auth');
Route::post('/actualizar_certificado/{id}', 'App\Http\Controllers\certificadosController@update')->middleware('auth');
Route::post('/salvar_certificado', 'App\Http\Controllers\certificadosController@store')->middleware('auth');



Route::get('/consultas', 'App\Http\Controllers\consultasController@index')->middleware('auth');
Route::get('/registar_consulta', 'App\Http\Controllers\consultasController@create')->middleware('auth');
Route::get('/registar_consulta_por_cliente/{id}', 'App\Http\Controllers\consultasController@create_por_cliente')->middleware('auth');
Route::get('/editar_consulta/{id}', 'App\Http\Controllers\consultasController@edit')->middleware('auth');
Route::get('/visualizar_consulta/{id}', 'App\Http\Controllers\consultasController@show')->middleware('auth');
Route::get('/eliminar_consulta/{id}', 'App\Http\Controllers\consultasController@destroy')->middleware('auth');
Route::post('/actualizar_consulta/{id}', 'App\Http\Controllers\consultasController@update')->middleware('auth');
Route::post('/salvar_consulta', 'App\Http\Controllers\consultasController@store')->middleware('auth');



Route::get('/arquitetos', 'App\Http\Controllers\arquitetosController@index')->middleware('auth');
Route::get('/registar_arquiteto', 'App\Http\Controllers\arquitetosController@create')->middleware('auth');
Route::get('/editar_arquiteto/{id}', 'App\Http\Controllers\arquitetosController@edit')->middleware('auth');
Route::get('/visualizar_arquiteto/{id}', 'App\Http\Controllers\arquitetosController@show')->middleware('auth');
Route::get('/eliminar_arquiteto/{id}', 'App\Http\Controllers\arquitetosController@destroy')->middleware('auth');
Route::post('/actualizar_arquiteto/{id}', 'App\Http\Controllers\arquitetosController@update')->middleware('auth');
Route::post('/salvar_arquiteto', 'App\Http\Controllers\arquitetosController@store')->middleware('auth');



Route::get('/reprogramadores', 'App\Http\Controllers\reprogramadorController@index')->middleware('auth');
Route::get('/registar_reprogramador', 'App\Http\Controllers\reprogramadorController@create')->middleware('auth');
Route::get('/editar_reprogramador/{id}', 'App\Http\Controllers\reprogramadorController@edit')->middleware('auth');
Route::get('/visualizar_reprogramador/{id}', 'App\Http\Controllers\reprogramadorController@show')->middleware('auth');
Route::get('/eliminar_reprogramador/{id}', 'App\Http\Controllers\reprogramadorController@destroy')->middleware('auth');
Route::post('/actualizar_reprogramador/{id}', 'App\Http\Controllers\reprogramadorController@update')->middleware('auth');
Route::post('/salvar_reprogramador', 'App\Http\Controllers\reprogramadorController@store')->middleware('auth');



Route::get('/condutores', 'App\Http\Controllers\condutoresController@index')->middleware('auth');
Route::get('/registar_condutor', 'App\Http\Controllers\condutoresController@create')->middleware('auth');
Route::get('/editar_condutor/{id}', 'App\Http\Controllers\condutoresController@edit')->middleware('auth');
Route::get('/visualizar_condutor/{id}', 'App\Http\Controllers\condutoresController@show')->middleware('auth');
Route::get('/eliminar_condutor/{id}', 'App\Http\Controllers\condutoresController@destroy')->middleware('auth');
Route::post('/actualizar_condutor/{id}', 'App\Http\Controllers\condutoresController@update')->middleware('auth');
Route::post('/salvar_condutor', 'App\Http\Controllers\condutoresController@store')->middleware('auth');



Route::get('/canais', 'App\Http\Controllers\canaisController@index')->middleware('auth');
Route::get('/canais_pendentes', 'App\Http\Controllers\canaisController@pendentes')->middleware('auth');
Route::get('/registar_canal', 'App\Http\Controllers\canaisController@create')->middleware('auth');
Route::get('/editar_canal/{id}', 'App\Http\Controllers\canaisController@edit')->middleware('auth');
Route::get('/visualizar_canal/{id}', 'App\Http\Controllers\canaisController@show')->middleware('auth');
Route::get('/aprovar_canal/{id}', 'App\Http\Controllers\canaisController@aprovar')->middleware('auth');
Route::get('/eliminar_canal/{id}', 'App\Http\Controllers\canaisController@destroy')->middleware('auth');
Route::post('/actualizar_canal/{id}', 'App\Http\Controllers\canaisController@update')->middleware('auth');
Route::post('/salvar_canal', 'App\Http\Controllers\canaisController@store')->middleware('auth');



Route::get('/classes', 'App\Http\Controllers\classesController@index')->middleware('auth');
Route::get('/registar_classe', 'App\Http\Controllers\classesController@create')->middleware('auth');
Route::get('/editar_classe/{id}', 'App\Http\Controllers\classesController@edit')->middleware('auth');
Route::get('/visualizar_classe/{id}', 'App\Http\Controllers\classesController@show')->middleware('auth');
Route::get('/eliminar_classe/{id}', 'App\Http\Controllers\classesController@destroy')->middleware('auth');
Route::post('/actualizar_classe/{id}', 'App\Http\Controllers\classesController@update')->middleware('auth');
Route::post('/salvar_classe', 'App\Http\Controllers\classesController@store')->middleware('auth');



Route::get('/seedFavoritos', 'App\Http\Controllers\seedsFavoritosController@index')->middleware('auth');
Route::get('/registar_seedFavorito', 'App\Http\Controllers\seedsFavoritosController@create')->middleware('auth');
Route::get('/editar_seedFavorito/{id}', 'App\Http\Controllers\seedsFavoritosController@edit')->middleware('auth');
Route::get('/visualizar_seedFavorito/{id}', 'App\Http\Controllers\seedsFavoritosController@show')->middleware('auth');
Route::get('/eliminar_seedFavorito/{id}', 'App\Http\Controllers\seedsFavoritosController@destroy')->middleware('auth');
Route::post('/actualizar_seedFavorito/{id}', 'App\Http\Controllers\seedsFavoritosController@update')->middleware('auth');
Route::post('/salvar_seedFavorito', 'App\Http\Controllers\seedsFavoritosController@store')->middleware('auth');



Route::get('/configuracoes', 'App\Http\Controllers\configuracoesController@index')->middleware('auth');
Route::get('/registar_configuracao', 'App\Http\Controllers\configuracoesController@create')->middleware('auth');
Route::get('/editar_configuracao/{id}', 'App\Http\Controllers\configuracoesController@edit')->middleware('auth');
Route::get('/visualizar_configuracao/{id}', 'App\Http\Controllers\configuracoesController@show')->middleware('auth');
Route::get('/eliminar_configuracao/{id}', 'App\Http\Controllers\configuracoesController@destroy')->middleware('auth');
Route::post('/actualizar_configuracao/{id}', 'App\Http\Controllers\configuracoesController@update')->middleware('auth');
Route::post('/salvar_configuracao', 'App\Http\Controllers\configuracoesController@store')->middleware('auth');



Route::get('/planoAccaos', 'App\Http\Controllers\planoAccaoController@index')->middleware('auth');
Route::get('/registar_planoAccao', 'App\Http\Controllers\planoAccaoController@create')->middleware('auth');
Route::get('/editar_planoAccao/{id}', 'App\Http\Controllers\planoAccaoController@edit')->middleware('auth');
Route::get('/visualizar_planoAccao/{id}', 'App\Http\Controllers\planoAccaoController@show')->middleware('auth');
Route::get('/eliminar_planoAccao/{id}', 'App\Http\Controllers\planoAccaoController@destroy')->middleware('auth');
Route::post('/actualizar_planoAccao/{id}', 'App\Http\Controllers\planoAccaoController@update')->middleware('auth');
Route::post('/salvar_planoAccao', 'App\Http\Controllers\planoAccaoController@store')->middleware('auth');


Route::get('/usuarios', 'App\Http\Controllers\usuariosController@index')->middleware('auth');
Route::get('/registar_usuario', 'App\Http\Controllers\usuariosController@create')->middleware('auth');
Route::get('/editar_usuario/{id}', 'App\Http\Controllers\usuariosController@edit')->middleware('auth');
Route::get('/visualizar_usuario/{id}', 'App\Http\Controllers\usuariosController@show')->middleware('auth');
Route::get('/eliminar_usuario/{id}', 'App\Http\Controllers\usuariosController@destroy')->middleware('auth');
Route::post('/actualizar_usuario/{id}', 'App\Http\Controllers\usuariosController@update')->middleware('auth');
Route::post('/salvar_usuario', 'App\Http\Controllers\usuariosController@store')->middleware('auth');


require __DIR__.'/auth.php';
