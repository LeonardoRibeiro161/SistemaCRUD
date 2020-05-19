<?php

	include("conexaoMySQL.php");
	include("crud-usuario.php");

	$usuario = buscaUsuario($conexao,$_POST["usuario"],$_POST["password"]);
	
	if($usuario == null)
	{
		echo "Usuário e/ou Senha estão incorreto(s).";	
	}
	else{

			if(!isset($_SESSION)){
				session_start();
				$_SESSION['usuario'] = $usuario['NOME'];
				$_SESSION['codigo'] = $usuario['CODIGO'];
				$_SESSION["logado"] = TRUE;
				header("Location: index.php");
			}
			
		}

?>