<?php
   include'testasessao.php';
   include'banco.php';
   //recebendo id do usuário
   $id = $_GET['id'];
   //criando consulta
   $sql = "select * from tbusu where codusu='$id'";
   //realizando busca
   $busca=$conexao->query($sql);
   //convertendo resultado em array
   $linha=$busca->fetch_array(MYSQLI_ASSOC);
   
?>

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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="img/logo.png" alt="">
                  <span class="d-none d-lg-block">GreenLife</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                <?php
                            if(isset($_GET['insert'])){
                                if($_GET['insert'] == 'ok'){
                                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>Alerta!</strong> Administrador adicionado com sucesso.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>';
                                }else{
                                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>ERRO!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                 <?php
                    if (isset($_GET['delete'])){
                      if(($_GET['delete'])=='ok'){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Atenção</strong> Usuário deletado com sucesso!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      }
                    }
                    if(isset($_GET['update'])) {
                      if(($_GET['update'])=='erro'){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Atenção</strong> Erro ao deletar usuário!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      }
                    }
                ?>
                 <form name="f1" method="POST" action="alterar.php">
                <br>
                 <h3>Alterar usuário</h3>
                 
                 <div class="input-group">
                   <input value="<?php echo $linha['codusu'];?>" class="form-control"  name="id" id="id" type="hidden" placeholder="Digite o nome">
                   <div class = "input-group-append">
                   </div>
                 <label>Nome</label>
                 <div class="input-group">
                   <input value="<?php echo $linha['nome'];?>" class="form-control"  name="nome" id="nome" placeholder="Digite o nome">
                   <div class = "input-group-append">
                   </div>
                </div>
                   <label>E-mail</label>
                 <div class="input-group">
                   <input value="<?php echo $linha['email'];?>" class="form-control" name="email" id="email" placeholder="Digite o e-mail">
                   <div class = "input-group-append">
                   </div>
                </div>
                   <label>Senha</label>
                 <div class="input-group">
                   <input value="<?php echo $linha['senha'];?>" class="form-control"  name="senha" id="senha" placeholder="Digite a senha">
                  </div>
                   <label>Cargo</label>
                 <div class="input-group">
                   <input value="<?php echo $linha['cargo'];?>" class="form-control"  name="cargo" id="cargo" >
                <br>
                 
                </div>
                </div>
                <br><br>
                <button type="submit" class="btn btn-sm btn-success">Alterar</button>
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