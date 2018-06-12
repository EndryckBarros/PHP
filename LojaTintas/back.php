<?php
	$preco = 0;
	$custo = 0;
	$maodeobra = 0;
	$metragem = $_GET['metragem'];
	$tipotinta = $_GET['tipotinta'];
	

	function calculaQuantidadeDeLatas($metrag) {
		return $metrag / 3;
	}

	// switch ($tipotinta) {
	// 	case 'latex':
	// 		$custo = 25 * ($metragem / 3);
	// 		break;
		
	// 	case 'acrilica':
	// 		$custo = 35 * ($metragem / 3);
	// 		break;

	// 	case 'esmalte':
	// 		$custo = 50 * ($metragem / 3);
	// 		break;

	// 	default:
	// 		# code...
	// 		break;
	// }

	switch ($tipotinta) {
		case 'latex':
			$custo = 25 * calculaQuantidadeDeLatas($metragem);
			break;
		
		case 'acrilica':
			$custo = 35 * calculaQuantidadeDeLatas($metragem);
			break;

		case 'esmalte':
			$custo = 50 * calculaQuantidadeDeLatas($metragem);
			break;

		default:
			# code...
			break;
	}

	switch ($metragem) {
		case ($metragem < 100):
			$custo += ($custo * 0.10); 
			break;

		case ($metragem > 100) && ($metragem < 501):
			$custo += ($custo * 0.15); 
			break;

		case ($metragem > 500):
			$custo += ($custo * 0.20); 
			break;
		
		default:
			# code...
			break;
	}

	echo "Seu Orçamento Final é: R$" . $custo . "<br><br>";
	echo "Deseja Finalizar o Pedido? ";
	echo "<br><br><br>"
?>
	Nome:<input type="text" name="firstname"><br>
  	Email:<input type="text" name="email"><br><br><br>
  	<input type="submit" value="OK">
