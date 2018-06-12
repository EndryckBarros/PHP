<?php

	//Termina a sessão
	session_start();

	if (isset($_SESSION['log'])) {

	//Destroi a sessao atual 
	session_destroy();
	}
	//Redireciona para o index
	header("Location: index.html");

?>