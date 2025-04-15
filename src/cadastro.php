<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cadastro/GreenLife</title>
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
 

  <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="img/logo.png" alt="">
                  <span class="d-none d-lg-block">GreenLife</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                <?php
                            if(isset($_GET['insert'])){
                                if($_GET['insert'] == 'ok'){
                                    echo '<script>
                                    swal({
                                      title: "Usuário cadastrado com sucesso",
                                      icon: "success",
                                    });
                                    
                                    </script>';

                                }else{
                                  echo '<script>
                                  swal({
                                    title: " Erro ao cadastrar adm",
                                    icon: "error",
                                  });
                                  
                                  </script>';
                                }
                            }
                        ?>
                <form  id= "form"name="f1" method="POST" action="salvacad.php">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Crie uma conta</h5>
                    <p class="text-center small">Insira seus dados pessoais para criar uma conta</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Seu Nome</label>
                      <input type="text" name="nome" class="form-control" id="nome" required>
                      <div class="invalid-feedback">Por favor, insira seu nome</div>
                    </div>
                    <script type="text/javascript">
                  function validation(){
                    var form = document.getElementById("form");
                    var email = document.getElementById("email").value;
                    var text = document.getElementById("form");
                    var pattern= /^[^]+@[^]+\.[a-z]{2,3}$/;

                    if (email.match(pattern)){
                      form.classList.remove("valid");
                      form.classList.remove("invalid");
                      text.innerHTML ="Seu email é inválido.";
                      text.style.color="#00ff00";
                    }else{
                      form.classList.remove("valid")
                      form.classList.add("invalid");
                      text.innerHTML ="Insira um email válido!";
                      text.style.color="#ff0000";
                    }
                  }
                  </script>
                        
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="email" onkeydown="function validation()"required>
                        <div class="invalid-feedback">Por favor, insira seu email</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Senha</label>
                      <input type="password" name="senha" class="form-control" id="senha" required>
                      <div class="invalid-feedback">Crie uma senha</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Eu aceito os termos e condições do site</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Criar Conta!</button>
                    </div>
                  </form>
                    <div class="col-12">
                      <p class="small mb-0">Já tem uma conta? <a href="login.php">Login</a></p>
                    </div>
                          </form>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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