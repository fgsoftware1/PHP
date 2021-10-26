<?php 
    include("../utils/conexao.inc.php");
    
    if(isset($_POST['envio_ficheiro'])){
        //print_r($_FILES);
        //echo "<p/>";´

        $nome_ficheiro = utf8_decode($_FILES['fileUpload']['name']);
        $pasta_upload = "./uploads/".basename($nome_ficheiro);
    }
    if($_FILES['fileUpload'][''] == "image/jpeg" && $_FILES['size'] < 1500000){
        if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$pasta_upload)){
            try{
                executarSQL("INSERT INTO ficheiros(Nome_Ficheiro,Caminho_Ficheiro,Activ0)
                VALUES('".$nome_ficheiro."','".$pasta_upload"')")
                echo "o ficheiro".utf8_encode($nome_ficheiro)."foi excluido";
            }catch(Exception $erro){
                echo $erro->getMessage();
            }
        }
    }
?>