<!-- Side Header -->

<div class="bg-header-dark">
  <div class="content-header bg-white-5">
    <!-- Logo -->
    <a class="fw-semibold text-white tracking-wide" href="/index.html">
      <span class="smini-visible">
        C<span class="opacity-75">Z</span>
      </span>
      <span class="smini-hidden">
        <!-- <img style="width: 50px; height: 50px;" src="assets/media/photos/amis.png">  -->
        <img style="width: 100%; height: 100px;" src="/images/logo1.png">
        <!-- <img style="width: 90px; height: 50px;" src="/assets/media/photos/branco1.jpeg"> -->
        <br>

        <!-- AM<span class="opacity-75">IS</span> -->
      </span>
    </a>
    <!-- END Logo -->

    <!-- Options -->
    <div>
<!-- 
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">
        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
      </button> -->
      <!-- END Toggle Sidebar Style -->

      <!-- Dark Mode -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <!-- <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle" data-target="#dark-mode-toggler" data-class="far fa" onclick="Dashmix.layout('dark_mode_toggle');">
        <i class="far fa-moon" id="dark-mode-toggler"></i>
      </button> -->
      <!-- END Dark Mode -->

      <!-- Close Sidebar, Visible only on mobile screens -->
      <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
      <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
        <i class="fa fa-times-circle"></i>
      </button>
      <!-- END Close Sidebar -->
    </div>
    <!-- END Options -->
  </div>
</div>
<!-- END Side Header -->

