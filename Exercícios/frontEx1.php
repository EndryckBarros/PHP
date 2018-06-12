<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<title>Exercício 1</title>
			<meta charset="utf-8"/>
		</head>
<body>
<form action= "actionColor.php" method="get">
	<h2>Exercício 1</h2>
	Escolha uma cor de Backgroud:<br>
	<input type="radio" name="color" value="blue"> Azul<br>
  	<input type="radio" name="color" value="red"> Vermelho<br>
  	<input type="radio" name="color" value="green"> Verde<br>
  	<input type="radio" name="color" value="orange"> Laranja<br>
  	<input type="radio" name="color" value="pink"> Rosa<br><br><br>

  	<input type="submit" value="OK">

</form>

<form action= "actionValores.php" method="get">
	<h2>Exercício 2</h2>
	Escolha Par ou Impar:<br>
	<input type="radio" name="valor" value="par"> Par<br>
  	<input type="radio" name="valor" value="impar"> Impar<br><br><br>

  	<input type="submit" value="OK">

</form>
</body>
</html>