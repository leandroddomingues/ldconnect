<?php
//chama o arquivo de conexão com o bd
include('conexao.php');


    session_start();

	 if($_POST['comprado'] == false)
	 
	 {
	 $comprado = "0";
	  }
if($_POST['comprado'] == true)
	 
	 {
	 $comprado = "1";
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
 



$endereco = $_SESSION["endereco"];
$_SESSION["div1"]  = $_POST["id"];





$up = mysql_query("UPDATE ListaDeCompras SET quantidadefixa='$_POST[quantidade]',  item='$_POST[item]', 
valor_unitariofixo= '$_POST[valor2]',   enviarparaalista= '$tirar', id='$_POST[id]' WHERE id='$_POST[id]'");
 
if(mysql_affected_rows() > 0){
//  echo "Sucesso: Atualizado corretamente!   ";
	header("Location: ../listafixa/?categoria=$endereco");
    
}else{
  echo "Aviso: Não foi atualizado!   ";
 ?><br><br><br><button style="background-color:transparent;border-radius:10px;" onclick="(window.location= '../listafixa/')">Voltar</button>
  <?//sleep(5);
 // header("Location: ../listafixa/?categoria=$endereco");
}
 
mysql_close($conexao);
					?>