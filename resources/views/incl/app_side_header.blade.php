<!-- Side Header -->

<div class="bg-header-dark">
  <div class="content-header bg-white-5">
    <!-- Logo -->
    <a class="fw-semibold text-white tracking-wide" href="/index.html">
      <span class="smini-visible">
        C<span class="opacity-75">Z</span>
      </span>
      <span class="smini-hidden">
        <img style="width: 100%; height: 100px;" src="/images/logo1.png">
        <br>

      </span>
    </a>
    <!-- END Logo -->

    <!-- Options -->
    <div>

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
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Classes</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/classes">
                  <span class="nav-main-link-name">Listar Classes</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_classe">
                  <span class="nav-main-link-name">Cadastrar Classes</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Alunos</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/alunos">
                  <span class="nav-main-link-name">Listar Alunos</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_aluno">
                  <span class="nav-main-link-name">Cadastrar Alunos</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Turmas</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/turmas">
                  <span class="nav-main-link-name">Listar Turmas</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_turma">
                  <span class="nav-main-link-name">Cadastrar Turmas</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Usuários</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/usuarios">
                  <span class="nav-main-link-name">Listar Usuários</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_usuario">
                  <span class="nav-main-link-name">Cadastrar Usuários</span>
                </a>
              </li>
            </ul>
            <ul class="nav-main-submenu">
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
              @endcan

            </ul>
          </li>

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Canais</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/canais">
                  <span class="nav-main-link-name">Listar Canais</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/canais_pendentes">
                  <span class="nav-main-link-name">Listar Canais Pendentes</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_canal">
                  <span class="nav-main-link-name">Cadastrar Canais</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>





          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Certificados</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/certificados">
                  <span class="nav-main-link-name">Listar Certificados</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_certificado">
                  <span class="nav-main-link-name">Cadastrar Certificados</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>

          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Arquitetos</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/arquitetos">
                  <span class="nav-main-link-name">Listar Arquitetos</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_arquiteto">
                  <span class="nav-main-link-name">Cadastrar Arquitetos</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>


          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Condutores</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/condutores">
                  <span class="nav-main-link-name">Listar Condutores</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_condutor">
                  <span class="nav-main-link-name">Cadastrar Condutores</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>


          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Reprogramadores</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/reprogramadores">
                  <span class="nav-main-link-name">Listar Reprogramadores</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_reprogramador">
                  <span class="nav-main-link-name">Cadastrar Reprogramadores</span>
                </a>
              </li>
            </ul>
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

            </ul>
          </li>


          <li class="nav-main-item">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
              <i class="nav-main-link-icon fa fa-paste"></i> <span class="nav-main-link-name">Seeds</span>
            </a>
            <ul class="nav-main-submenu">
              <li class="nav-main-item">
                <a class="nav-main-link" href="/seeds">
                  <span class="nav-main-link-name">Listar seeds</span>
                </a>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link" href="/registar_seed">
                  <span class="nav-main-link-name">Cadastrar Seeds</span>
                </a>
              </li>
            </ul>
          </li>


          <!-- <li class="nav-main-item">
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
      </li> -->


    </ul>
  </div>
  <!-- END Side Navigation -->
</div>
<!-- END Sidebar Scrolling -->
