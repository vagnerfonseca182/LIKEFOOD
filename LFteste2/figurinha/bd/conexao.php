<?php
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bancodedados = "likefood";
	//criar a conexão
	$conexao = mysqli_connect($servidor, $usuario, $password, $bancodedados);
	//testar a conexão
	if(!$conexao){
		die("Conexão falhou!".mysqli_connect_error());
	}
?>