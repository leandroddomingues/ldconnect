
<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

	   /* 	
$result_user2 = "SELECT * FROM ControleFinanceiro WHERE receita != '' "; 
$resultado_user2 = mysqli_query($conn, $result_user2);


if(($resultado_user2) AND ($resultado_user2->num_rows != 0 )){
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";


     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
        
	while($row_user2 = mysqli_fetch_assoc($resultado_user2)){

 $despesa = $row_user2['despesa'];
 
 */
 
$up = mysql_query("UPDATE ControleFinanceiro SET receita_despesa = receita WHERE receita != ''");
 
if(mysql_affected_rows() > 0){
 echo "Sucesso: Atualizado corretamente!   ";
	//header("Location: ../planejamento/");
//  echo  $_POST['rendimento'];
}else{
  echo "Aviso: Não foi atualizado!   ";
}


$up = mysql_query("UPDATE ControleFinanceiro SET receita_despesa = despesa WHERE despesa != ''");
 
if(mysql_affected_rows() > 0){
 echo "Sucesso: Atualizado corretamente!   ";
	//header("Location: ../planejamento/");
//  echo  $_POST['rendimento'];
}else{
  echo "Aviso: Não foi atualizado!   ";
}
/*	}}
	
	  	
$result_user = "SELECT * FROM ControleFinanceiro  WHERE despesa =''"; 
$resultado_user = mysqli_query($conn, $result_user);


if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";

     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
        
	while($row_user = mysqli_fetch_assoc($resultado_user)){


 $receita = $row_user['receita'];

 //$result_usuario = "UPDATE ControleFinanceiro SET receita_despesa= $receita";

$up = mysql_query("UPDATE ControleFinanceiro SET receita= '$receita'");
 
if(mysql_affected_rows() > 0){
  echo "Sucesso: Atualizado corretamente!   ";
//	header("Location: ../planejamento/");
//  echo  $_POST['rendimento'];
}else{
  echo "Aviso: Não foi atualizado!   ";
}

	}}
*/
	?>