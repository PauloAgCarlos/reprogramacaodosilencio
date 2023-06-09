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
              <h3 class="block-title">Editar Aluno</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/actualizar_aluno/{{$aluno->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Aluno</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nome" value="{{$aluno->nome}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data Nascimento</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_nascimento" value="{{$aluno->data_nascimento}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">CPF</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="cpf" value="{{$aluno->cpf}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">RG</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="rg" value="{{$aluno->rg}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Email</label>
                      <input type="email" class="form-control" id="dm-ecom-product-name" required name="email" value="{{$aluno->email}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Whatsapp</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="whatsapp" value="{{$aluno->whatsapp}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Genero</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="genero" value="{{$aluno->genero}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Endereço Completo</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="endereco_completo" value="{{$aluno->endereco_completo}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data Treinamento</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="data_treinamento" value="{{$aluno->data_treinamento}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Aceita Colocar Lista Licenciado</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="aceita_colocar_lista_licenciado" value="{{$aluno->aceita_colocar_lista_licenciado}}">
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar Aluno</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->

            
@endsection