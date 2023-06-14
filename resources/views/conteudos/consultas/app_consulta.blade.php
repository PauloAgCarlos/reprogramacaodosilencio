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
        Consultas
          </h2>
 
              <!-- All Products Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Descrição</th>
                      <th class="d-none d-sm-table-cell text-center">Data Consulta</th>
                      <th class="text-center">Acções</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($consultas as $item)
                    <tr>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">
                          <strong> {{$item->id}} </strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_cliente/{{$item->id}}"> {{$item->descricao}} </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_cliente/{{$item->id}}"> 
                          <strong>{{$item->data_consulta}}</strong>
                        </a>
                      </td>
                      <td class="text-center fs-sm">
                      <a class="btn btn-sm btn-alt-secondary" href="/visualizar_consulta/{{$item->id}}" data-toggle="click-ripple">
                        <i class="fa fa-eye text-primary"></i>
                      </a>
                        <a class="btn btn-sm btn-alt-secondary" href="/eliminar_consulta/{{$item->id}}">
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