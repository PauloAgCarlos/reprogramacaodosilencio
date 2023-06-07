@extends('layouts.app2')

@section('conteudo')

<br><br>

<div class="card">

  <div class="card-header py-2">

    <h3 class="card-title">

      Defina as permissões para as determinadas funções

    </h3>


  </div>

</div class="card-body">

<form action="/salvar_permissions_roles" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="table-responsive bg-white">

    <table class="table table-striped table-bordered">

      <thead>
        <tr>
          <th>Perfil {{$role_id}}</th>
        </tr>
      </thead>

      <tbody>
        <td>
          <select class="form-control" id="select_role" name="role_id">
            @foreach($roles as $item)
            <option value="{{$item->id}}" {{$item->id == $role_id ? 'selected' : ''}}>{{$item->name}}</option>
            @endforeach
          </select>
        </td>
      </tbody>
    </table>


  </div>
<br><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Premissões</th>
      <th scope="col">Visualização</th>
      <th scope="col">Inclusão</th>
      <th scope="col">Edição</th>
      <th scope="col">Exclusão</th>
    </tr>
  </thead>
  <tbody>

    {{-- <tr>
      <th scope="row">Tela Login</th>
      <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_login", old('visualizacao2', $selected)) ? 'checked' : '' }} value="pode_visualizar_login"></td>
      <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_login", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_login"></td>
      <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_login", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_login"></td>
      <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_login", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_login"></td>
    </tr> --}}

    {{-- <tr>
        <th scope="row">Esqueci a Senha</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_esqueci_senha", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_esqueci_senha"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_esqueci_senha", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_esqueci_senha"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_esqueci_senha", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_esqueci_senha"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_esqueci_senha", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_esqueci_senha"></td>
    </tr> --}}

    {{-- <tr>
        <th scope="row">Tela Início</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_tela_inicio", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_tela_inicio"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_tela_inicio", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_tela_inicio"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_tela_inicio", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_tela_inicio"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_tela_inicio", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_tela_inicio"></td>
    </tr> --}}

    <tr>
        <th scope="row">Organização</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_organizacao", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_organizacao"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_organizacao", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_organizacao"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_organizacao", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_organizacao"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_organizacao", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_organizacao"></td>
    </tr>

    <tr>
        <th scope="row">Documentos</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_documento", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_documento"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_documento", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_documento"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_documento", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_documento"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_documento", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_documento"></td>
    </tr>

    <tr>
        <th scope="row">Responsáveis</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_responsavel", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_responsavel"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_responsavel", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_responsavel"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_responsavel", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_responsavel"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_responsavel", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_responsavel"></td>
    </tr>

    <tr>
        <th scope="row">Matrículas</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_matricula", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_matricula"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_matricula", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_matricula"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_matricula", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_matricula"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_matricula", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_matricula"></td>
    </tr>

    <tr>
        <th scope="row">Meu Perfil</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_perfil", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_perfil"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_perfil", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_perfil"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_perfil", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_perfil"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_perfil", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_perfil"></td>
    </tr>

    <tr>
        <th scope="row">Prestadores</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_funcionario", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_funcionario", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_funcionario", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_funcionario", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_funcionario"></td>
    </tr>

    <tr>
        <th scope="row">Ex Prestadores</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_ex_funcionario", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_ex_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_ex_funcionario", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_ex_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_ex_funcionario", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_ex_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_ex_funcionario", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_ex_funcionario"></td>
    </tr>

    <tr>
        <th scope="row">Projetos</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_projeto", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_projeto"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_projeto", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_projeto"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_projeto", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_projeto"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_projeto", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_projeto"></td>
    </tr>

    <tr>
        <th scope="row">Projetos Antigos</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_projeto_antigo", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_projeto_antigo"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_projeto_antigo", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_projeto_antigo"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_projeto_antigo", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_projeto_antigo"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_projeto_antigo", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_projeto_antigo"></td>
    </tr>

    <tr>
        <th scope="row">Turmas</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_turma", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_turma"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_turma", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_turma"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_turma", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_turma"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_turma", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_turma"></td>
    </tr>

    <tr>
        <th scope="row">Turmas Antigas</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_turma_antiga", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_turma_antiga"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_turma_antiga", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_turma_antiga"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_turma_antiga", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_turma_antiga"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_turma_antiga", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_turma_antiga"></td>
    </tr>
    <tr>
        <th scope="row">Categorias</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_categoria", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_categoria"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_categoria", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_categoria"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_categoria", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_categoria"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_categoria", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_categoria"></td>
    </tr>
    <tr>
        <th scope="row">Apresentações</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_apresentacao", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_apresentacao"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_apresentacao", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_apresentacao"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_apresentacao", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_apresentacao"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_apresentacao", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_apresentacao"></td>
    </tr>
    <tr>
        <th scope="row">Apresentações Antigas</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_apresentacao_antiga", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_apresentacao_antiga"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_apresentacao_antiga", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_apresentacao_antiga"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_apresentacao_antiga", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_apresentacao_antiga"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_apresentacao_antiga", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_apresentacao_antiga"></td>
    </tr>
    <tr>
        <th scope="row">Beneficiários</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_estudante", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_estudante"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_estudante", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_estudante"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_estudante", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_estudante"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_estudante", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_estudante"></td>
    </tr>
    <tr>
        <th scope="row">Ex Beneficiários</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_ex_estudante", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_ex_estudante"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_ex_estudante", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_ex_estudante"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_ex_estudante", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_ex_estudante"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_ex_estudante", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_ex_estudante"></td>
    </tr>
    <tr>
        <th scope="row">Notas</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_nota", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_nota"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_nota", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_nota"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_nota", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_nota"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_nota", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_nota"></td>
    </tr>
    <tr>
        <th scope="row">Chamadas</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_chamada", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_chamada"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_chamada", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_chamada"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_chamada", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_chamada"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_chamada", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_chamada"></td>
    </tr>
    <tr>
        <th scope="row">Ocorrências</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_ocorrencia", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_ocorrencia"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_ocorrencia", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_ocorrencia"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_ocorrencia", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_ocorrencia"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_ocorrencia", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_ocorrencia"></td>
    </tr>
    <tr>
        <th scope="row">Transferências</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_transferencia", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_transferencia"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_transferencia", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_transferencia"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_transferencia", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_transferencia"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_transferencia", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_transferencia"></td>
    </tr>
    <tr>
        <th scope="row">Boletins</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_boletim", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_boletim"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_boletim", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_boletim"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_boletim", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_boletim"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_boletim", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_boletim"></td>
    </tr>
    <tr>
        <th scope="row">Digitação</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_digitacao", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_digitacao"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_digitacao", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_digitacao"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_digitacao", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_digitacao"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_digitacao", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_digitacao"></td>
    </tr>
    <tr>
        <th scope="row">Cronograma</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_cronograma", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_cronograma"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_cronograma", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_cronograma"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_cronograma", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_cronograma"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_cronograma", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_cronograma"></td>
    </tr>
    <tr>
        <th scope="row">Agendamento</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_agendamento", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_agendamento"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_agendamento", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_agendamento"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_agendamento", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_agendamento"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_agendamento", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_agendamento"></td>
    </tr>
    <tr>
        <th scope="row">Planeamento</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_planeamento", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_planeamento"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_planeamento", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_planeamento"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_planeamento", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_planeamento"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_planeamento", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_planeamento"></td>
    </tr>
    <tr>
        <th scope="row">Feriados</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_feriado", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_feriado"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_feriado", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_feriado"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_feriado", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_feriado"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_feriado", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_feriado"></td>
    </tr>
    <tr>
        <th scope="row">Relatório Acadêmico</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_relatorio_academico", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_relatorio_academico"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_relatorio_academico", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_relatorio_academico"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_relatorio_academico", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_relatorio_academico"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_relatorio_academico", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_relatorio_academico"></td>
    </tr>
    <tr>
        <th scope="row">Relatório Pedagógico</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_relatorio_pedagogico", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_relatorio_pedagogico"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_relatorio_pedagogico", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_relatorio_pedagogico"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_relatorio_pedagogico", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_relatorio_pedagogico"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_relatorio_pedagogico", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_relatorio_pedagogico"></td>
    </tr>
    <tr>
        <th scope="row">Relatório Documentos</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_relatorio_documento", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_relatorio_documento"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_relatorio_documento", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_relatorio_documento"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_relatorio_documento", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_relatorio_documento"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_relatorio_documento", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_relatorio_documento"></td>
    </tr>
    <tr>
        <th scope="row">Relatório Prestadores</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_relatorio_funcionario", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_relatorio_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_relatorio_funcionario", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_relatorio_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_relatorio_funcionario", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_relatorio_funcionario"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_relatorio_funcionario", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_relatorio_funcionario"></td>
    </tr>
    <tr>
        <th scope="row">Relatório Turmas</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_relatorio_turma", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_relatorio_turma"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_relatorio_turma", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_relatorio_turma"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_relatorio_turma", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_relatorio_turma"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_relatorio_turma", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_relatorio_turma"></td>
    </tr>
    <tr>
        <th scope="row">Permissões</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_permissao", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_permissao"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_permissao", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_permissao"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_permissao", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_permissao"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_permissao", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_permissao"></td>
    </tr>
    <tr>
        <th scope="row">Usuários</th>
        <td><input class="form-check-input" type="checkbox" id="visualizacao" name="visualizacao[]" {{ in_array("pode_visualizar_usuario", old('visualizacao', $selected)) ? 'checked' : '' }} value="pode_visualizar_usuario"></td>
        <td><input class="form-check-input" type="checkbox" id="inclusao" name="inclusao[]" {{ in_array("pode_registrar_usuario", old('inclusao', $selected)) ? 'checked' : '' }} value="pode_registrar_usuario"></td>
        <td><input class="form-check-input" type="checkbox" id="edicao" name="edicao[]" {{ in_array("pode_editar_usuario", old('edicao', $selected)) ? 'checked' : '' }} value="pode_editar_usuario"></td>
        <td><input class="form-check-input" type="checkbox" id="exclusao" name="exclusao[]" {{ in_array("pode_eliminar_usuario", old('exclusao', $selected)) ? 'checked' : '' }} value="pode_eliminar_usuario"></td>
    </tr>

  </tbody>
</table>

<center> <button type="submit" name="Enviar" class="btn btn-primary">Salvar</button> </center>

</form>


<script>
    document.querySelector('#select_role').addEventListener('change', function() {
      let value = this.value;
      // use o método fetch para enviar a requisição
      window.location.href = "/permissions_roles_by_id/" + value;
    });
</script>

@endsection