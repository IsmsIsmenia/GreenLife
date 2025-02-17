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
 


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v7.2.2/ol.css">
  <script src="https://cdn.jsdelivr.net/npm/ol@v7.2.2/dist/ol.js"></script>
 

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

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      

      <li class="nav-item">
        <a class="nav-link " href="components-badges.html">
        <img src="img/empresa-publica - Copia.png"></i><span>Denúncia</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed"href="denuncia2.php">
          <i class="bi bi-journal-text"></i><span>Focos de Lixo</span>
        </a>
      </li><!-- End Forms Nav -->

     

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Ilhas Ecológicas</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Relatórios</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Vida Pet</span>
        </a>
      </li><!-- End Login Page Nav -->
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
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
          <li class="breadcrumb-item"><a href="index.html">Principal</a></li>
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
                            if(isset($_GET['login'])){
                                if($_GET['login'] == 'ok'){
                                    echo '<script>
                                    swal({
                                      title: "Bem-Vindo(a)!",
                                      icon: "success",
                                    });
                                    
                                    </script>';

                                }
                            }
                ?>
                     <?php
                            if(isset($_GET['insert'])){
                                if($_GET['insert'] == 'erro'){
                                    echo '<script>
                                    swal({
                                      title: "Não foi possível realizar sua denúncia!",
                                      icon: "error",
                                    });
                                    
                                    </script>';

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
                   <input class="form-control" name="cpf" id="cpf" placeholder="Informe seu CPF" maxlength="14" Required>
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
                        <option value="Foco de Lixo">Foco de Lixo</option>
                        <option value="Abandono de Animais">Abandono de Animais</option>
                        <option value="Móvel(is) Abandonados">Móvel(is) Abandonados</option>
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
                      <input type=text class="form-control" id="descricao" name="descricao">
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
                <button type="submit" id="salvar" class="btn btn-sm btn-success"> Continuar </button>
              </form>
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
  <script src="js1/jquery.js"></script>
  <script>
     $(function(){
        
        $("#salvar").hide();
     

            //Início do controle de cpf
            $('#cpf').on('keyup',function(){
        let Caracteres = $('#cpf').val ();
        if(Caracteres.length == 3 || Caracteres.length == 7){
          $('#cpf').val(Caracteres + ".")
        } 
        if(Caracteres.length == 11){
          $('#cpf').val(Caracteres + "-")
        }
      })
      //Fim do controle de cpf
      

      $(function()
{
  //Executa a requisição quando o campo username perder o foco
  $('#cpf').blur(function()
  {
      var cpf = $('#cpf').val().replace(/[^0-9]/g, '').toString();

      if( cpf.length == 11 )
      {
          var v = [];

          //Calcula o primeiro dígito de verificação.
          v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
          v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
          v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
          v[0] = v[0] % 11;
          v[0] = v[0] % 10;

          //Calcula o segundo dígito de verificação.
          v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
          v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
          v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
          v[1] = v[1] % 11;
          v[1] = v[1] % 10;

          //Retorna Verdadeiro se os dígitos de verificação são os esperados.
          if ( (v[0] != cpf[9]) || (v[1] != cpf[10]) )
          {
            swal({
              title: "CPF inválido!",
              text: "CPF inválido digite novamente",
              icon: "error",
              button: "Fechar",
            });


              $('#cpf').val('');
              $('#cpf').focus();
          }
      }
      else
      {
       
      }
      $("#salvar").show();
  });
});
})// fim gravar
  </script>

</body>
</html>