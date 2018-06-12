<?php
    include_once("connect.php");
  ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Menu</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css">
		<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<!-- Compiled and minified CSS -->
	    <link rel="stylesheet" href="./css/materialize.min.css">
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

<style>
	.demonstracao-card{
		width: 300px;
		margin-top: 1px;
	}

	.demonstracao-card > .mdl-card__title{
		color: #fff;
		height: 300px;
	}

	.demonstracao-card > .mdl-card__menu{
		color: #fff;
	}

  	div.container {
		margin: 0 auto;
		width: 500px;
		position: relative;
  	}

	@media (max-width: 400px) 
	{
	  	div.container button {
	  		position: absolute;
	  		top: 12px;
	  		right: 24px;
	  	}
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
        <li><a href="../materialize/orcamento.php">Orçamento</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="../materialize/index.html">Home</a></li>
    <li><a href="../materialize/portfolio.php">Portfólio</a></li>
    <li><a href="../materialize/pacotes.html">Conheça</a></li>
    <li><a href="../materialize/orcamento.php">Orçamento</a></li>
  </ul>

<form action="portfolioFiltro.php" method="post">
	<br><br><br>

	<div class = "row">
		
			 <div class="input-field offset-l4 offset-m3 col l4 m6 s12">
                <select size="4" name="artistas">
                  <option value="" disabled selected>Selecione o Artista</option>
                  <?php
                    $sql = "SELECT * FROM Artista";
                    $result = mysqli_query($conn, $sql);
                    while($row_Artista = mysqli_fetch_assoc($result)){ ?>
                      <option value="<?php echo $row_Artista['idArtista']; ?>">
                                     <?php echo $row_Artista['Nome']; ?>
                      </option><?php  
                    }
                  ?> 
                </select>
                <label>Artista</label>
              </div>
        
    </div>

    <div class = "row">
		
	      	<div class="input-field offset-l4 offset-m3 col l4 m6 s12">
                <select size="2" name="categorias">
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
			<button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
				<i class="material-icons">search</i>
			</button>
		
	</div>
</form>
<?php
	$sql = "SELECT COUNT(idPostagem) FROM postagem";
	         $result = mysqli_query($conn, $sql);
	         while($row_id = mysqli_fetch_assoc($result)){ 
	           	$aux = $row_id['COUNT(idPostagem)'];
	        }

  ?>

	<div class="mdl-grid">
<?php
	for ($i=0; $i < $aux; $i++) { 
	                $sql = "SELECT * FROM postagem WHERE ImagemLink = 'Card$i.jpg'";
                    $result = mysqli_query($conn, $sql);
                    while($row_post = mysqli_fetch_assoc($result)){
                    	$tituloCard = $row_post['titulo']; 
                        $legendaCard =  $row_post['Legenda']; }?>

		<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
			<div class="mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
				<div>
					<div class="mdl-card  mdl-shadow--4dp demonstracao-card">
						<div class="mdl-card__title" style="background: url('../materialize/img/card<?php echo $i ?>.jpg') center / cover;">
							<h2 class="mdl-card__title-text"><?php echo $tituloCard; ?></h2>
						</div>				
						<div class="mdl-card__supporting-text"> <?php echo $legendaCard; ?>
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a href="../materialize/cadastroServico.php" >
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent">Agendar</button></a>
						</div>
						<div class="mdl-card__menu">
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
								<i class="material-icons">share</i>
							</button>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
								<i class="material-icons">thumb_up</i>
							</button>
						</div>			
					</div>
				</div>
			</div>
		</div>
	<?php
}?>

		</div>

	<script src="./jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
		
	  <!--INICIALIZAÇÃO SELECT CIDADES -->
      <script type="text/javascript">
        $(document).ready(function(){
          $('select').formSelect();
          $('.sidenav').sidenav();
        });
      </script>
		
	</body>

</html>