<?php
    function conexaoDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "trabalho_01";

    try{
        $conn = mysqli_connect($servername,$username,$password,$database);
    }catch(msqli_connect_exception $mensagem){
        echo nl2br("nao foi possivel conectar à base de dados".$conn->connect_error."\n");
        throw $mensagem;
    }

    return $conn;
    }

    function executarSQL($sql_command){
        $conn = conexaoDB();
        $resultado = mysqli_query($conn,$sql_command);

        fecharDB($conn);

        return $resultado;
    }

    function fecharDB($conn){
        mysqli_close($conn);
    }
?>