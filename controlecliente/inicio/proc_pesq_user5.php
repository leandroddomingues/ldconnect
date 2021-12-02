<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
//$contrato = "";
// echo "<script> alert(\"inicio\");</script>";
//if ( $_POST["contrato"] !=""){
  $contrato = $_POST["contrato1"];
 //    echo "<script> alert(\"POST $contrato\");</script>";
//}else{
 //    $contrato = $_GET["contrato"];
 //   echo "<script> alert(\"GET $contrato \");</script>";
//}
//$contrato =;//filter_input(INPUT_POST, 'contrato', FILTER_SANITIZE_STRING);
$cliente = $_POST["cliente"];//filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$codigo = $_POST["codigo"];
$artigo = $_POST["artigo"];
$estoque = $_POST["estoque"];
//insere no banco de dados o numero do contrato
	//$result_usuario = "INSERT INTO AlscoLoteLimpo (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_da_Entrega, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";
//	$result_usuario = "INSERT INTO Inventario_cliente (contrato, cliente,codigo,artigo,estoque) VALUES ('$contrato','$cliente','$codigo','$artigo','$estoque')";
	
//	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
//	if($resultado_usuario){
	    	
//------


$result_user = "SELECT * FROM Controle_cliente_matriz WHERE contrato = '$contrato' ";

// WHERE contrato = '$contrato' 
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
   	
   	
	while($row_user = mysqli_fetch_assoc($resultado_user)){
	    	echo "<td width='250px'><p style='text-align:center;border-bottom:;'> ".$row_user['Contrato']."</p></td>";
	   echo "<td width='250px'><p style='text-align:center;border-bottom:;'> ".$row_user['Nome_Cliente']."</p></td>";
	   echo "<td width='250px' ><p style='text-align:center;border-bottom:;'>".$row_user['Cidade']."</p></td>";
	  
	   //	echo "<div>Cliente: ".$row_user['nome_do_cliente']." Contrato: ".$row_user['contrato']."</div>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}


//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";


//------


//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

//	}else{
//	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

//	}
	
	
	?>