<?php 
	
	include("connect.php");
  
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['phone'];
	
	$data = $_POST['data'];
	$valor = $_POST['valor'];
	$endereco = $_POST['endereco'];
	$idArtista = $_POST['artistas'];
	
	// COMANDO INSERT LOGIN
	$stmt2 = $conn->prepare("INSERT INTO Usuario (nome, cpf, telefone) VALUES (?,?,?)");
	$stmt2->bind_param("sss", $nome,$cpf,$telefone);

	// COMANDO INSERT ESTÚDIO
	$stmt = $conn->prepare("INSERT INTO Servico (data, valor, Usuario_idUsuario, Artista_idArtista,  endereco) VALUES (?,?,?,?,?)");
	$stmt->bind_param("sssss", $data,$valor,$idUsuario,$idArtista,$endereco);
	
	
	$sql = $conn->query("SELECT * FROM servico WHERE Data='$data'");
	if(mysqli_num_rows($sql) > 0){
	
		$sql = $conn->query("SELECT * FROM Usuario WHERE cpf='$cpf'");
		if(mysqli_num_rows($sql) <= 0){
		 	$stmt2->execute();
		 	$stmt2->close();
		}

		 $sql = "SELECT * FROM Usuario WHERE cpf='$cpf'";
		        $result = mysqli_query($conn, $sql);
		        while($row = mysqli_fetch_assoc($result)){ 
		        	$idUsuario = $row['idUsuario'];
		        }	
		        
		$stmt->execute();
		$stmt->close();
		echo "<br><br>Novo registro criado com sucesso<br>";			
	}else{
		echo "<br><br>Data ja Reservada<br>";	
	}		


$sql = "SELECT idServico, Data FROM Servico";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // DADOS DE SAÍDA DE CADA LINHA
    while($row = $result->fetch_assoc()) {
       echo "id: " . $row["idServico"]. " - Data: " . $row["Data"]. "<br>";
    }
} else {
    echo "Nenhum resultado";
}

$conn->close();

?>