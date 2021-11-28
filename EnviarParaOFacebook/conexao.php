<?php
	$servidor = "mysql524.umbler.com";
	$usuario = "ldconnect";
	$senha = "a36825700";
	$dbname = "ldconnect";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>
