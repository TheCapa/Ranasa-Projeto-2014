<?php

require_once("config.php");


$nome = $_REQUEST['nome'];
$email   = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$assunto   = $_REQUEST['opcao'];
$mensagem = $_REQUEST['mensagem'];




  $sql = "INSERT INTO contato(contato_nome, contato_email, contato_telefone, contato_assunto, contato_mensagem) VALUES('$nome', '$email','$telefone' , '$assunto', '$mensagem');";
 
	$query = mysql_query($sql) or die(mysql_error());
	$qtda  = mysql_num_rows($query);
	if($qtda == 0){
		echo 'Tente novamente';	
			header("Location: contato.php");	
	}
	
	else{		
			echo 'Contato efetuado com sucesso!';		
			header("Location: contato.php");		
	}

?>