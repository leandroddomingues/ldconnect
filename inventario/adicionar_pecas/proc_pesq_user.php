<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$contrato = $_POST["contrato"];//filter_input(INPUT_POST, 'contrato', FILTER_SANITIZE_STRING);
$cliente = $_POST["cliente"];//filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$codigo = $_POST["codigo"];
$artigo = $_POST["artigo"];
$estoque = $_POST["estoque"];
//insere no banco de dados o numero do contrato
	//$result_usuario = "INSERT INTO AlscoLoteLimpo (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_da_Entrega, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";


	  	    	
$result_user = "SELECT * FROM Inventario_cliente  WHERE CONTRATO = '$contrato'";

// WHERE contrato = '$contrato' 
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";

     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
        
	while($row_user = mysqli_fetch_assoc($resultado_user)){
	/*   echo "<table  style='border-bottom:1pt solid black;'>";
echo "<tr>";

echo "<th width='250px'></th> ";
echo "<th width='400px'></th> ";
echo "<th width='100px'></th> ";
echo "</tr> ";
*/
   echo "<tr>";
	   	echo "<td><div style='text-align:center;width:250px;'>".$row_user['codigo']."</div></td>";
	   	//<td>".$row_user['artigo']."</td><td>".$row_user['estoque']."</td>";

	   	echo "<td><div style='text-align:center;width:400px;'>".$row_user['artigo']."</div></td>";
	   	echo "<td><div  style='text-align:center;width:100px;'>".$row_user['estoque']."</div></td>";
	 		echo "</tr>";
//	echo "</table>";
	
	    
	}

}else{
	echo "Nenhum usuário encontrado ...";
}

	
	?>