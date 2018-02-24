<?php


    require_once('db.class.php');


    $nome = $_POST["input-nome-professor"];
    $email = $_POST["input-email-professor"];
   
    $objDb = new db();

    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO atividade(id, nome, email) VALUES (NULL,'$nome','$email')";



    //executar a query
    if (mysqli_query($link, $sql)) {
        echo "Atividade registrado com sucesso!";
    } else {
        echo "Erro ao registrar atividade!";
    }
?>