<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
	 
		/*--
Contrato,NomeCliente,Endereco,Numero_endereco,Cidade,Estado,Cep
-->*/		 
         
$Contrato = $_POST["Contrato"];//filter_input(INPUT_POST, 'contrato', FILTER_SANITIZE_STRING);
$NomeCliente = $_POST["NomeCliente"];//filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$Endereco = $_POST["Endereco"];
$Numero_endereco = $_POST["Numero_endereco"];
$Cidade = $_POST["Cidade"];
$Estado = $_POST["Estado"];
$Cep = $_POST["Cep"];

//echo $Contrato $NomeCliente $Endereco $Numero_endereco $Cidade $Estado $Cep;
//insere no banco de dados o numero do contrato
	//$result_usuario = "INSERT INTO AlscoLoteLimpo (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_da_Entrega, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";
//	$result_usuario = "INSERT INTO Inventario_cliente (contrato, cliente,codigo,artigo,estoque) VALUES ('$contrato','$cliente','$codigo','$artigo','$estoque')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
//	if($resultado_usuario){
	    	
$result_user = "SELECT * FROM Controle_cliente_matriz  WHERE Contrato = '$Contrato'";

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
	


	  echo "<table  style='border-bottom:1pt solid black;width:100%;'>";
echo "<tr>";
echo "<th width='5%'></th> ";
echo "<th width='26%'></th> ";
echo "<th width='25%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='24%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='10%'></th> ";
echo "</tr> ";

   echo "<tr>";
   
	   	echo "<td width='5%'><p style='text-align:center;'> ".$row_user['Contrato']."</p></td>";
	   	echo "<td width='26%'><p style='text-align:center;'>".$row_user['Nome_Cliente']."</p></td>";
	   	echo "<td width='25%'><p style='text-align:center;'>".$row_user['Endereco']."</p></td>";
	   	echo "<td width='5%'><p style='text-align:left;'>".$row_user['Numero_endereco']."</p></td>";
	   	echo "<td width='24%'><p style='text-align:center;'>".$row_user['Cidade']."</p></td>";
	   echo "<td width='5%'><p style='text-align:left;'>".$row_user['Estado']."</p></td>";
	   echo "<td width='10%'><p style='text-align:center;'>".$row_user['Cep']."</p></td>";
	   
	   	echo "</tr>";
	echo "</table>";
	}

}else{

 
	$result_usuario = "INSERT INTO Controle_cliente_matriz (Contrato, Nome_Cliente, Endereco, Numero_endereco, Cidade, Estado, Cep) VALUES ('$Contrato','$NomeCliente','$Endereco','$Numero_endereco','$Cidade','$Estado','$Cep')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
	if($resultado_usuario){
	    /*	Contrato,NomeCliente,Endereco,Numero_endereco,Cidade,Estado,Cep*/
	    	
$result_user54 = "SELECT * FROM Controle_cliente_matriz  WHERE Contrato = '$Contrato'";

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
echo "<th width='5%'></th> ";
echo "<th width='26%'></th> ";
echo "<th width='25%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='24%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='10%'></th> ";
echo "</tr> ";

   echo "<tr>";
   
	   	echo "<td width='5%'><p style='text-align:center;'> ".$row_user54['Contrato']."</p></td>";
	   	echo "<td width='26%'><p style='text-align:center;'>".$row_user54['Nome_Cliente']."</p></td>";
	   	echo "<td width='25%'><p style='text-align:center;'>".$row_user54['Endereco']."</p></td>";
	   	echo "<td width='5%'><p style='text-align:left;'>".$row_user54['Numero_endereco']."</p></td>";
	   	echo "<td width='24%'><p style='text-align:center;'>".$row_user54['Cidade']."</p></td>";
	   echo "<td width='5%'><p style='text-align:left;'>".$row_user54['Estado']."</p></td>";
	   echo "<td width='10%'><p style='text-align:center;'>".$row_user54['Cep']."</p></td>";
	   
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