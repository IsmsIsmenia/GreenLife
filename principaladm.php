<?php
   include'testasessao.php';
   include'banco.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PrincipalAdm/GreenLife</title>
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
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
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
      <h1>Green Life</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Principal Adm</a></li>
          <li class="breadcrumb-item active">Bem-Vindo(a)</li>
        </ol>
      </nav>

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
               <a href="loginadm.php" class="btn btn-sm btn-warning"><i class="fa fa-reply"></i>&nbspVoltar</a>
               <a href="cadadm.php" class="btn btn-sm btn-success pull right"><i class="fa fa-plus"></i>&nbspNovo</a>
                
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
                            if(isset($_GET['login'])){
                                if($_GET['login'] == 'ok'){
                                    echo '<script>
                                    swal({
                                      title: "Bem-Vindo(a) a Área Administrativa!",
                                      icon: "success",
                                    });
                                    
                                    </script>';

                                }
                            }
                ?>
            <?php
                            if(isset($_GET['insert'])){
                                if($_GET['insert'] == 'ok'){
                                    echo '<script>
                                    swal({
                                      title: "ADMIN CADASTRADO COM SUCESSO",
                                      icon: "success",
                                    });
                                    
                                    </script>';

                                }else{
                                  echo '<script>
                                  swal({
                                    title: " ERRO AO CADASTRAR ADMIN",
                                    icon: "error",
                                  });
                                  
                                  </script>';
                                }
                            }
                        ?>
                        <?php
                            if(isset($_GET['update'])){
                                if($_GET['update'] == 'ok'){
                                    echo '<script>
                                    swal({
                                      title: "Usuário alterado com sucesso!",
                                      icon: "success",
                                    });
                                    
                                    </script>';

                                }
                            }
                        ?>
                        <?php
                            if(isset($_GET['delete'])){
                                if($_GET['delete'] == 'ok'){
                                    echo '<script>
                                    swal({
                                      title: "Usuário deletado com sucesso!",
                                      icon: "success",
                                    });
                                    
                                    </script>';

                                }
                            }
                        ?>
              <form action="principaladm.php" method="POST">
                <br>
                 <label>Busca de usuários</label>
                 <div class="input-group">
                   <input class="form-control" type="text" name="texto" id="texto">
                   <div class = "input-group-append">
                   <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Buscar </button>
                </div>
                </div>
              </form>
              <hr>
              <table class="table table-bordered" id="tabelausu">
              
                  <p> <i class="nav-icon fa fa-table"></i> &nbspDados do Usuário  <a href="relat.php" target="_blank" title="Imprimir" class="btn btn-sm btn-primary"> <img src="img/icons8-impressora-16.png"></a></p> 
                 <tr>
                  <th>Código</th>
                  <th>Nome</th>
                  <th>E-mail</th>
                  <th>Cargo</th>
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
                    <td>'.$linha['cargo'].'</td>
                    <td>
                    <a href="alterausu.php?id='.$linha['codusu'].'" title="Alterar" class="btn btn-sm btn-primary"><img src="img/icons8-editar-16.png"></a>
                    <button id="'.$linha['codusu'].'" value="deletar"title="Deletar" class="btn btn-sm btn-danger" > <img src="img/icons8-remover-usuário-masculino-16.png"></button>
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
    </div><!-- End Page Title -->
        

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
    <br>
    <br>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
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
  <script src="js1/jquery3.js"></script>
  <script src="js1/jquery.js"></script>
  <script>
   
     $('#tabelausu').on('click','button',function(){
      
          let valor = $(this).val();
          if (valor == 'deletar'){
            swal({
            title: "Deletar Usuário?",
            text: "A ação não pode ser desfeita!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
     .then((willDelete) => {
      if (willDelete) {
        let id=$(this).attr('id');
          $.post('deleteusu.php',{id:id},function(retorno1){
            if(retorno1 != 'erro'){
                swal("Usuário deletado!", {
          icon: "success",
            });
      }})
      }else {
        swal("Ação cancelada!");
      }
          });
        }
     })
  </script>



</body>

</html>