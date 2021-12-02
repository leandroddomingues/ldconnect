<?php
//chama o arquivo de conexão com o bd
include('conexao.php');


    session_start();
$e = $_POST['comprado1'];
	  
	  if($_POST['comprado1'] ==  true)
	 
	 {
	 $comprado = "1";
	  }
 if($_POST['comprado1'] ==  false)
	 {
	 $comprado = "0";
	  }
	
	  if($_POST['tirar'] == false)
	 
	 {
	 $tirar = "0";
	  }
if($_POST['tirar'] == true)
	 
	 {
	 $tirar = "1";
	  }
 
//$exec1 = $_POST['executado'];
// 
 if($_POST['valor2'] == 0){
     $valor2 = $_POST['valorunitariofixo'];
 }
 if($_POST['valor2'] != 0){
      $valor2 = $_POST['valor2'];
 }

$endereco = $_SESSION["endereco"];
$_SESSION["div"]  = $_POST["id"];


$up = mysql_query("UPDATE ListaDeCompras SET quantidadefixa = '$_POST[quantidade12]',quantidade='$_POST[quantidade]',  comprado= '$comprado', item='$_POST[item]',
valor_unitario= '$valor2',   enviarparaalista= '$tirar', id = '$_POST[id]' WHERE id = '$_POST[id]'");
 
if(mysql_affected_rows() > 0){
//  echo "Sucesso: Atualizado corretamente!   ";
// echo "$e - Aviso: foi atualizado!  $comprado ";
	header("Location: ../listadecompras/");
    
}else{
  echo "Aviso: Não foi atualizado!";
  // sleep(2);
   ?><br><br><br><button style="background-color:transparent;border-radius:10px;" onclick="(window.location= '../listadecompras/')">Voltar</button>
  <?

 
}
 
mysql_close($conexao);
					?>