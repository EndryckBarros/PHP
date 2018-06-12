 <?php
 	echo "<h2>ATIVIDADE 1</h2>";

 	//ATIVIDADE 1
	$notas = array();
	$media = 0;

	for ($i = 1; $i <= 10; $i++) {   	
    	$notas[$i] = mt_rand(2, 10);
    	
    	echo $notas[$i] . "  _";
    	
    	$media += $notas[$i];
	} 	
	echo "<br><br>";
	echo "A média da turma é: " . $media / 10;
	echo "<br><br><br>";

	//ATIVIDADE1 ^

	echo "<h2>ATIVIDADE 2</h2>";
	//ATIVIDADE 2
	$valores = array();
	$maior = 0;
	$menor = 999;

	//GERA E RECEBE 20 NUMEROS INTEIROS
	for ($i = 1; $i <= 20; $i++) {   	
    	$valores[$i] = mt_rand(1, 100);

    	echo $valores[$i] . "  _";
    		
    		//ENCONTRA MAIOR VALOR
    		if($valores[$i] > $maior){
    			$maior = $valores[$i];
    		}
    		//ENCONTRA MENOR VALOR
    		if($valores[$i] < $menor){
    			$menor = $valores[$i];
    		}
	} 	
	echo "<br><br>";
	echo "O Menor valor é: ".$menor."<br><br>";
	echo "O Maior valor é: ".$maior."<br><br><br>";

	//ATIVIDADE 2 ^

	echo "<h2>ATIVIDADE 3</h2>";
	//ATIVIDADE 3
	$linha = array($coluna = array());

	for ($i=0; $i <= 2; $i++) { 
		
		for ($j=0; $j <=2 ; $j++) {

		if($i == $j){
			$linha[$i][$j] = 1;
			echo $linha[$i][$j] . "  ";
		}else{
			$linha[$i][$j] = 0;	
			echo $linha[$i][$j] . "  ";
		}
		}
		echo "<br>";
	}

	//ATIVIDADE 3 ^
?>