<?php

session_start();
$servidor = "mysql380.umbler.com:41890";
$dbname   = "ventodedeus";
$usuario = "leandrovd";
$senha = "a36825700";


	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

 mysqli_set_charset($conn, "utf8");

?>