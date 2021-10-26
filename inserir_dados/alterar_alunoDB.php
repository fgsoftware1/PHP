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
        executarSQL("UPDATE tabela
                    SET Nome_Aluno = '".$nome_aluno"',Morada_Aluno = '".$morada_aluno"',
                        Sexo_Aluno = '".$sexo_aluno"',Email_Aluno = '".$email_aluno"',
                        DataNasc_Aluno = '".$datanasc_aluno"',Aluno_Ativo = '".$aluno_ativo"')
                    Where ID_aluno = "$_GET([""]."");
        header('location: ../index.php');
    }catch{
        echo $erro->getMensagem();
    }else{
        echo "erro ao submeter formulario ";
        die();
    }
?>