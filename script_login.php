<?php

require_once("config.php");


$usuario = $_REQUEST['USUARIO'];
$senha   = $_REQUEST['pass'];
 
$sql = "SELECT * FROM USER WHERE user_nome ='$usuario' AND user_pass = '$senha' ";
$query = mysql_query($sql) or die(mysql_error());
$qtda  = mysql_num_rows($query);
if($qtda == 0){
	echo 'Erro ao logar';	
	}else{		
		$_SESSION['USUARIO'] = $usuario;
		$_SESSION['pass']   = $senha;		
		header("Location: post.php");		
		}

?>