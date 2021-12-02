<?php
//chama o arquivo de conexão com o bd
include('conexao.php');


    session_start();
$_SESSION['editar123']= "";


if ($_POST['rendimento'] != "") {
 $valor1 = $_POST['valor'];
  $valorRealizado = $_POST['valorRealizado'];  
}
if ($_POST['despesa'] != "") {
   $valor1 = -1 * $_POST['valor'];
    $valorRealizado = -1 *  $_POST['valorRealizado'];  
}

///

//--if ($_POST['valorRealizado'] == "") {
 //--$valorRealizado = $_POST['valorRealizado'];
//--}
//--if ($_POST['valorRealizado'] != "") {

//--$valorRealizado =-1 *  $_POST['valorRealizado'];    
//--}

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

$up = mysql_query("UPDATE ControleFinanceiro SET receita= '$_POST[rendimento]',  despesa='$_POST[despesa]', valor= '$valor1', vencimento='$_POST[vencimento]',  executado= '$exec', datadarealizacao='$_POST[datadarealizacao] ', valorRealizado='$valorRealizado', id='$_POST[id]' WHERE id='$_POST[id]' && id_usuario= '$_POST[id_usuario]'");
 
if(mysql_affected_rows() > 0){
//  echo "Sucesso: Atualizado corretamente!   ";
	header("Location: ../planejamento/");
//  echo  $_POST['rendimento'];
}else{
  echo "Aviso: Não foi atualizado!   ";
}
 
mysql_close($conexao);
					?>