<!-- Sidebar Scrolling -->
<div class="js-sidebar-scroll">
  <!-- Side Navigation -->
  <div class="content-side">
    <ul class="nav-main">
      <li class="nav-main-item">
        <a class="nav-main-link" href="/dashboard">
          <i class="nav-main-link-icon fa fa-location-arrow"></i>
          <span class="nav-main-link-name">Início</span>

        </a>
      </li>
      <li class="nav-main-item open">
        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
          <i class="nav-main-link-icon fa fa-clone"></i>
          <span class="nav-main-link-name">Lista de Páginas</span>
        </a>
        <ul class="nav-main-submenu">
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Clientes</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/clientes">
                  <span class="nav-main-link-name">Listar Clientes</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_cliente">
                  <span class="nav-main-link-name">Cadastrar Cliente</span>
                </a>
              </li>
            </ul>
          </li>
          {{-- só quem tem permissão para visualizar esta página --}}

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Profissionais</span>
            </a>
            <ul class="nav-main-submenu">
            {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_matricula')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/matriculas">
                  <span class="nav-main-link-name">Matrículas</span>
                </a>
              </li>
              @endcan

              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_matricula')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/transferencias">
                  <span class="nav-main-link-name">Transferências</span>
                </a>
              </li>
              @endcan
              <!-- <li class="nav-main-item">
                        <a class="nav-main-link" href="/grades">
                          <span class="nav-main-link-name">Grade</span>
                        </a>
                      </li> -->
                      {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_responsavel')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/responsaveis">
                  <span class="nav-main-link-name">Responsáveis</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_estudante')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/estudantes">
                  <span class="nav-main-link-name">Beneficiários</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_documento')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/listar_documentos">
                  <span class="nav-main-link-name">Documentos</span>
                </a>
              </li>
              @endcan
              <!-- <li class="nav-main-item">
                <a class="nav-main-link" href="/anos_lectivos">
                  <span class="nav-main-link-name">Anos Letivos</span>
                </a>
              </li> -->

            </ul>
          </li>

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Pacientes</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/pacientes">
                  <span class="nav-main-link-name">Listar Pacientes</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_paciente">
                  <span class="nav-main-link-name">Cadastrar Paciente</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Usuários</span>
            </a>
            <ul class="nav-main-submenu">
              <!-- <li class="nav-main-item">
                <a class="nav-main-link" href="/modulos">
                  <span class="nav-main-link-name">Módulo</span>
                </a>
              </li> -->
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_chamada')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/chamadas">
                  <span class="nav-main-link-name">Chamada</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_ocorrencia')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/ocorrencias">
                  <span class="nav-main-link-name">Ocorrência</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_nota')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/notas">
                  <span class="nav-main-link-name">Notas</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_boletim')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/boletins">
                  <span class="nav-main-link-name">Boletim</span>
                </a>
              </li>
              @endcan
              @can('pode_visualizar_cronograma')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/calendario">
                  <span class="nav-main-link-name">Cronograma</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_digitacao')
              <!-- <li class="nav-main-item">
                <a class="nav-main-link" href="/digitacoes">
                  <span class="nav-main-link-name">Digitação</span>
                </a>
              </li> -->
              @endcan

            </ul>
          </li>

          <!-- <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Eventos</span>
            </a>
            <ul class="nav-main-submenu">
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_cronograma')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/calendario">
                  <span class="nav-main-link-name">Cronograma</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_agendamento')
              <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                  <span class="nav-main-link-name">Agendamento</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_planeamento')
              <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                  <span class="nav-main-link-name">Planejamento</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_feriado')
              <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                  <span class="nav-main-link-name">Feriados</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_cardapio')
              <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                  <span class="nav-main-link-name">Cardápios</span>
                </a>
              </li>
              @endcan
            </ul>
          </li> -->
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Relatórios</span>
            </a>
            <ul class="nav-main-submenu">
            {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_pedagogico')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_coordenadores">
                  <span class="nav-main-link-name">Coodenadores</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_academico')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_estudantes">
                  <span class="nav-main-link-name">Beneficiários</span>
                </a>
              </li>
              @endcan
              <!-- {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_pedagogico')
              <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                  <span class="nav-main-link-name">Pedagógico</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_documento')
              <li class="nav-main-item">
                <a class="nav-main-link" href="#">
                  <span class="nav-main-link-name">Documentos</span>
                </a>
              </li>
              @endcan -->
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_funcionario')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_chamadas">
                  <span class="nav-main-link-name">Chamadas</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_funcionario')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_turmas">
                  <span class="nav-main-link-name">Turmas</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_funcionario')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_matriculas">
                  <span class="nav-main-link-name">matriculas</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
              @can('pode_visualizar_relatorio_funcionario')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_responsaveis">
                  <span class="nav-main-link-name">Responsáveis</span>
                </a>
              </li>
              @endcan
              @can('pode_visualizar_relatorio_funcionario')
              <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_funcionarios">
                  <span class="nav-main-link-name">Prestadores</span>
                </a>
              </li>
              @endcan
              {{-- só quem tem permissão para visualizar esta página --}}
                @can('pode_visualizar_relatorio_funcionario')
                <li class="nav-main-item">
                <a class="nav-main-link" href="/relatorio_turmas">
                    <span class="nav-main-link-name">Turmas</span>
                </a>
                </li>
                @endcan
                {{-- só quem tem permissão para visualizar esta página --}}
                @can('pode_visualizar_relatorio_funcionario')
                    <li class="nav-main-item">
                    <a class="nav-main-link" href="/relatorio_matriculas">
                        <span class="nav-main-link-name">matriculas</span>
                    </a>
                    </li>
                @endcan
                {{-- só quem tem permissão para visualizar esta página --}}
                @can('pode_visualizar_relatorio_funcionario')
                    <li class="nav-main-item">
                    <a class="nav-main-link" href="/relatorio_responsaveis">
                        <span class="nav-main-link-name">Responsáveis</span>
                    </a>
                    </li>
                @endcan
                @can('pode_visualizar_relatorio_funcionario')
                    <li class="nav-main-item">
                    <a class="nav-main-link" href="/relatorio_funcionarios">
                        <span class="nav-main-link-name">Prestadores</span>
                    </a>
                    </li>
                @endcan
            </ul>
          </li>
          {{-- só quem tem permissão para visualizar esta página --}}
          @can('pode_alterar_tudo')
          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Administrador</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/permissions_roles">
                  <span class="nav-main-link-name">Permissões e Regras</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/roles_users">
                  <span class="nav-main-link-name">Regras e Usuários</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/documentos_administrativo">
                  <span class="nav-main-link-name">Documentos Administrativos</span>
                </a>
              </li>

            </ul>
          </li>
          @endcan
        </ul>
      </li>


    </ul>
  </div>
  <!-- END Side Navigation -->
</div>
<!-- END Sidebar Scrolling -->