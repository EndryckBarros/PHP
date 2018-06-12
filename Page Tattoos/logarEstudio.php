<?php

  //Restringe o acesso logado
  session_start();
  if (isset($_SESSION['log'])) {
      header("Location: index.html");
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
    <!--Style-->
    <style>

      /*@media only screen and (min-width: 601px){
      .row .col.m6 {
      width: 40%;
      margin-left: 10%;
      left: auto;
      right: auto;
      }*/

      body{
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 50%), 
        url("../materialize/img/back6.jpg");
        background-size: cover;
      }

      .input-field .prefix{
        color: white !important; 
      }

      .input-field .prefix.active{
        color: yellow !important;
      }

      .input-field input:focus + label {
        color: yellow !important;
      }

      /* label underline focus color */
      .row .input-field input:focus {
        border-bottom: 1px solid yellow !important;
        box-shadow: 0 1px 0 0 yellow !important
      }

      p{
        color: white;
        border: solid red;
      }

    </style>

  </head>
  <body>

    <nav class="grey darken-3">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">
          <img class="responsive-img" style="max-width: 64px" src="../materialize/img/logo.png"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">
           menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html">Home</a></li>
          <li><a href="pacotes.php">Selecionar outro pacote</a></li>

        </ul>
      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <li><a href=".index.html">Home</a></li>
      <li><a href="pacotes.php">Selecionar outro pacote</a></li>

    </ul>

    <div class="row col l6 s10 m4" style="padding-left: 30px;">
        <h3 class="white-text header">  Login e Senha</h3>
        <h5 class="white-text col l6 s8">Entre com seu Login e Senha.</h5>
    </div>

    <div class="row container">
      <form class="col s12" method="post">
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">people</i>
            <input name="login" type="text" class="white-text validate" required="true">
            <label for="login">Login</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input name="password" type="text" class="white-text validate" required="true">
            <label for="password">Password</label>
          </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="action">Logar
          <i class="material-icons right"></i>
        </button>
      </form>  
    </div>

    <!--REALIZA OPERAÇÃO CADASTRO DE ESTUDIO DA CLASSE CONTROLLER-->
    <?php include("controller/controller.php"); logarEstudio(); ?>

    <!--jQyery-->
    <script src="js/jquery.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      $('.sidenav').sidenav();
      });
    </script>

    </body>
  </html>