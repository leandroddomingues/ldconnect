<?php

$host = "mysql380.umbler.com:41890";
$db   = "ventodedeus";
$user = "leandrovd";
$pass = "a36825700";

//$dat= "new Date()";

$connection=mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno())
  {
  echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
  }
$sql="INSERT INTO leitura (codigodebarras, data)
VALUES
('$_POST[codigodebarras]','$_POST[data]')";
//A instrução POST recupera os dados do formulário.
if (!mysqli_query($connection,$sql))
  {
  die('Erro: ' . mysqli_error($connection));
  }
  
else
echo "1 registro inserido.     ";
 
mysqli_close($connection);
//Este comando fecha a conexão ao banco de dados ao final.
?>