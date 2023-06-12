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
              <h3 class="block-title">Registar Novo certificado</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/salvar_certificado" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Certificado</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nome_treinamento" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Aluno</label>
                      <select name="id_aluno" class="form-control" id="">
                        @foreach($alunos as $item)
                        <option value="{{$item->id}}"> {{$item->nome}} </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Instrutor</label>
                      <select name="id_instrutor" class="form-control" id="">
                        @foreach($instrutores as $item)
                        <option value="{{$item->id}}"> {{$item->name}} </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data de Conclusão</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_conclusao" value="">
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