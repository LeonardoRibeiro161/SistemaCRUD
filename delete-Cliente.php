<?php 
	session_start();
	if(!isset ($_SESSION["logado"]) == true){
		header('Location: login.html');
	}

     include("cabecalho-cliente.php");
     include("conexaoMySQL.php");
     include("crud-cliente.php");

	$codigo = $_POST['ID'];
	delete_Cliente($conexao,$codigo);
	header("Location: select-cliente.php?removido=true");
	die();

?>