<?php
    include("utils/conexao.inc.php");

    session_start();

    if(!isset($_SESSION["id_user"])){
        header('Location: login/login_form.php?erro=1');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>registo da tabela alunos</title>
    </head>
    <body>
        <?php
            $consulta_sql="SELECT * FROM tabela";

            if($result = executarSQL($consulta_sql)){
                echo "foram encontrados: ".mysqli_num_rows($result)." "."registos.</p>";
                ?>

            <a href='./inserir_dados/inserir_dados.php'>
            <input type="button" value="inserir novo registo" />
            </a>
            <a href='./logout.php'>
            <input type="button" name="botao_terminar_sessao" value="terminar sessao" />
            </a>
            
            <table>
            <tr>
                <td>ID_Aluno</td>
                <td>Nome_Aluno</td>
                <td>Morada_Aluno</td>
                <td>Sexo_Aluno</td>
                <td>Email_Aluno</td>
                <td>DataNasc_Aluno</td>
                <td>Aluno_Ativo</td>
                <th>operaçoes</th>
            </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td width='125px'>".$row['ID_aluno']."</td>";
                    echo "<td width='125px'>".$row['Nome_Aluno']."</td>";
                    echo "<td width='125px'>".$row['Morada_Aluno']."</td>";
                    echo "<td width='125px'>".$row['Sexo_Aluno']."</td>";
                    echo "<td width='125px'>".$row['Email_Aluno']."</td>";
                    echo "<td width='125px'>".$row['DataNasc_Aluno']."</td>";
                    echo "<td width='125px'>".$row['Aluno_Ativo']."</td>";
                    echo "<td width='150px'>
                        <a href='inserir_dados/inserir_dados.php?ID=".$row['ID_aluno']."'>
                            <input type='button' value='Alterar'/>
                        </a>
                        <a href='eliminar_dados/eliminar_alunosDB.php?ID=".$row['ID_aluno']."'>
                            <input type='button' value='Eliminar'/>
                        </a>
                        </td>";
                echo "</tr>";
            }
        ?>
        </table>
        <?php
            }else{
                echo "ocorreu um erro na consulta à base de dados";
            }
        ?>
    </body>
</html>