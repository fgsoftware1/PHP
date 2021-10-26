<?php
    include("../utils/conexao.inc.php");

    $nome_botao_form = "Inserir";
    $action_page = "./inserir_dadosDB.php";

    if(isset($_GET['ID'])){
        $resultado = executarSQL("SELECT * FROM tabela WHERE ID_aluno = ".$_GET['ID']."");
        $row = mysqli_fetch_array($resultado);

        $Nome_Aluno = $row["Nome_Aluno"];
        $Morada_Aluno = $row["Morada_Aluno"];
        $Sexo_Aluno = $row["Sexo_Aluno"];
        $Email_Aluno = $row["Email_Aluno"];
        $DataNasc_Aluno = $row["DataNasc_Aluno"];
        $Aluno_Ativo = $row["Aluno_Ativo"];

        $nome_botao_form = "Alterar";
        $action_page = "./alterar_alunoDB.php?ID=".$_GET['ID']."";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>autenticaçao do utilizador</title>
    </head>
    <body>
        <form method="POST" action="./login.php">
            <label for="id_utilizador" name="id_utilizador">ID Utilizador</label>
            <input type="text" name="id_utilizador"/>
            </p>
            <label for="password" name="password">password</label>
            <input type="text" name="password"/>
            </p>
            <input type="submit" name="login_user" value="submeter"/>
            <input type="reset" name="Limpar" value="Limpar"/>
        </form>
        <?php echo (isset($_GET['erro']) ? 'erro de autenticacao!' : ''); ?>
    </body>
</html>