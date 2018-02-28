<?php

class db {

    private $conexao;

<<<<<<< HEAD
    // Dados de Conexão
=======
    // Dados de Conexão (meu MySQL local)
>>>>>>> master
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "root";
    private $database = "prog3";

<<<<<<< HEAD
    // private $host = "https://databases.000webhost.com";
    // private $usuario = "id4831163_root1234";
    // private $senha = "root1234";
    // private $database = "id4831163_prog3";
=======

    // Dados do banco no servidor ( NÃO ESTÁ FUNCIONANDO )
//    private $host = "https://databases.000webhost.com";
//    private $usuario = "id4831163_root1234";
//    private $senha = "root1234";
//    private $database = "id4831163_prog3";
>>>>>>> master


    // Função para conexão
    public function conecta_mysql(){
        global $conexao;
        // criar conexão
        $conexao =  mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        // ajustar o charset de comunicação entre a aplicação e o banco de dados
        mysqli_set_charset($conexao, "utf8");

        // verificar se houve erro de conexão
        if(mysqli_connect_errno()){
            echo "Erro na conexão com o BD MySQL:";
            echo '<br>';
            echo mysqli_connect_error();
            echo '<br>';
        }

        return $conexao;
    }

    public function desconecta_mysql(){
        global $conexao;
        mysql_close($conexao);
    }

}

?>