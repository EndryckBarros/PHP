
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
      background-image: url("../materialize/img/back4.jpg");
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
        <li><a href="../materialize/sair.php">Sair</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../materialize/index.html">Home</a></li>
    <li><a href="../materialize/portfolio.php">Portfólio</a></li>
    <li><a href="../materialize/pacotes.html">Conheça</a></li>
    <li><a href="../materialize/orcamento.html">Orçamento</a></li>
    <li><a href="../materialize/sair.php">Sair</a></li>
  </ul>

    <div class="row col l6 s10 m4" style="padding-left: 30px;">
        <h3 class="header">Orçamento</h3>

        <p class="grey-text text-darken-3 lighten-3 col l6 s8">Envie seus dados e sua mensagem para receber seu orçamento, pode também anexar imagens de referencia para auxílio.</p>
      
    </div>


    <div class="row">
      <form>

        <div class="row">
          <div class="col l10 m12 s12">
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">First Name</label>
            </div>

            <div class="input-field col l3 m6 s12">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" class="validate">
              <label for="icon_telephone">Telephone</label>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col l10 m12 s12"> 
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">email</i>
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
              <span class="helper-text" data-error="wrong" data-success="right">Exemplo@gmail.com
              </span>
            </div>

            <div class="file-field input-field col l4 m6 s12">
              <div class="btn">
                <span>File</span>
                <input type="file" multiple>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" 
                       placeholder="Carregue um ou mais arquivos">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col l10 s12">
            <div class="input-field col l8 s12 m12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
              <label for="icon_prefix2">Mensagem</label>
            </div>
          </div>
        </div>

      </form>
    </div>

      <!--JavaScript at end of body for optimized loading-->
      <script src="./jquery.js"></script>
      <script src="./js/materialize.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
      </script>

    </body>
  </html>