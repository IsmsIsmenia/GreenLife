<?php
  include 'banco.php';
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

  
    </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

   

    <li class="nav-item">
      <a class="nav-link "  href="index.php">
      <i class="bi bi-journal-text"></i><span>&nbspPrincipal Adm</span>
      </a>
    </li><!-- End Components Nav -->

    


   

    <li class="nav-item">
      <a class="nav-link collapsed" href="buscadenuncias.php">
      <i class="bi bi-journal-text"></i>
        <span>&nbspRelatório de Denúncias</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="sair.php">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Sair</span>
      </a>
    </li><!-- End Login Page Nav -->

    

    

  </ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    
  

      

    <div class="pagetitle">
      <h1>Chart.js</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Chart.js</a></li>
          <li class="breadcrumb-item">Bem Vindo(a)</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <br>
    <br>

    <section class="section">
      <div class="row">
      <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Denuncia por Bairro</h5>


      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                              google.charts.load("current", {packages:['corechart']});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ["Bairro", "Denuncia", { role: "style" } ],
                                
                                  <?php
                                  $sql = "SELECT * FROM tbdenuncia";
                                  $busca = mysqli_query($conexao,$sql);

                                  while ($tbdenuncia = mysqli_fetch_array($busca)) {
                                      $bairro = $tbdenuncia['bairro'];
                                      $catd = $tbdenuncia['catd'];
                                

                                  ?>

                                  ["<?php echo $bairro ?>", <?php echo $catd ?>, "#228B22"],
                                

                                <?php } ?>

                                ]);

                                var view = new google.visualization.DataView(data);
                                view.setColumns([0, 1,
                                                { calc: "stringify",
                                                  sourceColumn: 1,
                                                  type: "string",
                                                  role: "annotation" },
                                                2]);

                                var options = {
                                  title: "Bairros  x  Qtd Denuncias",
                                  width:  460,
                                  height: 440,
                                  bar: {groupWidth: "80%"},
                                  legend: { position: "none" },
                                };
                                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                                chart.draw(view, options);
                            }
                            </script>
              <div id="columnchart_values" ></div>
             </div>
          </div>
      </div>
























        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pizza</h5>
                        <?php 
                              $query = "select * from tbdenuncia";
                              $result = mysqli_query($conexao, $query);
                        ?>



                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script type="text/javascript">
                                        google.charts.load('current', {'packages':['corechart']});
                                        google.charts.setOnLoadCallback(drawChart);

                                        function drawChart() {

                                            var data = google.visualization.arrayToDataTable([
                                            ['Task', 'Hours per Day'],


                                                    <?php
                                                        while($chart = mysqli_fetch_assoc($result))
                                                            {
                                                                echo "['".$chart['bairro']."',".$chart['catd']."],";
                                                            }
                                                    
                                                    ?>
                                            
                                            ]);

                                            var options = {
                                            title: 'My Daily Activities'
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                            chart.draw(data, options);
                                        }
                                        </script>
                                            <div id="piechart" style="width: 460px; height: 440px;"></div>

                          
                          <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
  <style type="text/css">
    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
  <div id="container"></div>
  <script>
    anychart.onDocumentReady(function () {
      anychart.data.loadJsonFile("php/data.php", function (data) {
        // create a chart and set loaded data
        chart = anychart.bar(data);
        chart.container("container");
        chart.draw();
      });
    });
  </script>
              
              </div>
            </div>       
        </div>




































        

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
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
  <script src="assets/js/js.js"></script>

</body>

</html>