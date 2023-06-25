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
                      <select class="form-control" name="nome" id="">
                          <option value="Condutor">Condutor do Silêncio</option>
                          <option value="Reprogramador">Reprogramador do Silêncio</option>
                          <option value="Arquiteto">Arquiteto do Silêncio</option>
                      </select>
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Data</label>
                      <input type="date" class="form-control" id="dm-ecom-product-name" required name="data_inicio" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Nível</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="nivel" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block form-group online">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="check_marcar_consulta" onchange="toggleCampos(this)">
                        <label class="form-check-label" for="gridCheck">
                        Classe Online
                        </label>
                    </div>
                    </div>

                    <div class="mb-4 col-5 inline-block cep">
                    <label class="form-label" for="dm-ecom-product-name">CEP</label>
                    <input type="text" class="form-control" id="dm-ecom-product-name" name="cep" value="">
                    </div>

                    <div class="mb-4 col-5 inline-block numero">
                    <label class="form-label" for="dm-ecom-product-name">Número</label>
                    <input type="text" class="form-control" id="dm-ecom-product-name" name="numero" value="">
                    </div>

                    <div class="mb-4 col-5 inline-block complemento">
                    <label class="form-label" for="dm-ecom-product-name">Complemento</label>
                    <input type="text" class="form-control" id="dm-ecom-product-name" name="complemento" value="">
                    </div>



                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Whatsapp</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="whatsapp" value="">
                    </div>
                    <div class="mb-4 col-5 inline-block">
                      <label class="form-label" for="dm-ecom-product-name">Site</label>
                      <input type="text" class="form-control" id="dm-ecom-product-name" required name="site" value="">
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


          <script>
            function toggleCampos(checkbox) {
                var complementoDiv = document.querySelector('.complemento');
                var numeroDiv = document.querySelector('.numero');

                if (!checkbox.checked) {
                complementoDiv.style.display = 'inline-block';
                numeroDiv.style.display = 'inline-block';
                } else {
                complementoDiv.style.display = 'none';
                numeroDiv.style.display = 'none';
                }
            }
            </script>

@endsection
