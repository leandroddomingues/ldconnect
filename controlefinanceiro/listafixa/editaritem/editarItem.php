<?php
//chama o arquivo de conexão com o bd
include('conexao.php');

//if ($_POST['receita'] == '') {
 //$valor1 = $_POST['valor'];
//}
//if ($_POST['despesa'] != '') {
  // $valor1 = -1 * $_POST['valor'];
    
//}

//	 if($_POST['executado'] == false)
	 
//	 {
//	 $exec = "0";
//	  }
//if($_POST['executado'] == true)
	 
//	 {
//	 $exec = "1";
//	  }
 
//$exec1 = $_POST['executado'];
// 


$up = mysql_query("UPDATE ListaDeCompras SET item='$_POST[item]', id_usuario='$_POST[idusuario]', categoria='$_POST[categoria]',valor_unitariofixo='$_POST[valor_unitario]',quantidadefixa='$_POST[quantidade]',quantidade='$_POST[quantidade]',id='$_POST[id]' WHERE id='$_POST[id]'");
 
if(mysql_affected_rows() > 0){
//  echo "Sucesso: Atualizado corretamente!   ";
	header("Location: ../");
    
}else{
  echo "Aviso: Não foi atualizado!   ";
}
 
mysql_close($conexao);
					?>