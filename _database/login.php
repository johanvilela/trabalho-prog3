<?php

	// $_SESSION sao variveis globais tratadas como vetor.

	include_once("db.class.php");

	// Recebe as informacoes do formulario
	$login = $_POST["input-login"];
	$senha = md5($_POST["input-senha-login"]);

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

	if ($login_admin || $login_aluno || $login_coord) {

		$dados_coord = mysqli_fetch_array($login_coord);
		$dados_admin = mysqli_fetch_array($login_admin);
		$dados_aluno = mysqli_fetch_array($login_aluno);

		// ============== COORDENADOR ==============
		if( isset($dados_coord['email']) ){
			if ( isset( $dados_coord['senha'] ) ){
				// Varivel de secao
				$_SESSION['email'] = $dados_coord['email'];
				$_SESSION['senha'] = $dados_coord['senha'];

				header("location: ../coordenador.php");
			}
		} else {
			header("location: ../index.php?erro=1");
		}

		// ============== ALUNO ==============
		if( isset($dados_aluno['RA']) ){

			if ( isset( $dados_aluno['senha']) ) {
				// Varivel de secao
				$_SESSION['RA'] = $dados_aluno['RA'];
				$_SESSION['senha'] = $dados_aluno['senha'];

				header("location: ../atividade.php");
			} else {
				header("location: ../index.php?erro=1");
			}
		}

		// ============== ADMIN ==============
		if ( isset($dados_admin["login"]) ) {

			if (isset( $dados_admin['senha'])){
				// Varivel de secao
				$_SESSION['login'] = $dados_admin['login'];
				$_SESSION['senha'] = $dados_admin['senha'];

				header("location: ../admin.php");
			} else {
				header("location: ../index.php?erro=1");
			}
		}
	} else {
		echo "Usuario nao cadastrado";
	}

	$objDb->desconecta_mysql();
?>
