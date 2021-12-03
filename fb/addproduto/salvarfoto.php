<?php
	include("conectaProd.php");
	
	$id = $_POST["id"];
	//$nome=$_POST['nome'];
	$nome_imagem = $_FILES['arquivo']['name'];
	echo "Nome do produto: $nome <br>";
	echo "Nome da Imagem do produto: $nome_imagem <br>";
	
	
$sql="SELECT * FROM ShopFaceBook WHERE id = '$id'";

$rs=mysql_query($sql,$conn) or die(mysql_error());

//  echo 	die(mysql_error());//die("Falha na conexao: " . mysqli_error());
$result=mysql_fetch_array($rs);

  
$total = mysql_num_rows($rs);


		if($total > 0 ) {
		    
		     $vowels = array("https://connect-com-br.umbler.net/produto/");
		     $myoldfolder = str_replace($vowels, "", $result["link"]);
		     $titulo = "/$myoldfolder";
		     
		     //'../produto/'.$titulo.'/';
		    
		
	//Salvar no banco de dados
	/*
	$result_produto = "INSERT INTO ShopFaceBook (nome, imagem) VALUES ('$nome', '$nome_imagem')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id = mysqli_insert_id($conn);
	echo "Ultimo Id Inserido: $ultimo_id <br>";
	
	*/
	//Pasta onde o arquivo vai ser salvo: public/fb/produto/qp
	$_UP['pasta'] = '../../produto/'.$titulo.'/imagens/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	//Verificar se é possive mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_UP['pasta'].$nome_imagem)){
		echo "Imagem salva com sucesso!<br>";
	}
		}

?>