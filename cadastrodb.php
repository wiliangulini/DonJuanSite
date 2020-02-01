<?php
			$dsn = "mysql:dbname=DonJuan;host=localhost";
			$dbuser = "admin";
			$dbpass = "koekuatso";

			try {
				$pdo = new PDO($dsn, $dbuser, $dbpass);

			} catch(PDOException $e) {
				echo "falhou a conexão: ".$e->getMessage();
			}

			if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$rua = addslashes($_POST['rua']);
				$numero = addslashes($_POST['numero']);
				$bairro = addslashes($_POST['bairro']);
				$cep_da_rua = addslashes($_POST['cep_da_rua']);
				$senha = md5(addslashes($_POST['senha']));

				$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', rua = '$rua', numero = '$numero', bairro = '$bairro', cep_da_rua = '$cep_da_rua', senha = '$senha' ";
				$sql = $pdo->query($sql);


			}
		?>