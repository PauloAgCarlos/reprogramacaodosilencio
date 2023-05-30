<!-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            </a>
        </x-slot>

        Session Status
        <x-auth-session-status class="mb-4" :status="session('status')" />

        Validation Errors
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            Email Address
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> -->









<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

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

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{url('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{url('assets/css/dashmix.min.css')}}">
  </head>
  <body>
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo17@2x.jpg');">
          <div class="row g-0 bg-gd-fruit-op">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
              <div class="p-3 w-100">
                <!-- Header -->
                <div class="text-center">
                  <a class="link-fx fw-bold fs-1" href="index.html">
                    <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                  </a>
                  <p class="text-uppercase fw-bold fs-sm text-muted">Password Reminder</p>
                </div>
                <div class="row g-0 justify-content-center">
                  <div class="col-sm-8 col-xl-6">
                    <!-- <form class="js-validation-reminder" action="be_pages_auth_all.html" method="POST"> -->
                    <form method="POST" action="{{ route('password.email') }}" class="js-validation-reminder">
                        @csrf
                      <!-- <div class="py-3 mb-4">
                        <input type="text" class="form-control form-control-lg form-control-alt" id="reminder-credential" name="reminder-credential" placeholder="Username or Email">
                      </div> -->
                      <div>
                        <x-label for="email" />
                        <x-input id="email" class="form-control form-control-lg form-control-alt" id="reminder-credential" type="email" name="email" :value="old('email')" required autofocus placeholder="Username or Email" />
                    </div>
                      <div class="text-center mb-4">
                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                          <i class="fa fa-fw fa-reply opacity-50 me-1"></i> Password Reminder
                        </button>
                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_signin.html">
                            <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Sign In
                          </a>
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="op_auth_signup.html">
                            <i class="fa fa-plus opacity-50 me-1"></i> New Account
                          </a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- END Reminder Form -->
              </div>
            </div>
            <!-- END Main Section -->

            <!-- Meta Info Section -->
            <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
              <div class="p-3">
                <p class="display-4 fw-bold text-white mb-0">
                  Be ready to fail..
                </p>
                <p class="fs-1 fw-semibold text-white-75 mb-0">
                  ..to be able to succeed!
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
    <!-- END Page Container -->

    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at {{url('assets/_js/main/app.js')}}
    -->
    <script src="{{url('assets/js/dashmix.app.min.js')}}"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="{{url('assets/js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{url('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{url('assets/js/pages/op_auth_reminder.min.js')}}"></script>
  </body>
</html>
