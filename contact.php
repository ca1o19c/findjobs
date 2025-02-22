<?php
session_start();

// verifico se está logado, assim impedindo acessar direto na url
if (!isset($_SESSION['logado'])) {
  header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/topo.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/LogoBranca32.png" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand mr-auto" href="index.php"><img src="img/LogoBranca64.png"></a>
        <button class="navbar-toggler" type="button" style="border:none;" data-toggle="collapse" data-target="#navbarResponsive">
          <spam class="navbar-toggler-icon"></spam>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item dropdown">
              <a class="nav-link text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="fas fa-user-circle"></i></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="profile.php" class="dropdown-item">Perfil</a>
                <div class="dropdown-divider"></div>
                <a href="sair.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>Sair</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="classes.php">Aulas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="projects.php">Projetos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="content">
    <div class="container-fluid">
      <div class="row welcome text-center" align="center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <h1 class="mt-4">SOBRE NÓS / ALGUM PROBLEMA?</h1>
          <p class="lead">Encontre-nos ou contacte-nos para resolver o seu problema!</p>
          <hr>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="card m-3" style="width: 21rem;height: auto;">
          <img src="img/matheus.jpg" class="card-img-top" alt="">
          <div class="card-body h-100">
            <h5 class="card-title mb-1">Matheus Germano</h5>
            <h6 class="card-title mb-3">matheus.ggcosta2014@gmail.com</h6>
            <h6 class="card-subtitle text-muted mb-3">Front-End Developer</h6>
            <hr>
            <p class="card-text">Tenho 17 anos, estudante da Escola Salesiana São José, cursando o segundo módulo de Informática. Fui responsável pelo Front-End do projeto, estudando a parte de html e css para trazer um site profissional para os usuários se darem bem e com facil acesso às secões disponíveis nele.</p>
          </div>
        </div>
        <div class="card m-3" style="width: 21rem;height: auto;">
          <img src="img/caio.jpg" class="card-img-top" alt="">
          <div class="card-body h-100">
            <h5 class="card-title mb-1">Caio Cichetti</h5>
            <h6 class="card-title mb-3">caio_cichetti@outlook.com</h6>
            <h6 class="card-subtitle text-muted mb-3">Back-End Developer</h6>
            <hr>
            <p class="card-text">Tenho 18 anos, estudante da Escola Salesiana São José, cursando o segundo módulo de Informática. Fui responsável pela parte do Back-End do projeto, focado em PHP moderno com o paradigma procedural juntamente com o MySQL, trazendo uma api integrada com uma base de dados totalmente rápida e segura.</p>
          </div>
        </div>
        <div class="card m-3" style="width: 21rem;height: auto;">
          <img src="img/lucas.jpg" class="card-img-top" alt="">
          <div class="card-body h-100">
            <h5 class="card-title mb-1">Lucas Vinicius</h5>
            <h6 class="card-title mb-3">lucas.lv405@gmail.com</h6>
            <h6 class="card-subtitle text-muted mb-2">Writer and Tester</h6>
            <hr>
            <p class="card-text">Tenho 18 anos, estudante da Escola Salesiana São José, cursando o segundo módulo de Informática. Fui responsável pela parte de formatação, digitação dos textos e pela parte de desenvolvimento em JavaScript, estudando JavaScript para deixar as interações com o usuário fluídas, modernas e profissionais.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <button onclick="backToTop()" id="btnTop"><i class="fas fa-arrow-up"></i></button>

  <script type="text/JavaScript" src="js/topo.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>

</html>
