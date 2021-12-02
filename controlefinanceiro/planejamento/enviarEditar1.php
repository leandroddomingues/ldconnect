<?php
//chama o arquivo de conexão com o bd
include('conexao.php');


    session_start();
$_SESSION['editar123']= "";


if ($_POST['rendimento1'] != "") {
 $valor1 = $_POST['valor1'];
  $valorRealizado = $_POST['valorRealizado1'];  
}
if ($_POST['despesa1'] != "") {
   $valor1 = -1 * $_POST['valor1'];
    $valorRealizado = -1 *  $_POST['valorRealizado1'];  
}

///

//--if ($_POST['valorRealizado'] == "") {
 //--$valorRealizado = $_POST['valorRealizado'];
//--}
//--if ($_POST['valorRealizado'] != "") {

//--$valorRealizado =-1 *  $_POST['valorRealizado'];    
//--}

	 if($_POST['executado1'] == false)
	 
	 {
	 $exec = "0";
	  }
if($_POST['executado1'] == true)
	 
	 {
	 $exec = "1";
	  }
 
//$exec1 = $_POST['executado'];
// 
///
//--if ($_POST['datadarealizacao'] != "") {
    //--$datare = $_POST['datadarealizacao'];
//--}
//--if ($_POST['datadarealizacao'] == "") {
    //--$datare =  date('Y-m-d');
//--}
//--if ($_POST['valorRealizado'] != "") {
//--  $valorRealizado = $valorRealizado;
//-- $exec = "1";
//-- $datareali = $datare;
//--}
//--if ($exec == "1") {
  //--$valorRealizado = $valorRealizado;
 //--$exec = "1";
 //--$datareali = $datare;
//--}
//--if ($_POST['datadarealizacao'] != "") {
 //--$valorRealizado = $valorRealizado;
 //--$exec = "1";
 //--$datareali = $datare;
//--}

///
 
//- if ($valorRealizado == 0) {
   //-  $valorRealizado = $valor1 * $exec;
 //-} else if ($valorRealizado < 0 || $valorRealizado > 0){
    //- $valorRealizado = $valorRealizado;
 //-}
$up = mysql_query("UPDATE ControleFinanceiro SET receita= '$_POST[rendimento1]',  despesa='$_POST[despesa1]', valor= '$valor1', vencimento='$_POST[vencimento1]',  executado= '$exec', datadarealizacao='$_POST[datadarealizacao1] ', valorRealizado='$valorRealizado', id='$_POST[id1]' WHERE id='$_POST[id1]' && id_usuario= '$_POST[id_usuario1]'");
 
if(mysql_affected_rows() > 0){
//  echo "Sucesso: Atualizado corretamente!   ";
	header("Location: ../planejamento/");
    
}else{
  echo "Aviso: Não foi atualizado!   ";
}
 
mysql_close($conexao);
					?>