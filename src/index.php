<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Página Principal - GreenLife</title>
  <link rel="icon" href="img/logo.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Seu novo CSS de layout -->
  <link rel="stylesheet" href="styles/layout.css" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    .circle-btn {
      width: 100px;
      height: 100px;
      cursor: pointer;
      transition: transform 0.3s;
      background-color: #CCAC85;
    }

    .circle-btn img {
      max-width: 50%;
      max-height: 50%;
    }

    .circle-btn:hover {
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-[#f5f5f5] text-[#333]">

  <!-- HEADER -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="d-flex align-items-center justify-content-between w-100 px-4">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="img/logo.png" alt="Logo">
        <span class="d-none d-lg-block">Green Life</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
  </header>

  <div class="d-flex">

    <!-- SIDEBAR -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="bi bi-house-door"></i>
            <span>Início</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <img src="img/icons8-casa-com-jardim-25.png"><span>Login</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">
            <i class="bi bi-person-plus"></i>
            <span>Cadastro</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="relatoriosadm.php">
            <i class="bi bi-file-earmark-text"></i>
            <span>Relatórios</span>
          </a>
        </li>
      </ul>
    </aside>

    <!-- CONTEÚDO PRINCIPAL -->
    <main id="main" class="main p-4 w-100">
      <div class="pagetitle text-center mb-4">
        <h1 class="text-2xl font-semibold">Bem-vindo(a) ao Green Life</h1>
      </div>

      <div class="container">
        <div class="row justify-content-center g-4 text-center">
          <!-- CADA CARD -->
          <div class="col-6 col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center">
              <div onclick="window.location.href='login.php'" class="rounded-circle circle-btn d-flex justify-content-center align-items-center mb-2">
                <img src="img/empresa-publica.png" alt="Login" />
              </div>
              <p class="fw-semibold">Login</p>
            </div>
          </div>

          <div class="col-6 col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center">
              <div onclick="window.location.href='mapear_pontos/mp.php'" class="rounded-circle circle-btn d-flex justify-content-center align-items-center mb-2">
                <img src="img/iconfocosdelixo.png" alt="Mapa de Pontos" />
              </div>
              <p class="fw-semibold">Mapa de Pontos</p>
            </div>
          </div>

          <div class="col-6 col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center">
              <div onclick="window.location.href='ilhasecologicasinicial.php'" class="rounded-circle circle-btn d-flex justify-content-center align-items-center mb-2">
                <img src="img/lixeira-de-reciclagem.png" alt="Ilhas Ecológicas" />
              </div>
              <p class="fw-semibold">Ilhas Ecológicas</p>
            </div>
          </div>

          <div class="col-6 col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center">
              <div onclick="window.location.href='relatoriosadm.php'" class="rounded-circle circle-btn d-flex justify-content-center align-items-center mb-2">
                <img src="img/relatorios.png" alt="Relatórios" />
              </div>
              <p class="fw-semibold">Relatórios</p>
            </div>
          </div>

          <div class="col-6 col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center">
              <div onclick="window.location.href='vidapetinicial.php'" class="rounded-circle circle-btn d-flex justify-content-center align-items-center mb-2">
                <img src="img/cuidado-animal.png" alt="Vida Pet" />
              </div>
              <p class="fw-semibold">Vida Pet</p>
            </div>
          </div>

          <div class="col-6 col-md-4 d-flex justify-content-center">
            <div class="d-flex flex-column align-items-center">
              <div onclick="window.location.href='cadastro.php'" class="rounded-circle circle-btn d-flex justify-content-center align-items-center mb-2">
                <img src="img/cadusu.png" alt="Cadastro" />
              </div>
              <p class="fw-semibold">Cadastro</p>
            </div>
          </div>
        </div>
      </div>

      <footer class="text-center text-white py-4 mt-5" style="background-color: #705D3F;">
        &copy; <?= date('Y') ?> GreenLife. Todos os direitos reservados.
      </footer>
    </main>
  </div>
</body>
</html>
