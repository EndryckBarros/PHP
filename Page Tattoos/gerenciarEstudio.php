<?php

  //Restringe o acesso sem etar logado
  session_start();
  if (!isset($_SESSION['log'])) {
      header("Location: logarEstudio.php");
  }
?>

<!DOCTYPE html>

<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--estilo-->
    <style>
      @media only screen and (min-width: 601px){
        .row .col.m6 {
          width: 40%;
          margin-left: 10%;
          left: auto;
          right: auto;
      }
    </style>

  </head>
  <body>

    <nav class="grey darken-3">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">
          <img class="responsive-img" style="max-width: 64px" src="../materialize/img/logo.png"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">
           menu </i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html">Home</a></li>
          <li><a href="">Fale Conosco</a></li>
          <li><a href="sair.php">Sair</a></li>
        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
    <li><a href="index.html">Home</a></li>
    <li><a href="">Fale Conosco</a></li>
    <li><a href="sair.php">Sair</a></li>
    </ul>

    <div class="parallax-container">
      <div class="parallax"><img src="../materialize/img/back2.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h2 class="header">Gerenciar Estudio</h2>
        <p class="grey-text text-darken-3 lighten-3">Aumente o alcance da exposição de suas artes e aumente seus clientes, melhore o gerenciamento do seu estúdio agora mesmo!</p>

        <div class="row">

    <div class="card small card col s12 m6 l6">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../materialize/img/estudio.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Cadastro<i class="material-icons right">more_vert</i></span>
      <p><a href="cadastroArtista.html">Clique para Cadastrar Artistas</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Cadastre seus Artistas!!!<i class="material-icons right">close</i></span>
      <p>Escreva aqui uma maldita msg</p>
      <p><h5>Escreva aqui outra maldita msg</h5></p>
    </div>
    </div>

    <div class="card small card col s12 m6 l6">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="../materialize/img/solo.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Gerenciar Portifólio<i class="material-icons right">more_vert</i></span>
      <p><a href="">Clique para Gerenciar</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Pacóte Artista<i class="material-icons right">close</i></span>
      <p>Este pacote de contrato é para o artista de trabalho individual, onde pode expor seu portifólio e organizar seus agendamentos.</p>
      <p><h5>R$ 39,00 - Mensais</h5></p>
    </div>
    </div>

    </div>

      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="../materialize/img/back1.jpg"></div>
    </div>

    <!--jQyery-->
    <script src="js/jquery.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script type="text/javascript">

      $(document).ready(function(){
        $('.sidenav').sidenav();
      });

      $(document).ready(function(){
      $('.parallax').parallax();
      });

    </script>

  </body>
</html>