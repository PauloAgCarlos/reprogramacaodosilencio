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
 

          <!-- Info -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Editar Usuario</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/actualizar_usuario/{{$usuario->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Usuario</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="name" value="{{$usuario->name}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Email</label>
                      <input type="email" class="form-control" id="dm-ecom-product-name" required name="email" value="{{$usuario->email}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Senha</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="password" value="{{$usuario->password}}">
                    </div>
                    
                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar Usuario</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->

            
@endsection