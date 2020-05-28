<?php

require_once("config.php");


$nome = $_REQUEST['nome'];
$titulo   = $_REQUEST['titulo'];
$mensagem = $_REQUEST['mensagem'];


  $sql = "INSERT INTO post(user_id, post_titulo, post_conteudo) VALUES('$nome', '$titulo','$mensagem');";
 
	//$query =  or die(mysql_error());
	
	if(mysql_query($sql)){
		echo 'Contato efetuado com sucesso';	
			header("Location: index.php");	
	}
	
	else if(mysql_error()){		
			echo 'Tente Novamente!';		
			header("Location: post.php");		
	}

?>