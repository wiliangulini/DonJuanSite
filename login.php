<?php require "includes/menu.php" ?>

<div class="loginmaster">
	<div class="login">
		<h1>LOGIN</h1>
		<form method="POST">
			<input type="email" name="email" required autocomplete="on" placeholder="E-mail...">
			<br><br>
			<input type="password" id="senha" name="password" placeholder="Senha..." >
			<div class="mostrar" onclick="mostrarSenha()">mostrar/<br>ocultar</div>

			<br><br>
			<input type="submit" value="Enviar" id="enviar">
		</form>
		<div class="esqueci">Esqueceu sua senha?</div>
	</div>
</div>
<div class="register">
	<div class="registerint">
		<h1>CASDASTRE-SE</h1>
		<form method="POST">
			<input type="text" name="nome" placeholder="Nome Completo">
			<input type="email" id="email" name="email" required autocomplete="on" placeholder="E-mail...">
			<input type="text" name="rua" placeholder="Rua">
			<input type="text" name="numero" placeholder="Número">
			<input type="text" name="bairro" placeholder="Bairro">
			<input type="text" name="cepdarua" placeholder="Cep da rua">
			<input type="password" name="senha" placeholder="Senha">
			<input type="password" name="senha" placeholder="Confirmar Senha">
			<input type="submit" value="Enviar">
		</form>
	</div>
</div>
<?php require "includes/footer.php" ?>