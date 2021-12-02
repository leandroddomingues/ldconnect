<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
//$contrato = "";
// echo "<script> alert(\"inicio\");</script>";
//if ( $_POST["contrato"] !=""){
    $contrato = $_POST["contrato1"];
   //  echo "<script> alert(\"POST\");</script>";
//}else{
  //   $contrato = $_GET["contrato"];
     //echo "<script> alert(\"GET\");</script>";
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
	       	
$result_user12 = "SELECT * FROM Inventariado  WHERE Contrato = '$contrato' ORDER BY DataDaLeitura DESC ";

// WHERE contrato = '$contrato' 
$resultado_user12 = mysqli_query($conn, $result_user12);

if(($resultado_user12) AND ($resultado_user12->num_rows != 0 )){
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";

     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
        
	while($row_user12 = mysqli_fetch_assoc($resultado_user12)){
	
	$contrato1 = $row_user12['Contrato'];
	//echo "<script>alert(\"$contrato_\");</script>";
	$Matricula1 = $row_user12['Matricula'];
    $Nome_Funcionario1 = $row_user12['Nome_Funcionario'];
    $Chapa1 = $row_user12['Chapa'];
    $Armario1 = $row_user12['Armario'];
    $Gaveta1 = $row_user12['Gaveta'];
    $Nome_Setor1 = $row_user12['Nome_Setor'];
    $Centro_de_Custo1 = $row_user12['Centro_de_Custo'];
    $Tipo_Movimento1 = $row_user12['Tipo_Movimento'];
    $Produto_Contrato1 = $row_user12['Produto_Contrato'];
    $Novo_Especial1 = $row_user12['Novo_Especial'];
    $Tamanho1 = $row_user12['Tamanho'];
    $Quantidade1 = $row_user12['Quantidade'];
    $Obs_Estoque1 = $row_user12['Obs_Estoque'];
    $GME1 = $row_user12['GME'];
    $Contrato1 = $row_user12['Contrato'];
    $Codigo_de_barras1= $row_user12['Codigo_De_Barras'];
    $Data_de_fabricacao1 = $row_user12['Data_de_fabricacao'];
    $Item1 = $row_user12['Item'];
    $DataDaLeitura1 = $row_user12['DataDaLeitura'];
//Matricula,Nome_Funcionario,Chapa,Armario,Gaveta,Nome_Setor,Centro_de_Custo,Tipo_Movimento,Produto_Contrato,Novo_Especial,Tamanho,Quantidade,Obs_Estoque,GME,Contrato,Codigo_de_barras,Data_de_fabricacao
echo "<tr>";
	    	echo "<td width='250px'><p style='text-align:center;border-bottom:1pt solid black;'> ".$Nome_Funcionario1."</p></td>";
	   echo "<td width='250px'><p style='text-align:center;border-bottom:1pt solid black;'> ".$Item1."</p></td>";
	   echo "<td width='250px' ><p style='text-align:center;border-bottom:1pt solid black;'> ".$Codigo_de_barras1."</p></td>";
	      echo "<td width='250px' ><p style='text-align:center;border-bottom:1pt solid black;'> ".$DataDaLeitura1."</p></td>";
	   
	   
	echo "</tr>";

	}
	}else{
	    echo "Houve um erro ao inserir...";
	}


//------

//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

//	}else{
//	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

//	}
	
	
	?>