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
    <h1 class="fw-bold text-white  ">
      {{$cliente->nome}}
    </h1>
  </div>
  <div style=" margin-left:73%; margin-top: -5%;">
    <a class="btn btn-hero btn-primary" href="/editar_cliente/{{$cliente->id}}" data-toggle="click-ripple">
      <i class="fa fa-pencil-alt"></i>
    </a>
    <a class="btn btn-hero btn-primary" href="/eliminar_cliente/{{$cliente->id}}" data-toggle="click-ripple">
      <i class="fa fa-trash" ></i>
    </a>
    <a class="btn  btn-hero btn-primary my-2" href="/clientes">
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
              <h3 class="block-title text-center">Última Consulta</h3>
            </div>
            <div class="block-content">
              <!-- All Orders Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter fs-sm">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-xl-table-cell">Profissional</th>
                      <th class="d-none d-xl-table-cell text-center">Data de Consulta</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center">
                        <a>
                          <strong> {{$ultima_consulta->id}} </strong>
                        </a>
                      </td>
                      <td class="d-none d-xl-table-cell">
                        <a>{{$ultima_consulta->nome_profissional}}</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center">
                        <a>{{$ultima_consulta->data_consulta}}</a>
                      </td>
                      <td class="text-center fs-base">
                        <a class="btn btn-sm btn-alt-secondary" href="/visualizar_consulta/{{$ultima_consulta->id}}">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>

                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
              <!-- END All Orders Table -->
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
                  <span class="fw-medium text-muted">Data de Nascimento: {{$cliente->data_nascimento}}</span>
                </td>
              </tr>
              <tr>
                <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-heart me-1 text-danger"></i> Data de Cadastro: {{date ('d-m-Y', strtotime($cliente->created_at))}}
                </td>
              </tr>
              <tr>
                <td class="fw-medium text-muted">
                  <i class="fa fa-fw fa-calendar me-1"></i> Data de Atualização: {{date ('d-m-Y', strtotime($cliente->updated_at))}}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- END Meta -->

  <!-- Quick Overview + Actions -->
  <div class="row items-push">


            <div class="col-lg-12">
              <a class="block block-rounded block-link-shadow text-center h-100 mb-0" href="/registar_consulta_por_cliente/{{$cliente->id}}">
                <div class="block-content py-5">
                  <div class="fs-3 text-success mb-1">
                    <i class="fa fa-plus"></i>
                  </div>
                  <p class="fw-semibold fs-sm text-success text-uppercase mb-0">
                    Clique Aqui Para Adicionar Nova Consulta
                  </p>
                </div>
              </a>
            </div>
          </div>
          <!-- END Quick Overview + Actions -->

  <!-- All Orders -->
  <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Consultas realizadas pelo cliente</h3>
            </div>
            <div class="block-content">
              <!-- All Orders Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter fs-sm">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Cliente</th>
                      <th class="d-none d-xl-table-cell">Profissional</th>
                      <th class="d-none d-xl-table-cell text-center">Data de Consulta</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($consultas as $item)
                    <tr>
                      <td class="text-center">
                        <a>
                          <strong> {{$item->id}} </strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center">{{$item->nome_cliente}}</td>
                      <td class="d-none d-xl-table-cell">
                        <a>{{$item->nome_profissional}}</a>
                      </td>
                      <td class="d-none d-xl-table-cell text-center">
                        <a>{{$item->data_consulta}}</a>
                      </td>
                      <td class="text-center fs-base">
                        <a class="btn btn-sm btn-alt-secondary" href="/visualizar_consulta/{{$item->id}}">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <!-- <a class="btn btn-sm btn-alt-secondary" href="/visualizar_consulta/{{$item->id}}">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a> -->
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- END All Orders Table -->

              <!-- Pagination -->
              <nav aria-label="Photos Search Navigation">
                <ul class="pagination justify-content-end mt-2">
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                      Prev
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="javascript:void(0)">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                      Next
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- END Pagination -->
            </div>
          </div>
          <!-- END All Orders -->



@endsection
