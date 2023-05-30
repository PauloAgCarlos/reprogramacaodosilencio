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
    <link rel="shortcut icon" href="{{url('assets/media/favicons/favicon')}}'">
    <link rel="icon" type="image/png" sizes="192x192" href="{{url('assets/media/favicons/favicon-192x192')}}'">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/media/favicons/apple-touch-icon-180x180')}}'">
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
        <div class="bg-image" style="background-image: url('assets/media/photos/photo12@2x.jpg');">
          <div class="row g-0 justify-content-center bg-black-75">
            <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
              <div class="p-3 w-100">
                <!-- Header -->
                <div class="mb-3 text-center">
                  <a class="link-fx fw-bold fs-1" href="index.html">
                    <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                  </a>
                  <p class="text-uppercase fw-bold fs-sm text-muted">Create New Account</p>
                </div>
                <!-- END Header -->

                <div class="row g-0 justify-content-center">
                  <div class="col-sm-8 col-xl-6">
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                      <div class="py-3">
                        <div>
                            <x-label for="name" />
                            <x-input type="text" name="name" :value="old('name')" required autofocus  class="form-control form-control-lg form-control-alt" id="signup-username"  placeholder="Name"/>
                        </div>
                        <div>
                            <x-label for="email"/>
                            <x-input class="form-control form-control-lg form-control-alt" id="signup-email" name="email" placeholder="Email" type="email" :value="old('email')" required />
                        </div>
                        <div>
                            <x-label for="password" />
                            <x-input id="password" class="form-control form-control-lg form-control-alt" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                        </div>
                        <div>
                            <x-label for="password_confirmation" />
                            <x-input id="password_confirmation" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" type="password" placeholder="Password Confirm" name="password_confirmation" required />
                        </div>
                        <div class="mb-4">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="signup-terms" name="signup-terms">
                            <label class="form-check-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                          </div>
                        </div>
                      </div>
                      <div class="mb-4">
                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                          <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Sign Up
                        </button>
                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="/login">
                            <i class="fa fa-sign-in-alt opacity-50 me-1"></i> Sign In
                          </a>
                          <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="#" data-bs-toggle="modal" data-bs-target="#modal-terms">
                            <i class="fa fa-book opacity-50 me-1"></i> Read Terms
                          </a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- END Sign Up Form -->
              </div>
            </div>
            <!-- END Main Section -->
          </div>

          <!-- Terms Modal -->
          <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                  <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Terms &amp; Conditions</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="block-content">
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
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

    <script src="{{url('assets/js/lib/jquery.min.js')}}"></script>

    <script src="{{url('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <script src="{{url('assets/js/pages/op_auth_signup.min.js')}}"></script>
  </body>
</html>
