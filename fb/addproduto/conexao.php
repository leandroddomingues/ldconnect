<?php
	$servidor = "mysql995.umbler.com";
	$usuario = "ld-connect";
	$senha = "a36825700";
	$dbname = "ld-connect";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}

?>
