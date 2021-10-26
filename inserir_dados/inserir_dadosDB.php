<?php
    include("../utils/conexao.inc.php");

    if($_POST["inserir_dados"]{
        $nome_aluno = $_POST["nome_aluno"];
        $morada_aluno = $_POST["morada_aluno"];
        $sexo_aluno = $_POST["sexo_aluno"];
        $email_aluno = $_POST["email_aluno"];
        $datanasc_aluno = $_POST["datanasc_aluno"];
        $aluno_ativo = $_POST["aluno_ativo"];
    }

    try{
        executarSQL("INSERT INTO tabela(Nome_Aluno,Morada_Aluno,Sexo_Aluno,Email_Aluno,DataNasc_Aluno,Aluno_Ativo)
        Values ("".$nome_aluno."","".$morada_aluno."","".$sexo_aluno."","".$email_aluno."","".$datanasc_aluno."",".$aluno_ativo.")");

        
        header('location: ../index.php');
    }catch{
        echo $erro->getMensagem();
    }else{
        echo "erro ao submeter formulario ";
        die();
    }
?>