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
  
	 if($_POST['executado'] == true)
	 
	 {
	 $exec1 = "1";
	 $simu = "0";
	  }
	  if($_POST['executado'] == false)
	 
	 {
	 $exec1 = "0";
	  }
	  
	  $valorRealizado = $_POST['valorRealizado'];
 $valor1 = $_POST['valor'];
 if ($valorRealizado == 0) {
     $valorRealizado = $valor1 * $exec1;
 } else if ($valorRealizado << 0 || $valorRealizado >> 0){
     $valorRealizado = $valorRealizado;
 }
 $vencimento = $_POST['vencimento'];
$dataDeRealizacao = $_POST['dataDeRealizacao'];
  if ($dataDeRealizacao == ""){
     $dataDeRealizacao = $vencimento;
 }
$sql="INSERT INTO ControleFinanceiro (receita, valor, vencimento, datadarealizacao, valorRealizado, executado, id_usuario, simulado)
VALUES
('$_POST[rendimento]','$valor1','$vencimento','$dataDeRealizacao','$valorRealizado','$exec1','$_POST[id_usuario]', '$simu')";
//A instrução POST recupera os dados do formulário.
if (!mysqli_query($connection,$sql))
  {
  die('Erro: ' . mysqli_error($connection));
  }
  
else
//echo "1 registro inserido.     ";
 	header("Location: ../planejamento/");
mysqli_close($connection);
//Este comando fecha a conexão ao banco de dados ao final.
?>