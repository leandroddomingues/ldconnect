<?php
//chama o arquivo de conexão com o bd
include('conexao.php');


    session_start();
    

$endereco = $_SESSION["endereco"];
$_SESSION["div"]  = $_POST["id"];


$up = mysql_query("UPDATE ListaDeCompras SET  comprado= '0' WHERE id_usuario = '$_POST[id_usuario]'");
 
if(mysql_affected_rows() > 0){
//  echo "Sucesso: Atualizado corretamente!   ";
// echo "$e - Aviso: foi atualizado!  $comprado ";
	header("Location: ../listadecompras/?categoria=".$endereco."");
    
}else{
  echo "Aviso: Não foi atualizado!";
  // sleep(2);
   ?><br><br><br><button style="background-color:transparent;border-radius:10px;" onclick="(window.location= '../listadecompras/')">Voltar</button>
  <?

 
}
 
mysql_close($conexao);
					?>