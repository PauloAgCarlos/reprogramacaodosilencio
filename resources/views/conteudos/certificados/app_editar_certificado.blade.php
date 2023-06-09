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
              <h3 class="block-title">Editar certificado</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/actualizar_certificado/{{$certificado->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Certificado</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nome_treinamento" value="{{$certificado->nome_treinamento}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data Conclusão</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_conclusao" value="{{$certificado->data_conclusao}}">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Aluno</label>
                      <select class="form-control" name="id_aluno" id="">
                        @foreach($alunos as $item_aluno)
                          <option value="{{$item_aluno->id}}">{{$item_aluno->nome}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Instrutor</label>
                      <select class="form-control" name="id_instrutor" id="">
                        @foreach($instrutores as $item_aluno)
                          <option value="{{$item_aluno->id}}">{{$item_aluno->name}}</option>   
                        @endforeach      
                      </select>               
                    </div>

                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary">Salvar Certificado</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Info -->

            
@endsection