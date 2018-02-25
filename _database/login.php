<?php

	require_once("_database/db.class.php");

	// echo $_POST["input-login"];
	// echo "<br>";
	// echo $_POST["input-senha-login"];

	$login = $_POST["input-login"];
	$senha = $_POST["input-senha-login"];
	
	$objDb = new db();

	$link = $objDb->conecta_mysql();

	$sql_prof = "SELECT email FROM professor WHERE email LIKE '$login'";
	$sql_coord = "SELECT email FROM coordenador WHERE email LIKE '$login'";
	$sql_aluno = "SELECT RA FROM aluno WHERE RA LIKE '$login'";
	$sql_admin = "SELECT login FROM admin WHERE login LIKE '$login'";

	//executar a query
    // if (mysqli_query($link, $sql_prof)) {
    //     $sql_senha = "SELECT * FROM professor WHERE senha = '$senha'"
    //     if (mysqli_query($link, $sql_senha)) {
    //        echo "Professor logando com sucesso!";
	   //  }

    // }

    if (mysqli_query($link, $sql_coord)) {
        $sql_senha = "SELECT senha FROM coordenador WHERE senha LIKE '$senha'";
        echo "Coordenador encontrado!";
     	if (mysqli_query($link, $sql_senha)) {
           echo "Coordenador logando com sucesso!";
	    }   
    }elseif (mysqli_query($link, $sql_aluno)) {
        $sql_senha = "SELECT senha FROM aluno WHERE senha LIKE '$senha'";
        if (mysqli_query($link, $sql_senha)) {
           echo "Aluno logando com sucesso!";
	    }

    }elseif (mysqli_query($link, $sql_admin)) {
        $sql_senha = "SELECT senha FROM admin WHERE senha LIKE '$senha'";
		if (mysqli_query($link, $sql_senha)) {
           echo "Administrador logando com sucesso!";
	    }        
        
    } else {
        echo "Erro ao logar!!";
        echo "Verificar Login ou Senha.";
    }

	$objDb->desconecta_mysql();
?>