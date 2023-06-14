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
              <h3 class="block-title">Editar consulta</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/actualizar_consulta/{{$consulta->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Descrição da Consulta</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="descricao" value="{{$consulta->descricao}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data Consulta</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_consulta" value="{{$consulta->data_consulta}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Aluno</label>
                      <select class="form-control" name="id_aluno" id="">
                        @foreach($alunos as $item_aluno)
                          <option value="{{$item_aluno->id}}">{{$item_aluno->nome}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar consulta</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->

            
@endsection