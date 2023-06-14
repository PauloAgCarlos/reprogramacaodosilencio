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
              <h3 class="block-title">Editar Condutor</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/actualizar_condutor/{{$condutor->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Condutor</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nome" value="{{$condutor->nome}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data Nascimento</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_nascimento" value="{{$condutor->data_nascimento}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Email</label>
                      <input type="email" class="form-control" id="dm-ecom-product-name" required name="email" value="{{$condutor->email}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">CEP</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="cep" value="{{$condutor->cep}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">RG</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="rg" value="{{$condutor->rg}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">CPF</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="cpf" value="{{$condutor->cpf}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Telefone</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="telefone" value="{{$condutor->telefone}}">
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar condutor</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->

            
@endsection