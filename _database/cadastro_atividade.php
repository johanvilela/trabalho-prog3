<?php


    require_once('db.class.php');


    $titulo = $_POST["input-titulo-atividade"];
    $carga_hr = $_POST["input-carga_hr-atividade"];
    $ano = $_POST["input-ano-atividade"];
    $tipo = $_POST["input-tipo-atividade"];
    $RA = $_POST["input-RA-atividade"];
   
    $objDb = new db();

    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO atividade(id, titulo, carga_hr, ano, tipo, RA) VALUES (NULL,'$titulo','$carga_hr','$ano','$tipo','$RA')";



    //executar a query
    if (mysqli_query($link, $sql)) {
        echo "Atividade registrado com sucesso!";
    } else {
        echo "Erro ao registrar atividade!";
    }

    $objDb->desconecta_mysql();
?>