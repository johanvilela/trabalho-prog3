<?php

	include_once('_database/db.class.php');

	$login = $_POST["login"];
	$senha = md5($_POST["senha"]);

	$objDb = new db();

	$link = $objDb->conecta_mysql();

	$sql = "INSERT INTO admin(login, senha) VALUES ('$login','$senha')";


	//executar a query
	if (mysqli_query($link, $sql)) {
		echo "adim registrado com sucesso!";
	} else {
		echo "Erro ao registrar adim!";
	}

	$objDb->desconecta_mysql();
?>
