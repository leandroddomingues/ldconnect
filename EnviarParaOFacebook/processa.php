<?php
	include_once("conexao.php");
	$nome=$_POST['nome'];
	$nome_imagem = $_FILES['arquivo']['name'];
	echo "Nome do produto: $nome <br>";
	echo "Nome da Imagem do produto: $nome_imagem <br>";
	
	//Salvar no banco de dados
	$result_produto = "INSERT INTO produtos (nome, imagem) VALUES ('$nome', '$nome_imagem')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id = mysqli_insert_id($conn);
	echo "Ultimo Id Inserido: $ultimo_id <br>";
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'imagens/produtos/'.$ultimo_id.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	//Verificar se é possive mover o arquivo para a pasta escolhida
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_UP['pasta'].$nome_imagem)){
		echo "Imagem salva com sucesso!<br>";
	}

?>