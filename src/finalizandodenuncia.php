<?php
   include'testasessao.php';
   include'banco.php';
   //recebendo id do usuário
   $id = $_GET['id'];
   //criando consulta
   $sql = "select tbusu.codusu,tbusu.nome,tbusu.email
   from tbdenuncia
   inner join tbusu on (tbusu.codusu=tbdenuncia.codusu) where coddenuncia='$id'";
   //realizando busca
   $busca=$conexao->query($sql);
   //convertendo resultado em array
    
   $linha=$busca->fetch_array(MYSQLI_ASSOC);
   //echo $sql;
   
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GreenLife/Denúncia</title>
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
 


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.2.2/ol.css">
  <script src="https://cdn.jsdelivr.net/npm/ol@v7.2.2/dist/ol.js"></script>
 

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

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      

      <li class="nav-item">
        <a class="nav-link " href="#">
        <img src="img/empresa-publica-Copia.png" ></i><span>Denúncia</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed"href="mp.php">
          <i class="bi bi-journal-text"></i><span>Focos de Lixo</span>
        </a>
      </li><!-- End Forms Nav -->

     

      <li class="nav-item">
        <a class="nav-link collapsed" href="ilhasecologicasinicial.php">
          <i class="bi bi-envelope"></i>
          <span>Ilhas Ecológicas</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="relatoriosadm.php">
          <i class="bi bi-card-list"></i>
          <span>Relatórios</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="vidapetinicial.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Vida Pet</span>
        </a>
      </li><!-- End Login Page Nav -->
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="cadastro.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Cadastre-se</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Cadastro de Denúncia</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Principal</a></li>
          <li class="breadcrumb-item">Denúncia</li>
        </ol>
      </nav>
    </div> <!-- End Page Title -->

    <section class="content">
      <div class="container-fluid">
        <div class="card card-solid">
          <div class= "card-body">
          <div class="row">
            <div class="col-12">
              <form name="f1" method="GET" action="mapadenuncia.php">
                <?php
                    if (isset($_GET['insert'])){
                      if(($_GET['insert'])== 'ok'){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Atenção</strong> Aluno inserido com sucesso!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      }
                    }
                    if(isset($_GET['insert'])) {
                      if(($_GET['insert'])== 'erro'){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Atenção</strong> Erro ao inserir novo usuário!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>';
                      }
                    }
                ?>
                <br>
                 <h3>Preencha sua Denúncia</h3>
                 <div class="row">
                  <h5>DADOS DO DENUNCIANTE:</h5>
                  <div class="form-group">
                   <input value="<?php echo $_SESSION['codusu'];?>" class="form-control" type="hidden" name="codusu" id="codusu" placeholder="Digite o nome" Required>
                  </div>
                  <div class="form-group col-md-6">
                   <label>Nome</label>
                   <input value="<?php echo $_SESSION['nomeusu'];?>" class="form-control"  name="nome" id="nome" placeholder="Digite o nome" value="<?php if(isset($_GET['nome'])){ echo $_GET['nome']; }?>" Required>
                  </div>
                  <div class="form-group col-md-6">
                   <label>CPF</label>
                   <input class="form-control" name="cpf" id="cpf" placeholder="Informe seu CPF"Required>
                  </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                   <label>Email</label>
                 <div class="input-group">
                   <input value="<?php echo $_SESSION['emailusu'];?>" class="form-control" type="email" name="email" id="email" placeholder="Digite seu email"Required>
                   </div>
                  <div class = "input-group-append">
                </div>
                </div>
                <div class="form-group col-md-6">
                <label>Telefone</label>
                 <div class="input-group">
                   <input class="form-control"  name="telefone" id="telefone" placeholder="Informe seu Telefone"Required>
                   <div class = "input-group-append">
                   </div>
                 </div>
                 
                  </div>
                  <br>
                <div class="row">
                  <h5>DADOS DA DENÚNCIA:</h5>
                    
                    <div class="form-group col-md-6">
                        <label>Categoria da Denúncia:</label>
                        <select class="form-control" id="catd" name="catd">
                        <option value="1">Foco de Lixo</option>
                        <option value="2">Abandono de Animais</option>
                        <option value="3">Móvel(is) Abandonados</option>
                    </select>
                    </div>
                 
                  
                    <div class="form-group col-md-6">
                  <label>Rua</label>
                 <div class="input-group">
                   <input class="form-control"  name="rua" id="rua" placeholder="Informe seu endereço"Required>
                   <div class = "input-group-append">
                   </div>
                 </div>
                 </div>
                  </div>
                 <div class="row">
                 <div class="form-group col-md-6">
                 <label>Bairro</label>
                 <div class="input-group">
                   <input class="form-control"  name="bairro" id="bairro" placeholder="Informe seu Bairro"Required>
                   <div class = "input-group-append">
                   </div>
                 </div>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleFormControlTextarea1">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Informe sua cidade">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleFormControlTextarea1">CEP</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="">
                  </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label>Descrição da Denúncia</label>
                    <div class="input-group">
                      <textarea class="form-control" id="descricao" name="descricao"></textarea>
                      <div class = "input-group-append">
                      </div>
                    </div>
                  </div>
                  <div class="form-grou col-md-6">
                    <label>Insira um registro</label>
                    <input type="file" class="form-control-file" id="foto" name="foto" multiple="">
                    <small class="form-text text-muted">Carregue até 2 fotos da denúncia!</small>
                   </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-md-4">
                  <label> Data da Matricula</label>
							<input class="form-control" type="date" placeholder="Data da matrícula" name="datad" id="datad" value="<?php echo date('Y-m-d');?>">
						  </div>
              <div class="form-group col-md-4">
                        <label> Hora </label> 
							<input class="form-control" type="time" placeholder="Hora da matrícula" name="hora" id="hora">
						 </div>
                  </div>
                  </div> 
                  <br>
                <button type="submit" class="btn btn-sm btn-success"> Continuar </button>
              </form>
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
   


  </main>
  <!-- End #main -->

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

</body>
</html>