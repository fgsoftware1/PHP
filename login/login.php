<?php
	session_start();

	include("../utils/conexao.inc.php");

	if(isset($_POST["login_user"])){
		$id_utilizador = $_POST["id_utilizador"];
		$password = $_POST["password"];

		try{
			$resultado = executarSQL("SELECT * FROM users WHERE id_user =".$id_utilizador."");
			$row = mysqli_fetch_array($resultado);

			if(password_verify($password, $row["password"]) && mysqli_num_rows($resultado) == 1){
				$_SESSION['id_user'] = $id_utilizador;
				header("Location: ../index.php");
			}else{
				header("Location: ./login_form.php?erro=1");
			}
		}
		catch(Exception $erro){
			echo $erro->getMessage();
		}
	}
	else{
		echo "erro ao submeter os dados";
		die();
	}
?>