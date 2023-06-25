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
              <h3 class="block-title">Registar Novo Aluno</h3>
            </div>
            <div class="block-content">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                  <form action="/salvar_aluno" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nome do Aluno</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nome" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data de Nascimento</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_nascimento" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">CPF</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="cpf" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">RG</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="rg" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Email</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="email" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Whatsapp</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="whatsapp" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Genero</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="genero" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Endereço Completo</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="endereco_completo" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data Treinamento</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_treinamento" value="">
                    </div>

                    <div class="mb-4 col-5 inline-block">
                    <label class="form-label">Divulgar Contato?</label>
                    <div class="space-x-2">
                        <div class="form-check form-switch form-check-inline">
                        <input class="form-check-input" type="checkbox" value="1" id="aceita_colocar_lista_licenciado" name="aceita_colocar_lista_licenciado" checked onchange="atualizarLabel(this)">
                        <label class="form-check-label" for="aceita_colocar_lista_licenciado">Sim</label>
                        </div>
                    </div>
                    </div>


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

        <script>
            function atualizarLabel(checkbox) {
                var label = checkbox.nextElementSibling;
                label.textContent = checkbox.checked ? 'Sim' : 'Não';
            }
        </script>

@endsection
