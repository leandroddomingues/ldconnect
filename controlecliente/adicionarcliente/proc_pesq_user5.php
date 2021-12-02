<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
	 
		/*--
Contrato,NomeCliente,Endereco,Numero_endereco,Cidade,Estado,Cep
-->*/		 
      	

$ContratoContato = $_POST["ContratoContato"];//filter_input(INPUT_POST, 'contrato', FILTER_SANITIZE_STRING);
$Nome_contato = $_POST["Nome_contato"];//filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$Email_contato = $_POST["Email_contato"];
$Telefone_contato = $_POST["Telefone_contato"];
$Funcao_contato = $_POST["Funcao_contato"];
$Nome_Setor = $_POST["Nome_Setor"];
//$Cep = $_POST["Cep"];

//echo $Contrato $NomeCliente $Endereco $Numero_endereco $Cidade $Estado $Cep;
//insere no banco de dados o numero do contrato
	//$result_usuario = "INSERT INTO AlscoLoteLimpo (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_da_Entrega, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";
//	$result_usuario = "INSERT INTO Inventario_cliente (contrato, cliente,codigo,artigo,estoque) VALUES ('$contrato','$cliente','$codigo','$artigo','$estoque')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
//	if($resultado_usuario){
	    	
$result_user = "SELECT * FROM Controle_cliente_contato  WHERE Contrato = '$ContratoContato' && Nome_contato ='$Nome_contato'";

// WHERE contrato = '$contrato' 
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";

     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
        echo "<script>alert('Contato já existe!');</script>";
        $result_userx = "SELECT * FROM Controle_cliente_contato  WHERE Contrato = '$ContratoContato' ";

// WHERE contrato = '$contrato' 
$resultado_userx = mysqli_query($conn, $result_userx);

	while($row_userx = mysqli_fetch_assoc($resultado_userx)){
	
	
	  echo "<table  style='border-bottom:1pt solid black;width:100%;'>";
echo "<tr>";
//echo "<th width='250px'></th> ";
echo "<th width='250px'></th> ";
echo "<th width='250px'></th> ";
echo "<th width='250px'></th> ";
echo "<th width='250px'></th> ";
echo "<th width='250px'></th> ";

echo "</tr> ";

   echo "<tr>";
   
  //ContratoContato, Nome_contato, Email_contato, Telefone_contato, Funcao_contato,Nome_Setor, Contrato

	  // 	echo "<td width='250px'><p style='text-align:center;'> ".$row_user['Contrato']."</p></td>";
	   	echo "<td width='400px'><p style='text-align:center;'>".$row_userx['Nome_Contato']."</p></td>";
	   	echo "<td width='100px'><p style='text-align:center;'>".$row_userx['Email_contato']."</p></td>";
	   	echo "<td width='100px'><p style='text-align:center;'>".$row_userx['Telefone_contato']."</p></td>";
	   	echo "<td width='100px'><p style='text-align:center;'>".$row_userx['Funcao_contato']."</p></td>";
	   echo "<td width='100px'><p style='text-align:center;'>".$row_userx['Nome_Setor']."</p></td>";
	 
	   
	   	echo "</tr>";
	echo "</table>";
	}

}else{

    
	$result_usuario = "INSERT INTO Controle_cliente_contato (Nome_contato, Email_contato, Telefone_contato, Funcao_contato,Nome_Setor, Contrato) VALUES ('$Nome_contato', '$Email_contato', '$Telefone_contato', '$Funcao_contato','$Nome_Setor','$ContratoContato')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
	if($resultado_usuario){
	    /*	Contrato,NomeCliente,Endereco,Numero_endereco,Cidade,Estado,Cep*/
	    	
$result_user54 = "SELECT * FROM Controle_cliente_contato  WHERE Contrato = '$ContratoContato'";

// WHERE contrato = '$contrato' 
$resultado_user54 = mysqli_query($conn, $result_user54);

if(($resultado_user54) AND ($resultado_user54->num_rows != 0 )){
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";

     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
        
	while($row_user54 = mysqli_fetch_assoc($resultado_user54)){
	
	
	  echo "<table  style='border-bottom:1pt solid black;width:100%;'>";
echo "<tr>";
//echo "<th width='250px'></th> ";
echo "<th width='250px'></th> ";
echo "<th width='400px'></th> ";
echo "<th width='100px'></th> ";
echo "<th width='100px'></th> ";
echo "<th width='100px'></th> ";

echo "</tr> ";

   echo "<tr>";
   
 // ContratoContato, Nome_contato, Email_contato, Telefone_contato, Funcao_contato,Nome_Setor, Contrato

//	   	echo "<td width='250px'><p style='text-align:center;'> ".$row_user54['Contrato']."</p></td>";
	   	echo "<td width='400px'><p style='text-align:center;'>".$row_user54['Nome_Contato']."</p></td>";
	   	echo "<td width='100px'><p style='text-align:center;'>".$row_user54['Email_contato']."</p></td>";
	   	echo "<td width='100px'><p style='text-align:center;'>".$row_user54['Telefone_contato']."</p></td>";
	   	echo "<td width='100px'><p style='text-align:center;'>".$row_user54['Funcao_contato']."</p></td>";
	   echo "<td width='100px'><p style='text-align:center;'>".$row_user54['Nome_Setor']."</p></td>";
	
	
	   	echo "</tr>";
	echo "</table>";
	}

}else{
	echo "Nenhum cliente encontrado ...";
}


//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

	}else{
	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

	}
}


//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

//	}else{
//	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

//	}
	
	
	?>