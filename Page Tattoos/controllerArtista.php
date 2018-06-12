<?php 
	
	include("connect.php");


  //Restringe o acesso sem etar logado
  session_start();
  if (isset($_SESSION['log'])) {
      $cod = $_SESSION['cod'];
  }else{
  	$cod = $_POST['cod'];
  }

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['phone'];
	
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$senha2 = $_POST['senha2'];
	
	// COMANDO INSERT LOGIN
	$stmt2 = $conn->prepare("INSERT INTO login (login, senha) VALUES (?,?)");
	$stmt2->bind_param("ss", $login,$senha);

	// COMANDO INSERT ESTÚDIO
	$stmt = $conn->prepare("INSERT INTO artista (nome, sobrenome, cpf, telefone, cod, email, login_idlogin) VALUES (?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss", $nome,$sobrenome,$cpf,$telefone,$cod,$email,$login_idlogin);
	
	//TESTA SE USUÁRIO JA EXISTE NO BANCO --- ARTISTA
	$sql = $conn->query("SELECT * FROM artista WHERE cpf='$cpf'");
	if(mysqli_num_rows($sql) > 0){
		echo "<br><br>Este Artista já foi cadastrado<br>";
	}else{
		//TESTA SE USUÁRIO JA EXISTE NO BANCO --- LOGIN
		$sql = $conn->query("SELECT * FROM login WHERE login='$login'");
		if(mysqli_num_rows($sql) > 0){
			echo "<br><br>Este Login está indisponível<br>";
		}else{
			if($senha == $senha2){
					if($cod == ''){
						$cod = 0;
					}
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

$sql = "SELECT idArtista, nome FROM artista";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // DADOS DE SAÍDA DE CADA LINHA
    while($row = $result->fetch_assoc()) {
       echo "id: " . $row["idArtista"]. " - Nome: " . $row["nome"]. "<br>";
    }
} else {
    echo "Nenhum resultado";
}

$conn->close();

?>