<?php
	$servidor = "mysql380.umbler.com:41890";
	$usuario = "leandrovd";
	$senha = "a36825700";
	$dbname = "ventodedeus";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>