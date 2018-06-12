<?php
    include_once("connect.php");
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
     <script type="text/javascript" src="javascript.js"></script>
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
              <li><a href="../materialize/menu.html">Portfólio</a></li>
              <li><a href="../materialize/pacotes.html">Conheça</a></li>
              <li><a href="../materialize/orcamento.html">Orçamento</a></li>
            </ul>
          </div>
        </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a href="../materialize/index.html">Home</a></li>
        <li><a href="../materialize/menu.html">Portfólio</a></li>
        <li><a href="../materialize/pacotes.html">Conheça</a></li>
        <li><a href="../materialize/orcamento.html">Orçamento</a></li>
      </ul>

      <div class="row col l6 s10 m4" style="padding-left: 30px;">
          <h3 class="white-text header">Cadastro do Estúdio</h3>

          <p class="white-text col l6 s8">Informe os dados necessários para prosseguir com o cadastro de seu estúdio.</p>
        
      </div>


      <div class="row">
        <form name="form" action= "controllerEstudio.php" method="post" 
              onsubmit="return validarForm();">

          <div class="row">
            <div class="col l10 m12 s12">
              <div class="input-field col l4 m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input name="nome" id="icon_prefix" type="text" class="validate white-text">
                <label for="icon_prefix">Fantasy Name</label>
              </div>

              <div class="input-field col l3 m6 s12">
                <i class="material-icons prefix">phone</i>
                <input name="phone" id="icon_telephone" type="tel" class="validate white-text">
                <label for="icon_telephone">Telephone</label>
              </div>

            </div>
          </div>

        <div class="row">
          <div class="col l10 m12 s12"> 
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">email</i>
              <input name="email" id="email" type="email" class="validate white-text">
              <label for="email">Email</label>
              <span class="white-text helper-text" data-error="wrong" data-success="right">Exemplo@gmail.com
              </span>
            </div>

            <div class="input-field col l3 m6 s12">
              <i class="material-icons prefix">assistant_photo</i>
              <input name="cnpj" id="icon_cnpj" type="number" class="validate white-text">
              <label for="icon_cnpj">CNPJ</label>
            </div>

        </div class="row" >
          <div class="col l10 m12 s12">
              <div class="input-field col l4 m6 s12">
                <select  name="select_cidades">
                  <option value="" disabled selected>Selecione a Cidade</option>
                  <?php
                    $sql = "SELECT * FROM Cidade";
                    $result = mysqli_query($conn, $sql);
                    while($row_Cidade = mysqli_fetch_assoc($result)){ ?>
                      <option value="<?php echo $row_Cidade['idCidade']; ?>">
                                     <?php echo $row_Cidade['Nome']; ?>
                      </option><?php  
                    }
                  ?> 
                </select>
                <label>Cidade</label>
              </div>

            </div>
        <div>
          
        </div>

        <div class="row">
          <div class="col l10 m12 s12">

            <div class="input-field col l4 m6 s12">
              <input name="endereco" id="endereco" type="text" class="validate white-text">
              <label for="endereco">Rua</label>
            </div>

            <div class="input-field col l3 m6 s12">
              <input name="numero" id="numEndereco" type="number" class="validate white-text">
              <label for="numEndereco">Numero</label>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col l10 m12 s12">

            <div class="input-field col l7 m6 s12">
              <input name="login" id="login" type="text" class="validate white-text">
              <label for="login">Login</label>
            </div>
        </div>

        <div class="row">
          <div class="col l10 m12 s12">

            <div class="input-field col l4 m6 s12">
              <input name="senha" id="password" type="password" class="validate white-text">
              <label for="password">Password</label>
            </div>

            <div class="input-field col l3 m6 s12">
              <input name="senha2" id="password2" type="password" class="validate white-text">
              <label for="password2">Confirm Password</label>
            </div>

          </div>
        </div>
        <div class="row" style="padding-left: 30px;">
          <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar
          <i class="material-icons right">send</i>
  </button>
       </form>  
        </div>
        
    </div>


      <!--JavaScript at end of body for optimized loading-->
      <script src="./jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

      <!--INICIALIZAÇÃO MENU SIDENAV -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
      </script>

      <!--INICIALIZAÇÃO SELECT CIDADES -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('select').formSelect();
        });
      </script>

      <script type="text/javascript">
        function validarForm() {
          var nome = document.form.nome.value;
          var phone = document.form.phone.value;
          var email = document.form.email.value;
          var cnpj = document.form.cnpj.value;
          var cod = document.form.cod.value;
          var endereco = document.form.endereco.value;
          var numero = document.form.numero.value;
          var login = document.form.login.value;
          var senha = document.form.senha.value;
          var senha2 = document.form.senha2.value;

          if (nome == "") {
            M.toast({html: 'Campo nome é obrigatório brow!'});
            return false;
          }

          if (phone == "") {
            M.toast({html: 'Campo Telefone é obrigatório brow!'});
            return false;
          }

          if (email == "") {
            M.toast({html: 'Campo Email é obrigatório brow!'});
            return false;
          }

          if (cnpj == "") {
            M.toast({html: 'Campo cnpj é obrigatório brow!'});
            return false;
          }

          if (cod == "") {
            M.toast({html: 'Campo Codigo é obrigatório brow!'});
            return false;
          }

          if (endereco == "") {
            M.toast({html: 'Campo endereco é obrigatório brow!'});
            return false;
          }

          if (numero == "") {
            M.toast({html: 'Qual o numero da sua casa brow?'});
            return false;
          }

          if (login == "") {
            M.toast({html: 'Campo Login é obrigatório brow!'});
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
      
    </body>
  </html>