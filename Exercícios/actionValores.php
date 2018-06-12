<?php

$valores = array ();
$valor = $_GET['valor'];

for ($i = 1; $i <= 40; $i++) {   	
    $valores[$i] = $i;
} 	

foreach ($valores as $key) {
	switch ($valor) {
		case 'par':
			if($key % 2 == 0){
			echo $key;
			echo '<br>';
			}
			break;

		case 'impar':
			if($key % 2 == 1){
			echo $key;
			echo '<br>';
			}
			break;
		
		default:
			echo 'pare de graça!';
			break;
	}
	
}

?>