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
        Listagem de Usuarios
          </h2>
 
          <div class="table-responsive">
            <thead>
                    <table class="table table-borderless table-striped table-vcenter">
                    <tr>
                      <th class="text-center" style="width: 100px;">ID</th>
                      <th class="d-none d-sm-table-cell text-center">Nome</th> 
                      <th class="text-center">Acções</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($canais as $item)
                    <tr>
                      <td class="d-none d-sm-table-cell text-center fs-sm">
                        <a class="fw-semibold" href="javascript:void(0)">
                          <strong> {{$item->id}} </strong>
                        </a>
                      </td>
                      <td class="d-none d-sm-table-cell text-center fs-sm"> {{$item->nome}}   </td>
                      <td class="text-center fs-sm">
                      <a class="btn btn-sm btn-alt-secondary" href="/editar_canal/{{$item->id}}" data-toggle="click-ripple">
                        <i class="fa fa-pencil-alt text-primary"></i>
                      </a>
                        <a class="btn btn-sm btn-alt-secondary" href="/eliminar_canal/{{$item->id}}">
                          <i class="fa fa-fw fa-times text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>            
@endsection