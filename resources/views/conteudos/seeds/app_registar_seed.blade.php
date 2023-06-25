<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Reprogramação do Silêncio</title>

    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick-theme.css">

    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
  </head>
  <body>


  <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick-theme.css">

    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">


      <!-- Main Container -->
      <main id="main-container">


        <!-- Page Content -->
        <div class="content">


          <!-- Dummy content -->
          <div class="block block-rounded">
            <div class="block-content">
              <p class="text-center py-8">...</p>
            </div>
          </div>
          <div class="block block-rounded">
            <div class="block-content">
              <p class="text-center py-8">...</p>
            </div>
          </div>
          <div class="block block-rounded">
            <div class="block-content">
              <p class="text-center py-8">...</p>
            </div>
          </div>
          <div class="block block-rounded">
            <div class="block-content">
              <p class="text-center py-8">...</p>
            </div>
          </div>
          <!-- END Dummy content -->

          <!-- Onboarding Modal -->
          <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content rounded overflow-hidden bg-image bg-image-bottom border-0" style="background-image: url('assets/media/photos/photo23.jpg');">
                <div class="row">
                  <div class="col-md-5">
                    <div class="p-3 text-end text-md-start">
                      <a class="fw-semibold text-white" href="/">
                        Voltar
                      </a>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="bg-body-extra-light shadow-lg">
                      <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                        <div class="p-5">
                          <i class="fa fa-award fa-3x text-muted my-4"></i>
                          <h3 class="fs-2 fw-light mb-2">Bem vindo ao assistente de envio de Seeds!</h3>
                          <p class="text-muted">
                            Preencha os campos que se seguem para poder enviar os seeds aos clientes
                          </p>
                          <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                            Seguinte <i class="fa fa-arrow-right ms-1"></i>
                          </button>
                        </div>
                        <div class="slick-slide p-5">
                          <h3 class="fs-2 fw-light mb-2">Tema Principal</h3>
                          <div class="mb-4">
                              <input type="text" class="form-control" id="onboard-first-name" name="onboard-first-name" placeholder="Digite o tema principal">
                            </div>
                          <h3 class="fs-2 fw-light mb-2">Links</h3>
                          <p class="text-muted">
                          <textarea name="" class="form-control" id="" cols="5" rows="5"></textarea>
                          </p>
                          <button type="button" class="btn btn-alt-primary mb-4" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                            Seguinte <i class="fa fa-arrow-right ms-1"></i>
                          </button>
                        </div>
                        <div class="slick-slide p-5">
                          <i class="fa fa-user-check fa-3x text-muted my-4"></i>
                          <form class="mb-3">
                            <div class="mb-4">
                              <input type="text" class="form-control" id="onboard-first-name" name="onboard-first-name" placeholder="Sips">
                            </div>
                            <div class="mb-4">
                            <textarea name="" class="form-control" id="" cols="5" rows="5" placeholder="Outras Palavras"></textarea>
                            </div>
                          </form>
                          <button type="button" class="btn btn-primary mb-4" data-bs-dismiss="modal" aria-label="Close">
                            Salvar Seed <i class="fa fa-check opacity-50 ms-1"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Onboarding Modal -->
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- END Footer -->
    </div>
    <!-- END Page Container -->


    <!--
      Dashmix JS

      Core libraries and functionality
      webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="assets/js/dashmix.app.min.js"></script>

    <!-- jQuery (required for Slick Slider plugin) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/slick-carousel/slick.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_comp_onboarding.min.js"></script>
  </body>
</html>
