<?php


    require_once('db.class.php');


    $ra = $_POST["input-ra-cadastro"];
    $nome = $_POST["input-nome-cadastro"];
    $cpf = $_POST["input-cpf-cadastro"];
    $email = $_POST["input-email-cadastro"];
    $curso = $_POST["input-curso-cadastro"];
    $senha = $_POST["input-password-cadastro"];

    $objDb = new db();

    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO aluno(RA, nome, cpf, email, curso, senha) VALUES ('$ra','$nome','$cpf','$email','$curso','$senha')";



    //executar a query
    if (mysqli_query($link, $sql)) {
        echo "Usuário registrado com sucesso!";
    } else {
        echo "Erro ao registrar usuário!";
    }

    $objDb->desconecta_mysql();
?>