<?php
   include'testasessao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Principal/GreenLife</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
    <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="img/logo.png" alt="">
    <span class="d-none d-lg-block">Green Life</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

 

  <li class="nav-item">
    <a class="nav-link "  href="index.php">
    <img src="https://img.icons8.com/doodle/25/null/large-tree.png"/><span>&nbspPrincipal</span>
    </a>
  </li><!-- End Components Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed"  href="denuncia.php">
      <i class="bi bi-journal-text"></i><span>Denúncia</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      
    </ul>
  </li><!-- End Forms Nav -->

 

  <li class="nav-item">
    <a class="nav-link collapsed" href="relatoriosadm.php">
    <img src="img/icons8-relatório-gráfico-50.png">
      <span>&nbspRelatórios</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="login.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="principaladm.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>adm</span>
    </a>
  </li><!-- End Login Page Nav -->
  

  

</ul>

</aside><!-- End Sidebar-->
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <div class="d-sm-flex justify-content-between">
               <a href="principal.php" class="btn btn-sm btn-primary"><i class="fa fa-reply"></i>&nbspVoltar</a>
               <a href="cadusu.php" class="btn btn-sm btn-success pull right"><i class="fa fa-plus"></i>&nbspNovo</a>
                
            </div>

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="card card-solid">
          <div class= "card-body">
          <div class="row">
            <div class="col-12">
            <?php 
              if(isset($_GET['delete'])) {
                if(($_GET['delete'])== 'ok'){
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Atenção</strong> Usuário excluido com sucesso!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                }
              }

              if(isset($_GET['delete'])) {
                if(($_GET['delete'])== 'erro'){
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Atenção</strong> Erro usuário não excluido!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>';
                }
              }
            ?>
            <?php
                    if (isset($_GET['update'])){
                      if(($_GET['update'])=='ok'){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Atenção</strong> Usuário alterado com sucesso!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      }
                    }
                    if(isset($_GET['update'])) {
                      if(($_GET['update'])=='erro'){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Atenção</strong> Erro ao alterar usuário!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      }
                    }
                ?>
              <form action="buscausu.php" method="POST">
                 <label>Busca de usuários</label>
                 <div class="input-group">
                   <input class="form-control" type="text" name="texto" id="texto">
                   <div class = "input-group-append">
                   <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Buscar </button>
                </div>
                </div>
              </form>
              <hr>
              <table class="table table-bordered">
              
                  <p> <i class="nav-icon fa fa-table"></i> &nbspDados do Usuário  <a href="relat.php" target="_blank" title="Imprimir" class="btn btn-sm btn-primary"> <i class="feather icon-printer"></i></a></p> 
                 <tr>
                  <th>Código</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Opções</th>
                </tr>

                
                <?php
                if (isset($_POST['texto'])){
                  include 'banco.php';
                  
              //echo 'conexão ok!'
              //recebendo variáveis por post
            
              $texto = $_POST ['texto'];


              //criando uma consulta
              $sql = "select * from tbusu where nome like '%$texto%' ";
              $consulta = $conexao->query($sql);

           if($consulta){
              if ($consulta->num_rows > 0){
              while(  $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                    echo' <tr>
                    <td>'.$linha['codusu'].'</td>
                    <td>'.$linha['nome'].'</td>
                    <td>'.$linha['email'].'</td>
                    <td>
                        <a href="altusu.php?id='.$linha['codusu'].'" title="Alterar" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i></a>
                        <a href="deleteusu.php?id='.$linha['codusu'].'" title="Deletar" class="btn btn-sm btn-danger" > <i class="fa fa-trash"></i></a>
                    </td>
                  </tr>';
              }
              }else{
                 
              }
           }
       }
        
            ?>
              </table>
              
          </div> 
       </div>
       </div>
        </div>
        </div>
        <?php 
        if(isset($_GET['login'])) {
          if(($_GET['login'])== 'ok'){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                 <strong>Olá</strong> Seja bem-vindo(a) ao sistema!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
        }
        ?>
      </div>
    </section>  
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        
            </div>
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
