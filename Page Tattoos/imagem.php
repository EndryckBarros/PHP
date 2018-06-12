<?php
	
	include("connect.php");
  include("controller/controller.php"); 

  //Restringe o acesso sem etar logado
  session_start();
  if (!isset($_SESSION['log'])) {

      header("Location: logarArtista.php");
  }else{
      if(testaArtista() == false){

        session_destroy();
        header("Location: logarArtista.php");
        
      }else{

        $idArtista = $_SESSION['log'];
      }

      
  }

  $msg = false;

	if (isset($_FILES['arquivo'])) {

		$titulo = $_POST['titulo'];
		$legenda = $_POST['legenda'];
		$idCategoria = $_POST['categorias'];
    $novo_nome = '';
		


		$sql = "SELECT idPostagem FROM postagem ORDER BY idPostagem DESC LIMIT 1"; 

			$result = mysqli_query($conn, $sql);
	        while($row_id = mysqli_fetch_assoc($result)){ 
	        	$novo_nome = $row_id['idPostagem'];
	        	
	        }
	        if($novo_nome == '' || $novo_nome == null){
	        	$novo_nome = '0';
	        }
		
		$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = "Card" . $novo_nome . $extensao;
		$diretorio = "img/";

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

		$sql = "INSERT INTO postagem (ImagemLink, Legenda, Artista_idArtista, data, titulo,  Categoria_idCategoria) VALUES ('$novo_nome', '$legenda', '$idArtista', NOW(), '$titulo', '$idCategoria')";


		if ($conn->query($sql)) {
			$msg = "Aquivo enviado com sucesso";
      $conn->close();
		}else{
			$msg = "Falha ao enviar arquivo";
      $conn->close();
		}

	}

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
      background-image: url("../materialize/img/back4.jpg");
    }

    </style>


    <body>
      <?php if($msg != false) echo "<p>$msg, $titulo, $legenda, $idCategoria, $novo_nome, $idArtista</p>";  ?>
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
        <h3 class="header">Post de PortFólio</h3>

        <p class="grey-text text-darken-3 lighten-3 col l6 s8">Está na hora de mostrar seus trabalhos para seus clientes. Vamos lá!</p>
      
    </div>


    <div class="row">
      <form action="imagem.php" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col l10 m12 s12">
            <div class="input-field col l4 m6 s12">
              <i class="material-icons prefix">account_circle</i>
              <input name="titulo" id="titulo" type="text" class="validate">
              <label for="titulo">Título do Card</label>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col l10 s12">
            <div class="input-field col l8 s12 m12">
              <i class="material-icons prefix">mode_edit</i>
              <textarea name="legenda" id="legenda" class="materialize-textarea"></textarea>
              <label for="legenda">Legenda do Card</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col l10 m12 s12"> 
            
            <div class="file-field input-field col l4 m6 s12">
              <div class="btn">
			    <span>File</span>
			    <input name="arquivo" type="file">
			  </div>
			  <div class="file-path-wrapper">
			    <input class="file-path validate" type="text">
			  </div>
			</div>

			<div class="input-field col l4 m6 s12">
	            <select data-size="4" name="categorias">
	                <option value="" disabled selected>Selecione a Categoria</option>
	                  <?php
	                    $sql = "SELECT * FROM Categoria";
	                    $result = mysqli_query($conn, $sql);
	                    while($row_Categoria = mysqli_fetch_assoc($result)){ ?>
	                      <option value="<?php echo $row_Categoria['idCategoria']; ?>">
	                                     <?php echo $row_Categoria['Nome']; ?>
	                </option><?php  
	                    }
	                  ?> 
	            </select>
	        	<label>Categoria</label>
            </div>
          </div>
        </div>
        
        <div class="row" style="padding-left: 30px;">
          <button class="btn waves-effect waves-light" type="submit" name="action">Postar
          	<i class="material-icons right">send</i>
  		  </button>




      </form>
    </div>


      <!--JavaScript at end of body for optimized loading-->
      <script src="./jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
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
     
    </body>
  </html>
