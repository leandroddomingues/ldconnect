<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

//$contrato = $_POST["contrato"];//filter_input(INPUT_POST, 'contrato', FILTER_SANITIZE_STRING);
//$cliente = $_POST["cliente"];//filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$codigo = $_POST["codigo"];
//$artigo = $_POST["artigo"];
//$estoque = $_POST["estoque"];
//insere no banco de dados o numero do contrato
	//$result_usuario = "INSERT INTO AlscoLoteLimpo (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_da_Entrega, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";
//	$result_usuario = "INSERT INTO Inventario_cliente (contrato, cliente,codigo,artigo,estoque) VALUES ('$contrato','$cliente','$codigo','$artigo','$estoque')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
//	if($resultado_usuario){
	    	
$result_user = "SELECT * FROM Inventario_produto  WHERE Codigo_De_Barras = '$codigo'";


// WHERE contrato = '$contrato' 
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
  
 echo "Este item já foi inventariado"; 
        
/*	while($row_user = mysqli_fetch_assoc($resultado_user)){
	
	
	  echo "<table  style='border-bottom:1pt solid black;'>";
echo "<tr>";

echo "<th width='250px'></th> ";
echo "<th width='400px'></th> ";
echo "<th width='100px'></th> ";
echo "</tr> ";

   echo "<tr>";
	   	echo "<td width='250px'><p style='text-align:center;'> ".$row_user['codigo']."</p></td>";
	   	//<td>".$row_user['artigo']."</td><td>".$row_user['estoque']."</td>";

	   	echo "<td width='400px'><p style='text-align:center;'>".$row_user['artigo']."</p></td>";
	   	echo "<td width='100px'><p style='text-align:center;'>".$row_user['estoque']."</p></td>";
	   		echo "</tr>";
	echo "</table>";
	}*/

}else{


	    	
$result_user32 = "SELECT * FROM Inventario_matriz_itens  WHERE Codigo_de_barras = '$codigo'";



// WHERE contrato = '$contrato' 
$resultado_user32 = mysqli_query($conn, $result_user32);

if(($resultado_user32) AND ($resultado_user32->num_rows != 0 )){
  
  	while($row_user = mysqli_fetch_assoc($resultado_user32)){
	
/*
$Matricula;
$Nome_Funcionario;
$Chapa;
$Armario;
$Gaveta;
$Nome_Setor;
$Centro_de_Custo;
$Tipo_Movimento;
$Produto_Contrato;
$Novo_Especial;
$Tamanho;
$Quantidade;
$Obs_Estoque;
$GME;
$Contrato;
$Codigo_de_barras = $row_user['Codigo_De_Barras'];
*/
  	$result_usuario23 = "INSERT INTO Inventario_produto (Codigo_De_Barras) VALUES ('$codigo')";
	
	$resultado_usuario23 = mysqli_query($conn, $result_usuario23);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
	if($resultado_usuario23){


	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

	}else{
	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

	}
	
  	}
}else{
	echo "Este item não está cadastrado em nosso banco de dados!";
}


}


//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

//	}else{
//	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

//	}
	
	
	?>