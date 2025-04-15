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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block">Green Life</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    </nav><!-- End Icons Navigation -->
    <?php
                            if(isset($_GET['insert'])){
                                if($_GET['insert'] == 'ok'){
                                    echo '<script>
                                    swal({
                                      title: "Denúncia feita com sucesso!",
                                      icon: "success",
                                    });
                                    
                                    </script>';

                                }
                            }
                        ?>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

     

      <li class="nav-item">
        <a class="nav-link "  href="index.php">
       <img src="img/icons8-casa-com-jardim-25.png"></i><span>&nbspPrincipal</span>
        </a>
      </li><!-- End Components Nav -->

<!--
      <li class="nav-item">
        <a class="nav-link collapsed"  href="denuncia.php">
          <i class="bi bi-journal-text"></i><span>Denúncia</span>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          
        </ul>
      </li><!-- End Forms Nav -->

     
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
        <img src="img/icons8-relatório-gráfico-50.png">
          <span>&nbspRelatórios</span>
        </a>
      </li><!-- End Register Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="cadastro.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!--End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="loginadm.php">
        <img src="img/icons8-macho-de-configurações-de-admin-25.png">  <span>&nbspÁrea Administrativa</span>
        </a>
      </li><!-- End Login Page Nav -->
      

      

    </ul>

  </aside><!-- End Sidebar-->
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Green Life</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Início</a></li>
          <li class="breadcrumb-item active">Bem-Vindo(a)</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <script>
              function executaAcao(){
              window.location = "login.php";
              }
              function executaAcao2(){
              window.location = "mapear_pontos/mapear_pontos/mp.php";
              }
              function executaAcao3(){
              window.location = "ilhasecologicasinicial.php";
              }
              function executaAcao4(){
              window.location = "relatoriosadm.php";
              }
              function executaAcao5(){
              window.location = "vidapetinicial.php";
              }
              function executaAcao6(){
              window.location = "cadastro.php";
              }
             
        </script>
    <section class="section">
      <div class="row">
            <div 
             id="clicavel" onclick="executaAcao()" class="circulo" >
             <img src="img/empresa-publica.png"  id="iconp">
            </div>
            <div id="clicavel" onclick="executaAcao2()"  class="circulo">
            <img src="img/iconfocosdelixo.png"  id="iconp">
            </div>
            <div  id="clicavel" onclick="executaAcao3()" class="circulo">
            <img src="img/lixeira-de-reciclagem.png"  id="iconp">
            </div>
        </div>
      </div>
      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      <div class="row">
        

          
            <div  id="clicavel" onclick="executaAcao4()" class="circulo">
            <img src="img/relatorios.png"  id="iconp">
            </div>
            <div id="clicavel" onclick="executaAcao5()" class="circulo">
            <img src="img/cuidado-animal.png"  id="iconp">
            </div>
            <div  id="clicavel" onclick="executaAcao6()" class="circulo">
            <img src="img/cadusu.png"  id="iconp">
            </div>
        </div>
      </div>

    </section>
    <!-- <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mt-5">
    <div class="copyright">
      &copy; Copyright <strong><span>GreenLife</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>