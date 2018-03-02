<?php

	include_once("db.class.php");

	// Recebe as informacoes do formulario
	$login = $_POST["input-login"];
	$senha = $_POST["input-senha-login"];

	$objDb = new db();

	$link = $objDb->conecta_mysql();

	// Recebe a busca de "login" e "senha" no BD
	$sql_coord = "SELECT senha, email FROM coordenador WHERE senha LIKE '$senha' and email = '$login'";
	$sql_aluno = "SELECT senha, RA FROM aluno WHERE senha LIKE '$senha' and RA = '$login' ";
	$sql_admin = "SELECT login, senha FROM admin WHERE login = '$login' and senha LIKE '$senha'";

	$login_coord = mysqli_query($link, $sql_coord);
	$login_aluno = mysqli_query($link, $sql_aluno);
	$login_admin  = mysqli_query($link, $sql_admin);

	$sql_senha = "";

	// *****************************************************************************************
	// ****** quando envia o formulario em branco, entra como aluno e coordenador logado ******
	// *****************************************************************************************

	// Verifica se quem está logando é um coordenador
	if ($login_coord) {
		$dados_usuario = mysqli_fetch_array($login_coord);
		echo "<br	/>";

		if( isset($dados_usuario['email']) ){
			$flag_coord = TRUE;

			if ( isset( $dados_usuario['senha'] )){
				echo "<br />";
				echo "Coordenador Logado";
			}
		} else {
			header("location: ../index.php?erro=1");
		}

	} if ($login_aluno) { // Verifica se quem está logando é um aluno
		echo "<br />";
		$dados_usuario = mysqli_fetch_array($login_aluno);

		if( isset($dados_usuario['RA']) ){
			$flag_aluno = TRUE;

			if ( isset( $dados_usuario['senha']) ) {
				echo "<br />";
				echo "Aluno Logado";
			} else {
				header("location: ../index.php?erro=1");
			}
		}

	} if ($login_admin) { // Verifica se quem está logando é um admin
		echo "<br />";
		$dados_usuario = mysqli_fetch_array($login_admin);

		if ( isset($dados_usuario["login"]) ) {
			$flag_admin = TRUE;

			if ($flag_admin) {
				echo "<br />";
				echo "Admin Logado";
			} else {
				header("location: ../index.php?erro=1");
			}
		}

	} // ********** Corrigir caso entre um usuario nao cadastrado **********
	 else { // Usuario nao existe no BD
		echo "Usuario nao cadastrado";
	}

	// if($flag_coord){
	// 	// Inicia section do coordenador
	// }if($flag_aluno){
	// 	// Inicia section do ...
	// }if($flag_admin){
	// 	// Inicia section do ...
	// }

	$objDb->desconecta_mysql();
?>
