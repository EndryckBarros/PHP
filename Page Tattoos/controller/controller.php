<?php
	######################################### CRIA UMA CONEXAO COM BANCO DE DADOS ##################################################
	function conn(){

		//localhost
		$server = "localhost";
		//loguin de usuario
		$user = "root";
		//senha do usuario
		$password = "";
		//banco de dados
		$dbname = 'mydb';

		//Cria e testa uma conexão
		$conn  = new mysqli($server, $user, $password, $dbname);
		if ($conn -> connect_error) {
			die("Conexão Falhou " . $conn -> connect_error);
		}

		return $conn;
	}


	############################################ CADASTRO DE ESTUDIO #####################################################
	
	// function cadastraEstudio(){
	// 	if (isset($_POST['proprietario'])) {

	// 		$proprietario = $_POST['proprietario'];
	// 	    $estudio = $_POST['estudio'];
	// 	    $cnpj = $_POST['cnpj'];
	// 	    $telefone = $_POST['telefone'];
	// 	    $email = $_POST['email'];
	// 	    $login = $_POST['login'];  
	// 	    $senha = $_POST['senha'];
	// 	    $confirmaSenha = $_POST['confirmaSenha']; 

	// 	    if ($senha === $confirmaSenha) {

	// 		    $query = "insert into estudio (Proprietario, NomeEstudio, CNPJ, Telefone, Email, Login, Senha)" .
	// 		     "VALUES ('$proprietario' , '$estudio' , '$cnpj' , '$telefone' , '$email' , '$login' , '$senha');";

	// 			$input = mysqli_query(conn() , $query) or die("Erro ao inserir dados!!!");
			     	
	// 	     }else{
	// 	     	echo " <p class='col s12'>Senhas Incompativeis!!!</p> ";
	// 	     }
	// 	}
	// }

	############################################### lOGAR EM UM ESTUDIO CADASTRADO #################################################

	function logarEstudio(){

		if (isset($_POST['login'])) {

			$login = $_POST['login'];
			$password = $_POST['password'];

			$query = "SELECT * FROM Login WHERE Login = '$login' and Senha = '$password'";
			//Ececulta Qyery no banco de dados
			$result = conn()->query($query);

			if ($result->num_rows > 0) {
		   		$row = $result->fetch_array(MYSQLI_ASSOC);
		   		$id = $row['idLogin'];
		   		
		   		$query = "SELECT * FROM Estudio WHERE Login_idLogin = '$id'";
				//Ececulta Qyery no banco de dados
				$result = conn()->query($query);

				if ($result->num_rows > 0) {
			   		$row = $result->fetch_array(MYSQLI_ASSOC);
				
				//Inicia uma sessão
		   		session_start();
		   		$_SESSION['log'] = $row['Nome'];
		   		$_SESSION['cod'] = $row['CNPJ'];
		   		//var_dump($_SESSION['log']);
		   		header("Location: gerenciarEstudio.php");

				}else{
					echo " <p class='col s12'>Erro Login ou Senha2</p> ";
				}
			}else{
				echo " <p class='col s12'>Erro Login ou Senha</p> ";
			}
		}
	}

################################ LOGAR ARTISTA ################################

	function logarArtista(){

		if (isset($_POST['login'])) {

			$login = $_POST['login'];
			$password = $_POST['password'];

			$query = "SELECT * FROM Login WHERE Login = '$login' and Senha = '$password'";
			//Ececulta Qyery no banco de dados
			$result = conn()->query($query);

			if ($result->num_rows > 0) {
		   		$row = $result->fetch_array(MYSQLI_ASSOC);
		   		$id = $row['idLogin'];
		   		
		   		$query = "SELECT * FROM Artista WHERE Login_idLogin = '$id'";
				//Ececulta Qyery no banco de dados
				$result = conn()->query($query);

				if ($result->num_rows > 0) {
			   		$row = $result->fetch_array(MYSQLI_ASSOC);
				
				//Inicia uma sessão
		   		session_start();
		   		$_SESSION['log'] = $row['idArtista'];
		   		
		   		//var_dump($_SESSION['log']);
		   		header("Location: imagem.php");

				}else{
					echo " <p class='col s12'>Erro Login ou Senha2</p> ";
				}
			}else{
				echo " <p class='col s12'>Erro Login ou Senha</p> ";
			}
		}
	}

	function agendarServico(){

		if (isset($_POST['postagem'])) {

			$postagem = $_POST['postagem'];
			

			$query = "SELECT Artista_idArtista FROM postagem WHERE ImagemLink = '$postagem'";
			//Ececulta Qyery no banco de dados
			$result = conn()->query($query);

			if ($result->num_rows > 0) {
		   		$row = $result->fetch_array(MYSQLI_ASSOC);
		   		$id = $row['Artista_idArtista'];
		   		
		   		$query = "SELECT * FROM Artista WHERE idArtista = '$id'";
				//Ececulta Qyery no banco de dados
				$result = conn()->query($query);

				if ($result->num_rows > 0) {
			   		$row = $result->fetch_array(MYSQLI_ASSOC);
				
				//Inicia uma sessão
		   		session_start();
		   		$_SESSION['id'] = $row['idArtista'];
		   		$_SESSION['nome'] = $row['Nome'];
		   		
		   		//var_dump($_SESSION['log']);
		   		header("Location: cadastrarServico.php");

				}else{
					echo " <p class='col s12'>Erro Artista</p> ";
				}
			}else{
				echo " <p class='col s12'>Erro Artista2</p> ";
			}
		}
	}

function testaArtista(){
	$aux = $_SESSION['log'];
	$query = "SELECT * FROM Estudio WHERE Nome = '$aux'";
		//Ececulta Qyery no banco de dados
		$result = conn()->query($query);

		if ($result->num_rows > 0) {
	   		return false;
	   	}else{
	   		return true;
	   	}
				
}

	##################################### CADASTAR ARTISTA EM UM ESTUDIO ###########################################

	// function cadastroArtistaEstudio(){

	// 	if (isset($_POST['nome'])) {
			
	// 		$nome = $_POST['nome'];
	// 		$sobrenome = $_POST['sobrenome'];
	// 		$cpf = $_POST['cpf'];
	// 		$telefone = $_POST['telefone'];
	// 		$email = $_POST['email'];
	// 		$cnpj = $_SESSION['cod'];

	// 		$query = "insert into artistaEstudio (Nome, Sobrenome, CPF, Telefone, Email, Estudio_CNPJ)" .
	// 	    "VALUES ('$nome' , '$sobrenome' , '$cnpj' , '$telefone' , '$email' , '$cnpj');";

	// 		$input = mysqli_query(conn() , $query) or die("Erro ao inserir dados!!!");

	// 	}  	
	// }

	######################################### CADASTRO ARTISTA SOLO ################################################

	// function cadastroArtistaSolo{

	// 	if(isset(var)){

			

			
	// 	}


	//}
?>
	
