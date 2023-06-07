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
        Listagem de Turmas
          </h2>
 
              <!-- All Products Table -->
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Nome</th>                      
                      <th class="d-none d-sm-table-cell text-center">Email</th>
                      <th class="d-none d-sm-table-cell text-center">CEP</th>
                      <th class="d-none d-sm-table-cell text-center">Data Inicio</th>
                      <th class="d-none d-sm-table-cell text-center">Tipo</th>
                      <th class="text-center">Acções</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($turmas as $item)
                    <tr>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">
                          <strong> {{$item->id}} </strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_cliente/{{$item->id}}"> {{$item->nome}} </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_cliente/{{$item->id}}"> {{$item->email}} </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_cliente/{{$item->id}}"> {{$item->cep}} </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_cliente/{{$item->id}}"> {{$item->data_inicio}} </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="/visualizar_cliente/{{$item->id}}"> {{$item->tipo}} </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <strong>{{$item->data_nascimento}}</strong>
                      </td>
                      <td class="text-center fs-sm">
                        <a class="btn btn-sm btn-alt-secondary" href="/visualizar_cliente/{{$item->id}}">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-alt-secondary" href="/eliminar_cliente/{{$item->id}}">
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