<?php


		include_once('db.class.php');


		$tipo = $_POST["input-tipo-tipo_de_atividade"];
		$carga_hr_max = $_POST["input-carga_hr_max-tipo_de_atividade"];
		$carga_hr_min = $_POST["input-carga_hr_min-tipo_de_atividade"];

		$objDb = new db();

		$link = $objDb->conecta_mysql();

		$sql = "INSERT INTO tipo_atividade(id, tipo, carga_hr_max, carga_hr_min) VALUES (NULL,'$tipo','$carga_hr_max', '$carga_hr_min')";



		//executar a query
		if (mysqli_query($link, $sql)) {
				echo "Tipo de atividade registrado com sucesso!";
		} else {
				echo "Erro ao registrar tipo de atividade!";
		}

		$objDb->desconecta_mysql();
?>
