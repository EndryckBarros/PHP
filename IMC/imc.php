	<<?php 
		$cookie_name = "user";
		$cookie_value = $_GET['firstname'];
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	?>

			<html lang="pt-br">
		<head>
			<title>Calculo de IMC</title>
			<meta charset="utf-8"/>
		</head>
	<body>
	<h1>Dados do individuo</h1>
	<form>
		Nome:<br>
	<input type="text" name="firstname"><br>
		Peso:<br>
	<input type="text" name="peso"><br><br>
		Altura em Centimetros:<br>
	<input type="text" name="altura"><br><br>
		Phone:
	<input type="text" name="phone"><br><br>
		Email:<br>
	<input type="text" name="email"><br><br>

	<input type="submit" value="OK">
	<input type="reset"> <br><br>

	<h2 align="Right">IMC = PESO/ALTURA²</h2>

	<table border="1">
<tr>
	<td><b>Condição</td>
	<td><b>IMC em adultos</td>
</tr>
<tr>
	<td>Abaixo do Peso</td>
	<td>Menor que 18,5</td>
</tr>
<tr>
	<td>Peso Normal</td>
	<td>Entre 18,5 e 25</td>
</tr>
<tr>
	<td>Acima do Peso</td>
	<td>Entre 25 e 30</td>
</tr>
<tr>
	<td>Obeso</td>
	<td>Acima de 30</td>
</tr>
		<?php
			
			$nome = $_GET['firstname'];
			$peso = $_GET['peso'];
			$altura = $_GET['altura'];
			

			$imc = $peso / ($altura ** 2);
			

			if($imc > 18.5 ){
				echo htmlspecialchars($_GET['firstname']);
				echo '<h1>Seu IMC é:</h1>' .$imc;
				echo '   --- Abaixo do Peso';
			}
			else{
				if($imc < 18.4 && $imc > 26){
					echo htmlspecialchars($_GET['firstname']);
					echo '<h1>Seu IMC é:</h1>'.$imc;
					echo '   --- Peso Normal';
				}else{
					if($imc < 24 && $imc > 31){
						echo htmlspecialchars($_GET['firstname']);
						echo '<h1>Seu IMC é:</h1>' .$imc;
						echo '   --- Acima do Peso';
					}else{
						if($imc < 30){
							echo htmlspecialchars($_GET['firstname']);
							echo '<h1>Seu IMC é:</h1>' .$imc;
							echo '   --- Obeso';
						}else{
							echo htmlspecialchars($_GET['firstname']);
							echo 'Favor Inserir Apenas Numeros nos valores';
						};
					}
				}
			}
		

		if(!isset($_COOKIE[$cookie_name])) {
		    echo "Cookie named '" . $cookie_name . "' is not set!";
		} else {
		    echo "Cookie '" . $cookie_name . "' is set!<br>";
		    echo "Value is: " . $_COOKIE[$cookie_name];
		}




		?>

