<?php
session_start();

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$dataDaEntrega = $_POST['dataDaEntrega'];
//$arquivo_tmp1 = $_FILES['arquivo']['name'];
//$arquivo_tmp =  str_replace('.xml', '.csv', $arquivo_tmp1);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];




//var_dump($arquivo_tmp);
//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
//var_dump($dados);
$primeira_linha = true;
foreach($dados as $linha){
	$linha = trim($linha);
if($primeira_linha == false){
	$valor = explode(';', $linha);
//	var_dump($valor);

	$Matricula          = $valor[0];
	$Nome_Funcionario   = $valor[1];
	$Chapa              = $valor[2];
	$Armario            = $valor[3];
	$Gaveta             = $valor[4];
	$Nome_Setor         = $valor[5];
	$Centro_de_Custo    = $valor[6];
	$Tipo_Movimento     = $valor[7];
	$Produto_Contrato   = $valor[8];
	$Novo_Especial      = $valor[9];
	$Tamanho            = $valor[10];
	$Quantidade         = $valor[11];
	$Obs_Estoque        = $valor[12];
	$GME                = $valor[13];
	$Contrato           = $valor[14];
	$Contrato           = substr($Contrato, 0, -1);
	$Codigo_De_Barras   = $valor[15];
	$dataDaEntrega1     = $dataDaEntrega;

	
	
//	$result_usuario = "INSERT INTO  AlscoLoteSujo (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_do_Envio, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";
	$result_usuario = "INSERT INTO Inventario_produto (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_da_Entrega, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);

}
			$primeira_linha = false;
}
	if($resultado_usuario){
	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

	}else{
	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

	}
//$_SESSION['msg'] = "<p style='color: green;'>Carregado os dados com sucesso!</p>";
//header("Location: index.php");

//echo = "<p style='color: green;'>Carregado os dados com sucesso!</p>"
?>