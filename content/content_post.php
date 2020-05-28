<br />

<form name="contato" action="script_novopost.php" method="post" onsubmit="return validar('this');">

	<fieldset>
	<legend>
	&nbsp&nbsp&nbsp
	Fazer um Post
	&nbsp&nbsp&nbsp
	</legend>

		<table>

			<tr>
			<td><label for="nome">Nome:</label></td>
			<td><input type="text" name="nome" id="branco"></td>
			</tr>

			<tr>
			<td><label for="email">Titulo da Postagem:</label></td>
			<td><input type="text" name="titulo" id="branco"></td>
			</tr>

			<tr>
			<td><label for="mensagem">Mensagem:</label></td>
			<td><textarea cols="50" rows="5" name="mensagem" id="branco"></textarea></td>
			</tr>	

		</table>

		<br />

		<div id = "b_align">

		<input type="submit" name="button" value="Enviar" id="btn_enviar">
		<input type="reset" name="button" value="Limpar" id="btn_limpar">

		</div>

	</fieldset>

</form>