<?php
//chama o arquivo de conexão com o bd
include('conexao.php');


    session_start();
    
    
$_SESSION["div5"]  = $_POST["id"];
    
//echo 
$_SESSION['editar123']= "";
if ($_POST['receita'] == "") {
 $valor1 = $_POST['valor'];
}
if ($_POST['despesa'] != "") {
   $valor1 = -1 * $_POST['valor'];
    
}
///

if ($_POST['valorRealizado'] == "") {
 $valorRealizado = $_POST['valorRealizado'];
}
if ($_POST['valorRealizado'] != "") {

$valorRealizado =-1 *  $_POST['valorRealizado'];    
}
///
	 if($_POST['executado'] == false)
	 
	 {
	 $exec = "0";
	  }
if($_POST['executado'] == true)
	 
	 {
	 $exec = "1";
	  }
 
//$exec1 = $_POST['executado'];
// 

 $_SESSION["div3"]  = $_POST["id"];
 if ($valorRealizado == 0) {
     $valorRealizado = $valor1 * $exec;
 } else if ($valorRealizado << 0 || $valorRealizado >> 0){
     $valorRealizado = $valorRealizado;
 }
$saldo=  $_POST['saldo'];
$saldo1 = $saldo +$valorRealizado;
$up = mysql_query("UPDATE ControleFinanceiro SET receita='$_POST[rendimento]',  despesa='$_POST[despesa]', valor= '$valor1', vencimento='$_POST[vencimento]', saldo = '$saldo1', executado= '$exec', datadarealizacao='$_POST[datadarealizacao]', valorRealizado='$valorRealizado', id='$_POST[id]' WHERE id='$_POST[id]'");
 
if(mysql_affected_rows() > 0){
//  echo "Sucesso: Atualizado corretamente!   ";
	header("Location: ../planejamento/");
    
}else{
  echo "Aviso: Não foi atualizado!   ";
}
 
mysql_close($conexao);
					?>