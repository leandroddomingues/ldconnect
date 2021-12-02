<?php

$host = "mysql380.umbler.com:41890";
$db   = "ventodedeus";
$user = "leandrovd";
$pass = "a36825700";

$connection=mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno())
  {
  echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
  }
  
  
//	 if($_POST['executado'] == checked)
	 
//	 {
//	 $exec1 = "1";
//	  }
//	  if($_POST['executado'] != checked)
//	 
//	 {
//	 $exec1 = "0";
//	  }


$sql="INSERT INTO Categorias (categoria, id_usuario, tabela)
VALUES
('$_POST[nomeDaCategoria]','$_POST[idusuariocat]','ListaDeCompras')";
//A instrução POST recupera os dados do formulário.
if (!mysqli_query($connection,$sql))
  {
  die('Erro: ' . mysqli_error($connection));
  }
  
else
//echo "1 registro inserido.     ";
 	header("Location: ../");
mysqli_close($connection);
//Este comando fecha a conexão ao banco de dados ao final.
?>