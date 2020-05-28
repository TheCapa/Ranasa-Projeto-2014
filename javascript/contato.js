
	function validar(){
	
		
	if(document.contato.nome.value == "") {
	
		alert('Preencha o campo Nome!');
		document.contato.nome.focus();
		document.contato.nome.style.backgroundColor = 'yellow';
		return false;
	}
	
	if(document.contato.email.value.indexOf(('@' && '.'),0)== -1){
	alert("EMAIL invalido.");
	document.contato.email.focus();
	document.contato.email.style.backgroundColor = 'yellow';
	return false;
	}
		
	if(document.contato.telefone.value == "") {
	
		alert('Preencha o campo Telefone!');
		document.contato.telefone.focus();
		document.contato.telefone.style.backgroundColor = 'yellow';
		return false;
	}
	
	
		
	if(document.contato.opcao.value == "[ Selecione ]"){
	alert("Escolha uma opcao!");
	document.contato.opcao.focus();
	document.contato.opcao.style.backgroundColor = 'yellow';
	return false;
	}
	
	if(document.contato.mensagem.value == "") {
	
		alert('Escreva sua mensagem!');
		document.contato.mensagem.focus();
		document.contato.mensagem.style.backgroundColor = 'yellow';
		return false;
	}
		
	return true;	
	
	}
	