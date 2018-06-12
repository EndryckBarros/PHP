<?php 
	
	include("connect.php");

	$nome = $_POST['nome'];
	$telefone = $_POST['phone'];
	$cnpj = $_POST['cnpj'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	
	$cidade_idcidade = $_POST['select_cidades'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$senha2 = $_POST['senha2'];

	
	// COMANDO INSERT LOGIN
	$stmt2 = $conn->prepare("INSERT INTO login (login, senha) VALUES (?,?)");
	$stmt2->bind_param("ss", $login,$senha);

	// COMANDO INSERT ESTÚDIO
	$stmt = $conn->prepare("INSERT INTO estudio (nome, telefone, cnpj, endereco, cidade_idcidade, login_idlogin) VALUES (?,?,?,?,?,?)");
	$stmt->bind_param("ssssss", $nome, $telefone, $cnpj, $endereco, $cidade_idcidade, $login_idlogin);
	
	$endereco = $endereco .' '. $numero;
	
	//TESTA SE USUÁRIO JA EXISTE NO BANCO --- ESTUDIO
	$sql = $conn->query("SELECT * FROM estudio WHERE nome='$nome'");
	if(mysqli_num_rows($sql) > 0){
		echo "<br><br>Este Estudio já foi cadastrado<br>";
	}else{
		//TESTA SE USUÁRIO JA EXISTE NO BANCO --- LOGIN
		$sql = $conn->query("SELECT * FROM login WHERE login='$login'");
		if(mysqli_num_rows($sql) > 0){
			echo "<br><br>Este Login está indisponível<br>";
		}else{
			if($senha == $senha2){

					$stmt2->execute();
					$stmt2->close();
					    
					    $sql = "SELECT * FROM login WHERE login='$login'";
	                    $result = mysqli_query($conn, $sql);
	                    while($row_Login = mysqli_fetch_assoc($result)){ 
	                    	$login_idlogin = $row_Login['idLogin'];
	                    }
	                
					$stmt->execute();
					echo "<br><br>Novo registro criado com sucesso<br>";	
			
			}else{
				echo "<br><br>AS SENHAS NÃO COINCIDEM <br>";
			}	
		}
	}

$stmt->close();

$sql = "SELECT idEstudio, nome FROM estudio";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // DADOS DE SAÍDA DE CADA LINHA
    while($row = $result->fetch_assoc()) {
       echo "id: " . $row["idEstudio"]. " - Nome: " . $row["nome"]. "<br>";
    }
} else {
    echo "Nenhum resultado";
}

$conn->close();

?>