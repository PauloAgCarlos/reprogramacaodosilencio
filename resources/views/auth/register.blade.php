<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Reprogramação Silênciosa</title>

    <meta name="description" content="Reprogramação Silênciosa created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Reprogramação Silênciosa">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Reprogramação Silênciosa created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{url('assets/media/favicons/favicon')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <link rel="stylesheet" id="css-main" href="{{url('assets/css/dashmix.min.css')}}">

  </head>
  <body>
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div style="background-image: url('images/so-usamos-10-do-nosso-cerebro-2-1024x768.jpeg'); background-position: center; background-size:cover; background-repeat:no-repeat;">
          <div class="row g-0 justify-content-center bg-black-25">
            <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
              <!-- Sign Up Block -->
              <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-3 bg-body-extra-light">
                  <!-- Header -->
                  
                  <div class="text-center">
                    <img src="{{url('images/Reprogramacao-0dB.gif')}}" alt="Logotipo da Repromação Silênciosa" style="background-color: #4c2a6e; border-radius: 10px;">                  
                    <p class="text-uppercase fw-bold fs-sm text-muted">Criar Nova Conta</p>
                  </div>
                  <form method="POST" action="{{ route('register') }}" >
                        @csrf
                      <div class="py-3">
                        <div>
                            <x-label for="name" />
                            <x-input type="text" name="name" :value="old('name')" required autofocus  class="form-control form-control-lg form-control-alt" id="signup-username"  placeholder="Nome"/>
                        </div>
                        <div>
                            <x-label for="email"/>
                            <x-input class="form-control form-control-lg form-control-alt" id="signup-email" name="email" placeholder="Email" type="email" :value="old('email')" required />
                        </div>
                        <div>
                            <x-label for="password" />
                            <x-input id="password" class="form-control form-control-lg form-control-alt" type="password" name="password" required autocomplete="new-password" placeholder="Senha" />
                        </div>
                        <div>
                            <x-label for="password_confirmation" />
                            <x-input id="password_confirmation" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" type="password" placeholder="Confirmar Senha" name="password_confirmation" required />
                        </div>
                        <div class="mb-4">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="signup-terms" name="signup-terms">
                            <label class="form-check-label" for="signup-terms">Eu concordo com os Termos e &amp; Condições</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn w-100 btn-lg btn-hero" style="background-color: #4c2a6e; color: #fff;"> 
                          <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Inscrever-se
                        </button>
                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="/login">
                            <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Entrar
                          </a>
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">
                            <i class="fa fa-book opacity-50 me-1"></i> Ler Termos
                          </a>
                        </p>
                      </div>
                    </form>
                  <!-- END Sign Up Form -->
                </div>
              </div>
            </div>
          </div>

          <!-- Terms Modal -->
          <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                  <div class="block-header bg-success">
                    <h3 class="block-title">Termos de &amp; Condições</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content">
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                    <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
                  </div>
                  <div class="block-content block-content-full text-end bg-body">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Done</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Terms Modal -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <script src="{{url('assets/js/dashmix.app.min.js')}}"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="{{url('assets/js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{url('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{url('assets/js/pages/op_auth_signup.min.js')}}"></script>
  </body>
</html>
