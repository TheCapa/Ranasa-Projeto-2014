<?php
	
	// Host que recebera a conexao
	$host = "localhost";
	// Usuario no B.D.
	$user = "root";
	// Senha do usuario
	$password = "";
	// Conexao com o BD
	$query = mysql_connect($host, $user, $password) or die (mysql_error());
	// Define a base de dados para a conexão	
	$baseDeDados = "ranasa";
	// Conecta a base dados	
	$query = mysql_select_db($baseDeDados) or die (mysql_error());
	
	
?>