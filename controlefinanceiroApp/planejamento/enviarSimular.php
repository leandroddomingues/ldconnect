<?php
//chama o arquivo de conexão com o bd
include('conexao.php');
 
 
    session_start();
	 if($_POST["simular"] == true)
	 
	 {
	 $boolle = "1";
	  }
	  if($_POST["simular"] == false)
	 
	 {
	 $boolle = "0";
	  }
 $_SESSION['dp4'] = $_POST["id"];

$up = mysql_query("UPDATE ControleFinanceiro SET simulado= '$boolle', id='$_POST[id]'  WHERE id='$_POST[id]'");

if(mysql_affected_rows() > 0){
    
	header("Location: ../planejamento/");
//  echo "Sucesso: Atualizado corretamente!   ";
 // echo $_POST["id"];
    
}else{

  echo "Aviso: Não foi atualizado!   ";
}
 
mysql_close($conexao);
					?>