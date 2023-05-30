<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title> Reprogramação Silenciosa</title>

  <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta name="author" content="pixelcave">
  <meta name="robots" content="noindex, nofollow">

  <!-- Open Graph Meta -->
  <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
  <meta property="og:site_name" content="Dashmix">
  <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.8/sweetalert2.min.css" integrity="sha512-y4S4cBeErz9ykN3iwUC4kmP/Ca+zd8n8FDzlVbq5Nr73gn1VBXZhpriQ7avR+8fQLpyq4izWm0b8s6q4Vedb9w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.8/sweetalert2.min.js" integrity="sha512-7x7HoEikRZhV0FAORWP+hrUzl75JW/uLHBbg2kHnPdFmScpIeHY0ieUVSacjusrKrlA/RsA2tDOBvisFmKc3xw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>




  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">

  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="/assets/media/favicons/amis.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/media/favicons/amis.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/favicons/amis.png">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <!-- END Icons -->



  <!-- Page JS Plugins CSS -->
  <link rel="stylesheet" href="/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
  <link rel="stylesheet" href="/assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="/assets/js/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
  <link rel="stylesheet" href="/assets/js/plugins/dropzone/min/dropzone.min.css">
  <link rel="stylesheet" href="/assets/js/plugins/flatpickr/flatpickr.min.css">

  <!-- Fonts and Dashmix framework -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" id="css-main" href="/assets/css/dashmix.min.css">


<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />




</head>

<body>

  @include('sweetalert::alert')


  <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">



    <nav id="sidebar" aria-label="Main Navigation">
      @include('incl.app_side_header')

    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header" >
      <!-- Header Content -->
      <div class="content-header">
        <!-- Left Section -->
        <div class="space-x-1">
          <!-- Toggle Sidebar -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
            <i class="fa fa-fw fa-bars"></i>
          </button>
          <!-- END Toggle Sidebar -->

          <!-- Open Search Section -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
            <i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Pesquisar</span>
          </button>
          <!-- END Open Search Section -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
          <!-- User Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-user d-sm-none"></i>
              <span class="d-none d-sm-inline-block"> {{$user->name}} </span>
              <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
              <!-- <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                Opções do Usuário
              </div> -->

              <div class="p-2">
                @can('pode_editar_perfil')
                <a class="dropdown-item" href="/editar_MeuPerfil/{{$user->id}}">
                  <i class="far fa-fw fa-user me-1"></i> Meu Perfil
                </a>
                @endcan
                @can('pode_visualizar_turma')
                <a class="dropdown-item" href="/turmas_do_dia">
                  <i class="far fa-fw fa-user me-1"></i> Turma do dia
                </a>
                @endcan
                <div role="separator" class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">
                  <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sair da Conta
                </a>
              </div>

            </div>
          </div>
          <!-- END User Dropdown -->

          <!-- Notifications Dropdown -->
          <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>

                <span style="color: red;">
                    @if(isset($notificacoes))
                    {{$notificacoes->count()}}
                    @endif

                </span>

            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
              <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                Notificações
              </div>
              <ul class="nav-items my-2">
                @if(isset($notificacoes))
                @foreach ($notificacoes as $item)
                <li id="{{ $item->id }}">
                    <a class="d-flex text-dark py-2" href="javascript:void(0)">
                        <div class="flex-shrink-0 mx-3">
                            <i class="fa fa-fw fa-check-circle text-success"></i>
                        </div>
                        <div class="flex-grow-1 fs-sm pe-2">
                            <div class="fw-semibold"> {{$item->descricao}} </div>
                            <div class="text-muted">{{$item->created_at}}</div>
                        </div>
                    </a>
                </li>
                @endforeach
                @endif
            </ul>
              <div class="p-2 border-top">
                <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                  <i class="fa fa-fw fa-eye opacity-50 me-1"></i> Todas as Notificações
                </a>
              </div>
            </div>
          </div>
          <!-- END Notifications Dropdown -->


        </div>
        <!-- END Right Section -->
      </div>
      <!-- END Header Content -->

      <!-- Header Search -->
      <div id="page-header-search" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
          <div class="content-header">
            <form class="w-100" action="/search_all" method="POST">
              @csrf
              <div class="input-group">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
                  <i class="fa fa-fw fa-times-circle"></i>
                </button>
                <input type="text" class="form-control border-0" placeholder="Pesquisa qualquer coisa e pressione enter..." name="valor">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- END Header Search -->



      <!-- Header Loader -->
      <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
      <div id="page-header-loader" class="overlay-header bg-header-dark">
        <div class="bg-white-10">
          <div class="content-header">
            <div class="w-100 text-center">
              <i class="fa fa-fw fa-sun fa-spin text-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- END Header Loader -->
    </header>
    <!-- END Header -->



    <div class="content">
        @if(isset($notificacoes))
        @if($notificacoes->count() > 0)
        <br>
        <center> <div class="alert alert-danger" role="alert">
                Você tem novas notificações. Confira urgentemente!
            </div> </center>
        @endif
        @endif
      @yield('conteudo')



    </div>

<!-- END Main Container -->

    @include('layouts.app_rodape')
  </div>
  <!-- END Page Container -->



  <script>
    // Adiciona um evento de clique a cada item da lista
    const lista = document.querySelectorAll('ul.nav-items li');
    lista.forEach(item => {
        item.addEventListener('click', async () => {
            const id = item.getAttribute('id');
            $.ajax({
            type: 'get',
            url: '/marcar_notificacao_como_lida/',
            data: { id: id},
            success: function(response) {
                console.log('Valor atualizado com sucesso: ', response);
                toastr.success("A notificação foi marcada como lida.");
            },
            error: function(error) {
                console.error('Erro ao atualizar o valor: ', error);
            }
            });
        });
    });
</script>

  <script src="/assets/js/dashmix.app.min.js"></script>

  <!-- jQuery (required for BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider + Password Strength Meter plugins) -->
  <script src="/assets/js/lib/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>

  <!-- Page JS Plugins -->
  <script src="/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="/assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <script src="/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="/assets/js/plugins/select2/js/select2.full.min.js"></script>
  <script src="/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
  <script src="/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
  <script src="/assets/js/plugins/dropzone/min/dropzone.min.js"></script>
  <script src="/assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
  <script src="/assets/js/plugins/flatpickr/flatpickr.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

  <!-- Toastr JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Page JS Plugins -->
<script src="/assets/js/plugins/ckeditor5-classic/build/ckeditor.js"></script>

<!-- Page JS Helpers (CKEditor 5 plugins) -->
<script>Dashmix.helpersOnLoad(['js-ckeditor5']);</script>

  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>

 

  <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Ion Range Slider + Masked Inputs + Password Strength Meter plugins) -->
  <script>
    Dashmix.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-colorpicker', 'jq-maxlength', 'jq-select2', 'jq-rangeslider', 'jq-masked-inputs', 'jq-pw-strength']);
  </script>
</body>

</html>
