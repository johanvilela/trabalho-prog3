<?php

	require_once("db.class.php");

	$objDb = new db();

	$link = $objDb->conecta_mysql();

	$sql = "SELECT nome FROM aluno, atividade WHERE aluno.ra = atividade.ra";

    $retorno = mysqli_query($link, $sql);

    $nomes = mysqli_fetch_array($retorno);

    var_dump($nomes);

    $_SESSION['nomes'] = $nomes['nome'];

	$objDb->desconecta_mysql();
?>