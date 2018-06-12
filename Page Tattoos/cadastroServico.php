<?php
    include_once("connect.php");

  session_start();
  if (isset($_SESSION['id'])) {
      $id = $_SESSION['id'];
      $nome = $_SESSION['nome'];
  
  ?>

<!DOCTYPE html>
  <html lang="pt-br">
    <head>

      <meta charset="utf-8"/>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="./css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <style>
  
      body{
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 50%), 
        url("../materialize/img/back6.jpg");
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

    </style>

    <body>


 <nav class="grey darken-3">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">
        <img class="responsive-img" style="max-width: 64px" src="../materialize/img/logo.png"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">
         menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../materialize/index.html">Home</a></li>
        <li><a href="../materialize/portfolio.php">Portfólio</a></li>
        <li><a href="../materialize/pacotes.html">Conheça</a></li>
        <li><a href="../materialize/orcamento.html">Orçamento</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../materialize/index.html">Home</a></li>
    <li><a href="../materialize/portfolio.php">Portfólio</a></li>
    <li><a href="../materialize/pacotes.html">Conheça</a></li>
    <li><a href="../materialize/orcamento.html">Orçamento</a></li>
  </ul>

    <div class="row col l6 s10 m4" style="padding-left: 30px;">
        <h3 class="white-text header">Agendamento de Serviço</h3>

        <p class="white-text col l6 s8">Informe os dados necessários para prosseguir com o agendamento de sua sessão.</p>
      
    </div>


    <div class="row">
      <form name="form" action= "controllerServico.php" method="post" 
              onsubmit="return validarForm();">

        <div class="row">
          <div class="col l10 m12 s12">
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">person_pin</i>
              <input name="nome" id="nome" type="text" class="validate">
              <label for="nome">First Name</label>
            </div>

            <div class="input-field col l3 m6 s12">
              <i class="material-icons prefix">assistant_photo</i>
              <input name="cpf" id="cpf" type="text" class="validate">
              <label for="cpf">CPF</label>
            </div>

          </div>
        </div>

          <div class="col l10 m12 s12">
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">phone</i>
              <input name="phone" id="phone" type="tel" class=" white-text validate">
              <label for="phone">Telephone</label>
            </div>

            <div class="input-field col l3 m6 s12">
              <i class="material-icons prefix">monetization_on</i>
              <input name="valor" id="valor" type="number" class="white-text validate">
              <label for="valor">Valor</label>
            </div>
          </div>

          </div>
        </div>

        <div class="row">
          <div class="col l10 m12 s12"> 
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">airport_shuttle</i>
              <input name="endereco" id="endereco" type="text" class="white-text validate">
              <label for="endereco">Endereço</label>
            </div>

            <div class="input-field col l3 m6 s12">
              <i class="material-icons prefix">date_range</i>
              <input name="data" id="data" type="date" class="white-text validate">
              <label for="data">Data</label>
            </div>

          </div>
        </div>

        <div class="row" >
            <div class="col l10 m12 s12">
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">person_pin</i>
              
              <label for="artista"><?php echo $nome; }?></label>
            </div>
        </div>
          
        <div class="row" style="padding-left: 30px;">
          <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
            <i class="material-icons right">send</i>
          </button> 
        </div>
        
    </div>

      <!--JavaScript at end of body for optimized loading-->
      <script src="./jquery.js"></script>
      <script src="./js/materialize.min.js"></script>

      <!-- INICIALIZAÇÃO SIDENAV -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
      </script>

      <script type="text/javascript">
        function validarForm() {
          var nome = document.form.nome.value;
          var sobrenome = document.form.sobrenome.value;
          var login = document.form.login.value;
          var telefone = document.form.phone.value;
          var email = document.form.email.value;
          var cpf = document.form.cpf.value;
          var senha = document.form.senha.value;
          var senha2 = document.form.senha2.value;

          if (nome == "") {
            M.toast({html: 'Campo nome é obrigatório brow!'});
            return false;
          }

          if (sobrenome == "") {
            M.toast({html: 'Campo Sobrenome é obrigatório brow!'});
            return false;
          }

          if (login == "") {
            M.toast({html: 'Campo Nome Fantasia é obrigatório brow!'});
            return false;
          }

          if (telefone == "") {
            M.toast({html: 'Campo telefone é obrigatório brow!'});
            return false;
          }

          if (email == "") {
            M.toast({html: 'Campo Email é obrigatório brow!'});
            return false;
          }

          if (cpf == "") {
            M.toast({html: 'Campo CPF é obrigatório brow!'});
            return false;
          }

          if (senha == "") {
            M.toast({html: 'Escolhe uma senha brow!'});
            return false;
          }

          if (senha2 == "") {
            M.toast({html: 'Tem que confirmar a senha brow!'});
            return false;
          }

          if (senha != senha2) {
            M.toast({html: 'Presta atenção que as senhas não coincidem brow!'});
            return false;
          }
         }
      </script>

      <!--INICIALIZAÇÃO SELECT CIDADES -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('select').formSelect();
        });
      </script>

    </body>
  </html>