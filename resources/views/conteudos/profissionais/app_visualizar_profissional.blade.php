@extends('layouts.app2')

@section('conteudo')

<br>
<center>
  @if (session('erro'))
  <div class="alert alert-danger">
    {{ session('erro') }}
  </div>
  @endif
</center>

 
<div class="container  bg-dark text-center" style="margin-top: 5%;">

  <div class="py-2">
    <img class="img-avatar img-avatar96 " src="{{$profissional->foto}}" alt="">
    <h1 class="fw-bold text-white  ">
      {{$profissional->nome}}
    </h1>
  </div>
  <div style=" margin-left:73%; margin-top: -5%;">
    <a class="btn btn-hero btn-primary" href="/editar_profissional/{{$profissional->id}}" data-toggle="click-ripple">
      <i class="fa fa-pencil-alt"></i>
    </a>
    <a class="btn btn-hero btn-primary" href="/eliminar_profissional/{{$profissional->id}}" data-toggle="click-ripple">
      <i class="fa fa-trash" ></i>
    </a>
    <a class="btn  btn-hero btn-primary my-2" href="/profissionais">
      <i class="fa fa-reply" aria-hidden="true"></i>
      <span class="d-none d-sm-inline ms-1"></span>
    </a>
  </div>
</div>
 
  <!-- Meta -->
  <div class="row items-push">
    <div class="col-md-6">

      <a class="block block-rounded block-bordered block-link-shadow h-100 mb-0" href="javascript:void(0)">
        <div class="block-content block-content-full ">
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title text-center">Dados Gerais</h3>
            </div>
            <div class="block-content">
              <div class="fs-4 mb-1"> {{$profissional->endereco_cep}}</div>
              <!-- <address class="fs-sm">
                Endereço: {{$profissional->endereco}}, {{$profissional->numero_endereco}} <br>
                Complemento: {{$profissional->complemento_endereco}}<br>
                Bairro: {{$profissional->bairro_endereco}}<br>
                Cidade: {{$profissional->cidade_endereco}}<br>
                Estado: {{$profissional->estado_endereco}}<br>
              </address> -->
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <div class="block block-rounded block-bordered block-link-shadow h-100 mb-0">
        <div class="block-content">
          <table class="table table-borderless table-striped">
            <tbody>
              <tr>
                <td>
                  <span class="text-warning">
                    <i class="fa fa-fw fa-star"></i>
                  </span>
                  <span class="fw-medium text-muted">Data de Nascimento: {{$profissional->data_nascimento}}</span>
                </td>
              </tr>
              <tr>
                <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-users me-1 text-danger"></i> CEP: {{$profissional->cep}}
                </td>
              </tr>
              <tr>
                <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-users me-1 text-danger"></i> Status: {{$profissional->status}}
                </td>
              </tr>
              <tr>
                <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-heart me-1 text-danger"></i> Data de Cadastro: {{date ('d-m-Y', strtotime($profissional->created_at))}}
                </td> 
              </tr>
              <tr>
                <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-calendar me-1"></i> Data de Atualização: {{date ('d-m-Y', strtotime($profissional->updated_at))}}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- END Meta -->
 


@endsection
