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
              <h3 class="block-title">Registar Nova Consulta</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/salvar_consulta" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Descrição da Consulta</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="descricao" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data de Consulta</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_consulta" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Cliente</label>
                      <select class="form-control" name="id_cliente" id="">
                          <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                      </select>
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar Consulta</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->


@endsection
