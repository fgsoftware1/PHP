<?php 
    include("../utils/conexao.inc.php");

    if(isset($_POST["inserir_user"])){
        $nome_utilizador = $_POST["nome_utilizador"];
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
        // echo $nome_utilizador."</p>";
        // echo $password."</p>";
        // echo $_POST["password"];

        try{
            $resultado = executarSQL("INSERT INTO users (username,password,user_ativo)
                        VALUES ('".$nome_utilizador."', '".$password."',1);");
            echo "registado com sucesso!";
        }catch(Exception $erro){
            echo $erro->getMensagem();
        }
        }else{
            echo "erro ao submeter dados para a base de dados!";
            die();
        }
?>