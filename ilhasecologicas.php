
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
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block">Green Life</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      
      </div><!-- End Search Bar -->
  
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
  


       

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="img/logo.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">
              
            </span>
            </a><!-- End Profile Iamge Icon -->

<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
  <li class="dropdown-header">
      </span>
    </li>
    <li>
      <hr class="dropdown-divider">
    </li>
    
    <li>
      <hr class="dropdown-divider">
    </li>





    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">
<li class="nav-item">
    <a class="nav-link" href="ilhasecologicasinicial.php">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Voltar</span>
    </a>
  </li>

  
</aside><!-- End Sidebar-->

  <main id="main" class="main">

    
  

      

    <div class="pagetitle">
      <h1>Ilhas Ecológicas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Início</a></li>
          <li class="breadcrumb-item">Ilhas Ecologicas</li>
          <li class="breadcrumb-item">Bem Vindo(a)</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   

    <section class="section">
      <div class="row">

        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Praça São Francisco</h5> 
                    <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d497.6950482167551!2d-40.35013552754232!3d-3.686988009205274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1silha%20ecologica%20pra%C3%A7a%20sao%20francisco!5e0!3m2!1sen!2sbr!4v1684350140102!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



              <!-- Line Chart -->
             

           
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#lineChart'), {
                            type: 'line',
                            data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                            
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                            }
                        });
                        });
                    </script>
              <!-- End Line CHart -->
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mercado Público</h5> 
              <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.6960639919876!2d-40.35282818053308!3d-3.6851728506446095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7eac6de2f0abaa3%3A0x3d69c71882532932!2sAssocia%C3%A7%C3%A3o%20dos%20Feirantes%20do%20Mercado%20P%C3%BAblico%20de%20Sob!5e0!3m2!1sen!2sbr!4v1684350495256!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              
              
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Centro de Convenções</h5> 
              <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d591.9671493749407!2d-40.34226631913551!3d-3.5262648475902867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scentro%20de%20conven%C3%A7oes!5e0!3m2!1sen!2sbr!4v1684350641323!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              
              
              <!-- End Pie CHart -->

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Secretaria dos Direitos Humanos e da Assistência Social (Sedhas)</h5> 
              <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.69788220494326!2d-40.340857745583946!3d-3.681921529604746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7eac7249f576069%3A0xd3dfcc271f122243!2sSecretaria%20dos%20Direitos%20Humanos%20e%20da%20Assistencia%20Social!5e0!3m2!1sen!2sbr!4v1684350682127!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <!-- Pie Chart -->
             
              
             
              <!-- End Pie CHart -->

            </div>
          </div>
        </div>

        

      </div>
    </section>
    <section class="section">
      <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vice-Prefeitura</h5> 
              <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d332.17182110213463!2d-40.34541980961559!3d-3.6863706998490713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7eac71f445685d7%3A0xf39e2fcf0108e1b2!2sVice%20Prefeitura%20de%20Sobral%20-%20Ce!5e0!3m2!1sen!2sbr!4v1684350723225!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <!-- Line Chart -->
             

              
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#lineChart'), {
                            type: 'line',
                            data: {
                            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                            
                            options: {
                            scales: {
                                y: {
                                beginAtZero: true
                                }
                            }
                            }
                        });
                        });
                    </script>
              <!-- End Line CHart -->
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Centro de Saúde da Família Dr. Thomaz Correa Aragão</h5> 
              <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.8476636195169!2d-40.333158887318596!3d-3.7091983388219534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7eac7a36bbe6b2d%3A0x6c88be8953ec278f!2sCentro%20de%20Sa%C3%BAde%20da%20Fam%C3%ADlia%20do%20Sinh%C3%A1%20Sab%C3%B3ia!5e0!3m2!1sen!2sbr!4v1684350824033!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <!-- Bar Chart -->
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      
                        borderColor: [
                          'rgb(255, 99, 132)',
                          'rgb(255, 159, 64)',
                          'rgb(255, 205, 86)',
                          'rgb(75, 192, 192)',
                          'rgb(54, 162, 235)',
                          'rgb(153, 102, 255)',
                          'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Vila Olímpica Norte</h5> 
              <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d837.0348180114868!2d-40.35376679069874!3d-3.6711749362287622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sVila%20Ol%C3%ADmpica%20Norte!5e0!3m2!1sen!2sbr!4v1684350871006!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <!-- Pie Chart -->
              
              
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Red',
                        'Blue',
                        'Yellow'
                      ],
                      
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Boulevard Arco</h5> 
              <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d304.60301017233206!2d-40.344762557711626!3d-3.6860577629609663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sarco%20sobral!5e0!3m2!1sen!2sbr!4v1684350957332!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Red',
                        'Blue',
                        'Yellow'
                      ],
                      
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

            

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