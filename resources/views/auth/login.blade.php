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
    <link rel="shortcut icon" href="{{url('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/media/favicons/apple-touch-icon-180x180.pn')}}g">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <link rel="stylesheet" id="css-main" href="{{url('assets/css/dashmix.min.css')}}">

  </head>
  <body>
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div style="background-image: url('images/imglg.webp'); background-position: right; background-size:contain; background-repeat:no-repeat;">
          <div class="row g-0" style="background-color: rgba(76, 42, 110, 0.76);">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
              <div class="p-3 w-100">
                <!-- Header -->
                <x-guest-layout>
                  <x-auth-card>
                      <x-slot name="logo">
                          <a href="/">
                          </a>
                      </x-slot>
              
                      <!-- Session Status -->
                      <x-auth-session-status class="mb-4" :status="session('status')" />
              
                      <!-- Validation Errors -->
                      <x-auth-validation-errors class="mb-4" :errors="$errors" />
              
                      <form method="POST" action="{{ route('login') }}">
                          @csrf
                  </x-auth-card>
              </x-guest-layout>
              
                <div class="text-center">
                  <img src="{{url('images/Reprogramacao-0dB.gif')}}" alt="Logotipo da Repromação Silênciosa" style="background-color: #4c2a6e; border-radius: 10px;">
                </div>
                <!-- END Header -->
                <div class="row g-0 justify-content-center">
                  <div class="col-sm-8 col-xl-6">
                    <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST">
                      <div class="py-3">
                        <div>
                          <x-label for="email"/>
                          <x-input id="email" class="form-control form-control-lg form-control-alt" type="email" placeholder="Email" name="email" required autofocus />
                        </div>
                        <div>
                          <x-label for="password" />
                          <div>              
                            <x-input id="password" class="form-control form-control-lg form-control-alt" type="password" placeholder="Senha" name="password" required autocomplete="current-password" />
                          </div>
                        </div>
                      </div>
                      <!-- Remember Me -->
                      <div class="block">
                              <label for="remember_me" class="inline-flex items-center">
                                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                  <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                              </label>
                          </div>

                      <div class="mb-4">
                        <x-button type="submit" class="btn w-100 btn-lg btn-hero" style="background-color: #4c2a6e;">
                            <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Iniciar Sessão
                        </x-button>
                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="/register">
                            <i class="fa fa-plus opacity-50 me-1"></i> Criar Nova Conta
                          </a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- END Sign In Form -->
              </div>
            </div>
            <!-- END Main Section -->

            <!-- Meta Info Section -->
            <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
              <div class="p-3">
                <p class="display-4 fw-bold text-white mb-3">
                  Bem Vindo a Reprogramação do Silêncio
                </p>
                <p class="fs-lg fw-semibold text-white-75 mb-0">
                  Técnica Revolucionária 
                </p>
              </div>
            </div>
            <!-- END Meta Info Section -->
          </div>
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
    <script src="{{url('assets/js/pages/op_auth_signin.min.js')}}"></script>
  </body>
</html>