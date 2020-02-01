
<?php
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=DonJuan;host=localhost";
	$dbuser = "admin";
	$dbpass = "koekuatso";

	try {
		$db = new PDO($dsn, $dbuser, $dbpass);

		$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ");
		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();

			$_SESSION['id'] = $dado['id'];

			echo "voce esta logado";
		}

	} catch(PDOException $e) {
		echo "Falhou: ".$e->getMessage();
	}
}

require "includes/menu.php"; 
require "cadastrodb.php";

?>

<div class="loginmaster">
	<div class="login">
		<h1>LOGIN</h1>
		<form method="POST">
			<input type="email" name="email" required autocomplete="on" placeholder="E-mail...">
			<br><br>
			<input type="password" id="senha" name="senha" placeholder="Senha..." >
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
			<input type="text" name="cep_da_rua" placeholder="Cep da rua">
			<input type="password" name="senha" placeholder="Senha">
			<!--<input type="password" name="senha" placeholder="Confirmar Senha">-->
			<input type="submit" value="Enviar">
		</form>
	</div>
</div>
<?php require "includes/footer.php" ?>