<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location=logged.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Swami Services">
  <meta name="author" content="CTO - Rui Farinha">


  <link rel="shortcut icon" href="img/favicon.ICO" type="image/x-icon">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <title>
    Swami - Choose When and Where</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.css">

  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/icon.png" class="img-fluid" alt="" style="letter-spacing: 2px;">   <b>Swami</b> - Choose When and Where</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#features">Especificidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#download">Download</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="login_page.php">Login</a>
        </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registo.php">Registar</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-lg-7 my-auto">
        <div class="header-content mx-auto">
          <h1 class="mb-5" text-align="justify">A era das encomendas rápidas e eficazes chegou com a Swami!</h1>
          <a href="registo.php" class="btn btn-outline btn-xl js-scroll-trigger center">Começe Agora</a>
        </div>
      </div>
      <div class="col-lg-5 my-auto">
        <div class="device-container">
          <div class="device-mockup nexus_6 portrait">
            <div class="device">
              <div class="screen">
                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                <img src="img/gmaps_snake_2.png" class="img-fluid" alt="">
              </div>
              <div class="button">
                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="features" id="features">
  <div class="container">
    <div class="section-heading text-center">
      <h2>Funcionalidades</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-4 my-auto">
        <div class="device-container">
          <div class="device-mockup nexus_6 portrait">
            <div class="device">
              <div class="screen">
                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                <img src="img/gmaps_snake_2.png" class="img-fluid" alt="">
              </div>
              <div class="button">
                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 my-auto">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-clock text-primary"></i>
                <h3>24/7</h3>
                <p class="text-muted">Entregas ao domicilio 24 horas por dia, 365 dias por ano!</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-present text-primary"></i>
                <h3>Entrega Personalizável</h3>
                <p class="text-muted">Escolha onde e quando quer receber a sua encomenda!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="fas fa-map-marked-alt text-primary"></i>
                <h3>Live Tracking</h3>
                <p class="text-muted">Acompanhe a sua encomenda em tempo real!</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="feature-item">
                <i class="icon-phone  text-primary"></i>
                <h3>Comunicação com o motorista</h3>
                <p class="text-muted">Comunique com o responsável pela sua encomenda quando quiser!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Download -->
<section class="download bg-primary text-center" id="download">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2 class="section-heading">Descobra o que traz de novo a Swami</h2>
        <p>A app já está disponível para instalar!</p>
        <div class="badges">
          <a class="badge-link" href="https://play.google.com"><img src="img/google-play-badge.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About us-->
<section class="about bg-light text-center" id="about">
  <h2 style="color:#b22222"><b>Sobre</b></h2>
    <p></p>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h3 style="color:#b22222"><b>Visão</b></h3>
        <h5>«Atingir até 2023 um volume de <br>300 mil entregas anuais nas áreas metropolitanas
            do Porto e Lisboa mudando assim o paradigma das entregas tradicionais.»</h5>
      </div>
      <div class="col-sm-4">
        <h3 style="color:#b22222"><b>Missão</b></h3>
        <h5 align="justify">«Tornar as entregas adequadas à vida agitada do quotidiano
            onde quem decide são os e-buyers e são as entregas que se
            adaptam a cada um oferecendo um serviço personalizado e funcional 24h/dia todos os dias.
            Perseguindo sempre novos meios e métodos de inovar e simplificar as entregas.»</h5>
      </div>
      <div class="col-sm-4">
        <h3 style="color:#b22222"><b>Valores</b></h3>
          <p text-align="center">»»  Fiabilidade  ««</p>
          <p text-align="center">»» Diversidade  ««</p>
          <p text-align="center">»»  Flexibilidade  ««</p>
      </div>
    </div>
  </div>

</section>

<section class="contact bg-primary id="contact">
<div class="container">
    <h2><b>Contacte-nos</b></h2>
  <ul class="list-inline list-social">
    <li class="list-inline-item social-twitter">
      <a href="https://www.twitter.com">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <li class="list-inline-item social-facebook">
      <a href="https://www.facebook.com">
        <i class="fab fa-facebook-f"></i>
      </a>
    </li>
    <li class="list-inline-item social-email">
      <a href="https://gmail.com">
        <i class="fas fa-inbox"></i>
      </a>
    </li>
  </ul>
</div>
</section>

<footer>
  <div class="container">
    <p>&copy; Swami 2019. All Rights Reserved.</p>
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="#">Política de Privacidade</a>
      </li>
      <li class="list-inline-item">
        <a href="#">Termos</a>
      </li>
      <li class="list-inline-item">
        <a href="faqs.php">FAQs</a>
      </li>
    </ul>
  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/new-age.js"></script>

</body>

</html>