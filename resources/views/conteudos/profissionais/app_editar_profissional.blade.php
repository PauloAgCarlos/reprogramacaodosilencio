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
              <h3 class="block-title">Editar Profissional</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/actualizar_profissional/{{$profissional->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Profissional</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nome" value="{{$profissional->nome}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data de Nascimento</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_nascimento" value="{{$profissional->data_nascimento}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Email</label>
                      <input type="email" class="form-control" id="dm-ecom-product-name" required name="email" value="{{$profissional->email}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Cep</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="cep" value="{{$profissional->cep}}">
                    </div>
                    <div class="mb-4 col-10 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Foto do profissional</label>
                      <input type="file" class="form-control" id="dm-ecom-product-name" name="foto" value="">
                    </div>
                    
                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar profissional</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->

            
@endsection