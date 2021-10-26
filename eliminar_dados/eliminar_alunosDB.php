<?php
    include("../utils/conexao.inc.php");

    if(isset($_GET['ID'])){
        try{
            executarSQL("DELETE FROM tabela WHERE ID_aluno = ".$_GET['ID']."");
            //echo $_GET['ID'];

            header('location: ../index.php');
        }catch(exception $erro){
            echo $erro->getMensagem();
        }
    }
        else{
            echo "erro ao submeter formulario ";
            die();
        }
?>