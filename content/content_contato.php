<br />

<form name="contato" action="script_contato.php" method="post" onsubmit="return validar('this');">

	<fieldset>
	<legend>
	&nbsp&nbsp&nbsp
	Contato
	&nbsp&nbsp&nbsp
	</legend>

		<table>

			<tr>
			<td><label for="nome">Nome:</label></td>
			<td><input type="text" name="nome" id="branco"></td>
			</tr>

			<tr>
			<td><label for="email">Email:</label></td>
			<td><input type="text" name="email" id="branco"></td>
			</tr>

			<tr>
			<td><label for="telefone">Telefone:</label></td>
			<td><input type="text" maxlength = "11" name="telefone" id="branco"></td>
			</tr>					

			<tr>
			<td><label for="opcao">Escolha uma Opção:</label></td>
			<td height="30"  scope="row">

			&nbsp;

			<select name="opcao" class="form" id="opcao">
			<option selected>[ Selecione ]</option>
			<option value="ajuda">Ajuda</option>
			<option value="outros">Outros</option>
			<option value="duvida">Duvida</option>
			<option value="suporte">Suporte</option>
			</select></td>
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