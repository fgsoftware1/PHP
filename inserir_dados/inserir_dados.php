<?php
    include("../utils/conexao.inc.php");

    session_start();

    if(!isset($_SESSION["id_user"])){
        header('Location: ../login/login_form.php?erro=1');
    }

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
        <title>inserir dados na tabela</title>
    </head>
    <body>
        <form method="POST" action="<?php echo $action_page; ?>" name="inserir_dados">
            <label for="nome_aluno">Nome Aluno</label>
            <input type="text" name="nome_aluno" value="<?php echo (isset($Nome_Aluno) ? $Nome_Aluno : ""); ?>"/>
            </p>
            <label for="morada_aluno">Morada Aluno</label>
            <input type="text" name="morada_aluno" value="<?php echo (isset($Morada_Aluno) ? $Morada_Aluno : ""); ?>"/>
            </p>
            </p>
            <label for="email_aluno">Email Aluno</label>
            <input type="text" name="email_aluno" value="<?php echo (isset($Email_Aluno) ? $Email_Aluno : ""); ?>"/>
            </p>
            <label for="sexo_aluno">Sexo Aluno</label>
            <select name="sexo_aluno">
                <option value="M" <?php echo(isset($Sexo_Aluno) ? ($Sexo_Aluno='M' ? 'selected' : '') : ''); ?>>Maculino</option>
                <option value="F" <?php echo(isset($Sexo_Aluno) ? ($Sexo_Aluno='F' ? 'selected' : '') : ''); ?>>Feminino</option>
            </select>
            <label for="auno_atico">Aluno Ativo</label>
            <select name="aluno_ativo">
                <option value="sim" <?php echo(isset($Aluno_Ativo) ? ($Sexo_Aluno='sim' ? 'selected' : '') : ''); ?>>ativo</option>
                <option value="nso" <?php echo(isset($Aluno_Ativo) ? ($Sexo_Aluno='nso' ? 'selected' : '') : ''); ?>>nao ativo</option>
            </select>
            </p>
            <input type="submit" name="inserir_aluno" value="<?php echo $nome_botao_form ?>"/>
            <input type="reset" name="limpar"/>
        </form>
    </body>
</html>