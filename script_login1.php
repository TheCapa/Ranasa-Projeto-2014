<?php

	require_once("config.php");
	
	$nome = $_POST['USUARIO'];
	$pass = $_POST['pass'];
	
	
	
	
	$select = mysql_query("SELECT * FROM USER WHERE user_nome=’.$nome.’ AND user_pass=’.$pass.’");
	//$select = "SELECT * FROM USER WHERE user_nome = '".$nome."' AND user_pass = '".$pass."';";
	
	if(mysql_query($select))
	{	
		echo"sucesso";
	}
	
	else if(mysql_error())
	{	
		echo"fail";
	}
	
	//header("Location: index.php?pagina=contato");
	
?>