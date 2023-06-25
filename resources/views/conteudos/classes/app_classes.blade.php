@extends('layouts.app2')

@section('conteudo')

<br>
<center>
  @if (session('erro'))
  {{-- expr --}}
  <div class="alert alert-danger" role="alert">
    {{session('erro')}}
  </div>
  @endif
</center>


<!-- Latest Friends -->
<h2 class="content-heading">
        Classes
          </h2>

              <!-- All Products Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Nome</th>
                      <th class="d-none d-sm-table-cell text-center">Data Inicio</th>
                      <th class="d-none d-sm-table-cell text-center">Nível</th>
                      <th class="d-none d-sm-table-cell text-center">Online</th>
                      <th class="text-center">Acções</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($classes as $item)
                    <tr>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">
                          <strong> {{$item->id}} </strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_classe/{{$item->id}}"> {{$item->nome}} </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <strong>{{$item->data_inicio}}</strong>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <strong>{{$item->nivel}}</strong>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <strong>{{$item->e_online == 1 ? 'Sim' : 'Não'}}</strong>
                      </td>
                      <td class="text-center fs-sm">
                      <a class="btn btn-sm btn-alt-secondary" href="/visualizar_classe/{{$item->id}}" data-toggle="click-ripple">
                        <i class="fa fa-eye text-primary"></i>
                      </a>
                        <a class="btn btn-sm btn-alt-secondary" href="/eliminar_classe/{{$item->id}}">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- END All Products Table -->


@endsection
