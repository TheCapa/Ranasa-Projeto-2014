<br />

<form name="login" action="script_login.php" method="post" onsubmit="return validar('this');">

	<fieldset>
	<legend>
	&nbsp&nbsp&nbsp
	Login
	&nbsp&nbsp&nbsp
	</legend>

		<table>

			<tr>
			<td><label for="nome">Nome:</label></td>
			<td><input type="text" name="USUARIO" id="branco"></td>
			</tr>

			<tr>
			<td><label for="senha">Senha:</label></td>
			<td><input type="password" name="pass" id="branco"></td>
			</tr>

			
		</table>

		<br />

		<div id = "b_align">

		<input type="submit" name="button" value="Login" id="btn_enviar">
		<input type="reset" name="button" value="Limpar" id="btn_limpar">

		</div>

	</fieldset>

</form>