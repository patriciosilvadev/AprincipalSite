<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Aprincipal Bebê e Mamãe</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="../plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="../css/sweetalert2.min.css">

    <link href="../css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="../css/select.dataTables.min.css" rel="stylesheet" type="text/css">
    <link href="../css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body onload="Init()">
  <script>
  function Init(){
    listaNoticias();
  }
  </script>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="../home.php">
                    <b class="logo-abbr"><h1 style="color:white">A</h1></b>
                    <span class="logo-compact"><img src="../images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                      <h2 style="color:white">APrincipal</h2>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <!-- <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div> -->
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="../images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="../app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="../page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="../page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                  <li class="nav-label">Marketing</li>
                  <li>
                      <a class="has-arrow" href="excluir_colaborador.php" aria-expanded="false">
                          <i class="icon-user menu-icon"></i> <span class="nav-text">Site</span>
                      </a>
                      <ul aria-expanded="false">
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="produtos.php">Produtos</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="has-arrow" href="excluir_colaborador.php" aria-expanded="false">
                          <i class="icon-user menu-icon"></i> <span class="nav-text">Cartões</span>
                      </a>
                      <ul aria-expanded="false">
                          <li><a href="baby+.php">baby +</a></li>
                          <li><a href="cartao_vendedores.php">Vendedores</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="has-arrow" href="excluir_colaborador.php" aria-expanded="false">
                          <i class="icon-user menu-icon"></i> <span class="nav-text">Landing Pages</span>
                      </a>
                      <ul aria-expanded="false">
                          <li><a href="baby+.php">Wifi Social</a></li>
                      </ul>
                  </li>
                    <li class="nav-label">RH</li>
                    <li>
                        <a class="has-arrow" href="excluir_colaborador.php" aria-expanded="false">
                            <i class="icon-user menu-icon"></i> <span class="nav-text">Colaboradores</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="cadastrar_colaborador.php">Cadastrar</a></li>
                            <li><a href="editar_colaborador.php">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Formulario</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="climaOrganizacional.php">Clima Organizacional</a></li>
                            <li><a href="AvaliacaoDesempenho.php">Avaliação de Desempenho</a></li>
                            <li><a href="chart-chartjs.html">Outros</a></li>
                            <li><a href="chart-chartist.html">Novo Formulario</a></li>
                            <li><a href="departamentos.php">Departamentos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i> <span class="nav-text">Gerir Vagas</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="gerir_vagas.php">Criar Vaga</a></li>
                            <li><a href="ediador.php">Ver Candidaturas</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">EAD</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i> <span class="nav-text">Material</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="laborador.php">Criar Curso</a></li>
                            <li><a href="ecodor.php">Gerir Curso</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Resultados</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="aborador.php">Geral</a></li>
                            <li><a href="chart-morris.html">Setor</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">


            <div class="container-fluid">
                <div class="row">




                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Cadastrar Noticias</div>
                                <br>
                                <div class="row">
                                  <div class="basic-form col-7">
                                      <form>
                                          <div class="form-row">
                                              <div class="form-group col-md-6">
                                                  <label>Titulo</label>
                                                  <input type="text" id="titulo" onblur="previa3()" class="form-control" placeholder="Titulo" maxlength="50">
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label>Categoria</label>
                                                  <input type="text" id="cat" class="form-control" placeholder="Categoria" maxlength="50">
                                                  <ul class="sugestoes"></ul>
                                              </div>
                                              <div class="form-group col-md-12">
                                                  <label>Resumo</label>
                                                  <input type="text" id="resumo" onblur="previa3()" class="form-control" placeholder="Resumo" maxlength="130">
                                              </div>
                                              <div class="form-group col-md-12">
                                                  <label>Texto</label>
                                                  <textarea id="texto" style="height:100px" class="form-control" placeholder="Conteudo"></textarea>
                                              </div>
                                              <div class="form-group col-md-12">
                                                  <label>Imagem (Dimensões Necessarias: 690px por 468px)</label>
                                                  <input type="file" id="imagem" onchange="previa()" class="form-control" accept="image/*">
                                              </div>
                                          </div>
                                          <div style="display:flex;justify-content:space-between">
                                            <button type="button" onclick="envia_()" class="btn btn-info col-5">Enviar Noticia</button>
                                          </div>
                                      </form>
                                  </div>
                                  <div class="basic-form col-1" display="flex" style="margin-top:20%">
                                    <i class="fa fa-arrow-circle-right" style="font-size:50px" aria-hidden="true"></i>
                                  </div>
                                  <div class="basic-form col-4">
                                    <div class="card-title" style="text-align:center;overflow: hidden;">Previa da Noticias</div>
                                    <div id="card" style="text-align:center;width:100%;background-color:#dee2e65c">
                                      <img id="img2" class="col-12" display="block" style="width:100% !important;padding-right: 0px !important;padding-left:0px !important">
                                      <h4 id="titulo2" display="block" style="text-align:center;overflow: hidden;margin-top:20px"></h4>
                                      <h6 id="resumo2" display="block" style="text-align:justify;overflow: hidden;margin-left:15px;margin-right:15px"></h6>
                                      <button type="button" class="wall btn btn-warning col-4">Ler Mais</button>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Noticias Cadastradas</div>
                                <br>
                                <div class="row">
                                    <div class="basic-form">
                                        <div id="tableNoticias">
                                          <table id="table1" style="width:100%" class="table table-striped table-bordered" >
                                            <thead>
                                              <tr>
                                                <td>Id</td>
                                                <td>Foto</td>
                                                <td>Titulo</td>
                                                <td>Data</td>
                                                <td>Resumo</td>
                                                <td>Editar</td>
                                                <td>Excluir</td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Desenvolvido Por <a href="https://www.portalctech.com.br">CTECH</a> 2020</p>
                </div>
            </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

    <!-- Modal Login -->
    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document" style="max-width:1000px !important">
        <div class="modal-content">
          <div class="modal-header text-center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="row">
            <div class="basic-form col-7" style="margin:10px !important">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Titulo</label>
                            <input type="text" id="titulo4" onblur="editRefresh()" class="form-control" placeholder="Titulo" maxlength="50">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Resumo</label>
                            <input type="text" id="resumo4"  onblur="editRefresh()" class="form-control" placeholder="Resumo" maxlength="130">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Texto</label>
                            <textarea id="texto4" style="height:100px" class="form-control" placeholder="Conteudo"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Imagem (Dimensões Necessarias: 690px por 468px)</label>
                            <input type="file" id="imagem4" onchange="IMG()" class="form-control" accept="image/*">
                        </div>
                    </div>
                    <input type="hidden" id="id4">
                </form>
            </div>
            <div class="basic-form col-4"  style="margin:10px !important">
              <div class="card-title" style="text-align:center;overflow: hidden;">Previa da Noticias</div>
              <div id="card44" style="text-align:center;width:100%;background-color:#dee2e65c">
                <img id="img24" class="col-12" display="block" style="width:100% !important;padding-right: 0px !important;padding-left:0px !important">
                <h4 id="tituloX" display="block" style="text-align:center;overflow: hidden;margin-top:20px"></h4>
                <h6 id="resumoX" display="block" style="text-align:justify;overflow: hidden;margin-left:15px;margin-right:15px"></h6>
                <button type="button" class="wall btn btn-warning col-4">Ler Mais</button>
                <br>
              </div>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-dark" style="width:10rem" onclick="EditaNot()">Editar Noticia</button>
          </div>'
        </div>
      </div>
    </div>
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
    <script src="../control/blog.js"></script>
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/sweetalert2.all.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="../js/sweetalert2.min.js"></script>

    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.buttons.min.js"></script>
    <script src="../js/buttons.flash.min.js"></script>
    <script src="../js/jszip.min.js"></script>
    <script src="../js/pdfmake.min.js"></script>
    <script src="../js/vfs_fonts.js"></script>
    <script src="../js/buttons.html5.min.js"></script>
    <script src="../js/buttons.print.min.js"></script>
    <script src="../js/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
