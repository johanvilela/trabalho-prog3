<?php


		include_once('db.class.php');


		$nome = $_POST["input-nome-professor"];
		$email = $_POST["input-email-professor"];

		$objDb = new db();

		$link = $objDb->conecta_mysql();

		$sql = "INSERT INTO professor(id, nome, email) VALUES (NULL,'$nome','$email')";



		//executar a query
		if (mysqli_query($link, $sql)) {
				echo "Professor registrado com sucesso!";
		} else {
				echo "Erro ao registrar professor!";
		}

		// Fecha conexao com banco de dados
		$objDb->desconecta_mysql();
?>
