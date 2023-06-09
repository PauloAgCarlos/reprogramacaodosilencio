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
              <h3 class="block-title">Registar Nova Classe</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/salvar_classe" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Classe</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nome" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data Inicio</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_inicio" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nível</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nivel" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Endereço</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="endereco" value="">
                    </div>
                    
                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar Classe</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->

            
@endsection