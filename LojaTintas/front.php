<!DOCTYPE html>
<html>
<head>
	<title>Tintas Clara</title>
</head>

<style>
	h2 {
    color: blue;
    font-family: verdana;
    font-size: 130%;
}

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  /*background-color: #2196F3;*/
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;

</style>
<body>
<form action= "back.php" method="get">
	<h2>Faça Seu Orçamento</h2>
	Escolha o tipo de tinta:<br>

	<input type="radio" name="tipotinta" value="latex"> Latéx<br>
  	<input type="radio" name="tipotinta" value="acrilica"> Acrilica<br>
  	<input type="radio" name="tipotinta" value="esmalte"> Esmalte<br><br><br>

  	Escolha o tipo do local:<br>
  	<input type="radio" name="tipolocal" value="parede"> Parede<br>
  	<input type="radio" name="tipolocal" value="silo"> Silo<br><br><br>

  	Informe a metragem em m²:
  	<input type="text" name="metragem"><br><br><br>

  	<input type="submit" value="OK">

</form>

<br><br><br>

Estas são as Cores Disponiveis: 
<div class="grid-container">
  <div class="grid-item" style="background-color: #2196F3;">Azul</div>
  <div class="grid-item" style="background-color: #33cc33;">Verde</div>
  <div class="grid-item" style="background-color: #669999;">Cinza</div>
  <div class="grid-item" style="background-color: #ffffff;">Branco</div>
  <div class="grid-item" style="background-color: #ffff00;">Amarelo</div>
  <div class="grid-item" style="background-color: #238016;">Verdão Massa</div>
</div>


</body>
</html>