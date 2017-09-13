<?php
	include_once("conexao.php");
	$inputPlaca = $_POST["inputPlaca"];
	$inputModelo = $_POST["inputModelo"];
	$inputTipo = $_POST["inputTipo"];
	$inputChassi = $_POST["inputChassi"];
	
	$result_cadastro = "INSERT INTO veiculo (inputPlaca, inputModelo,inputTipo,inputChassi) VALUES ('$inputPlaca', '$inputModelo', '$inputTipo', '$inputChassi')";
	$resultado_cadastro= mysqli_query($conn, $result_cadastro)
?>
