<?php


		include_once('db.class.php');


		// $nome = $_POST["input-coord-nome"];
		$email = $_POST["input-coord-email"];
		$senha = $_POST["input-coord-senha"];

		$objDb = new db();

		$link = $objDb->conecta_mysql();

		$sql = "INSERT INTO coordenador(id,email,senha) VALUES (NULL,'$email','$senha')";



		//executar a query
		if (mysqli_query($link, $sql)) {
				echo "Coordenador registrado com sucesso!";
		} else {
				echo "Erro ao registrar coordenador!";
		}

		$objDb->desconecta_mysql();
?>
