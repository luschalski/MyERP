<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "frotas";
	
	//Criar a conexão
	$conn = mysqli_connect($host, $usuario, $senha, $dbname);
	
	if(!$conn){
		die ("Falha na Conexão: ". mysqli_connect_error());
	}
	else{
		//echo "Conexão realizada com Sucesso";
	}
?>