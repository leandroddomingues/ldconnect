<?php
	include_once("conexao.php");
	
	 $_SESSION["idfb"] = "";
	 	$id=$_POST['id'];
	$title=$_POST['title'];
	$description= "";
	$availability= "";
	$condition= "";
	$price= "";
	$link= $_POST['link'];
	$image_link= "";
	$brand= "";
	$google_product_category= "";
	$fb_product_category= "";
	$quantity_to_sell_on_facebook= "";
	$sale_price= "";
	$sale_price_effective_date= "";
	$item_group_id= "";
	$gender= "";
	$color= "";
	$size= "";
	$age_group= "";
	$material= "";
	$pattern= "";
	$shipping= "";
	$shipping_weight= "";
	$style= "";
	
//	$nome_imagem = $_FILES['arquivo']['name'];
//$nome_imagem = $arquivo['name'][$controle];
//	echo "Nome do produto: $nome <br>";
//	echo "Nome da Imagem do produto: $nome_imagem <br>";
	
	//Salvar no banco de dados

	
	
$sql="SELECT * FROM ShopFaceBook WHERE id = '$id'";

$rs=mysql_query($sql,$conn) or die(mysql_error());

//  echo 	die(mysql_error());//die("Falha na conexao: " . mysqli_error());
$result=mysql_fetch_array($rs);

  echo "o";
$total = mysql_num_rows($rs);


		if($total > 0 ) {
	
	

    $idd=  $result["id"];
    $vowels = array("https://connect-com-br.umbler.net/produto/");
$myoldfolder = str_replace($vowels, "", $result["link"]);
$myoldfolder = "/$myoldfolder";//"../".$myoldfolder;
//		echo realpath(dirname(__FILE__)).$myoldfolder;
rename('../produto/'.$myoldfolder.'/','../produto/'.$titulo.'/');
//rename(realpath(dirname(__FILE__)).'/myoldfolder',realpath(dirname(__FILE__)).'/mynewfolder');

	 mysql_query("UPDATE ShopFaceBook SET  link='$link', title='$title'  WHERE id='$id'");
	
	
	echo "Atualizado";

	
	}else{
	    
	    
	
	
	
	$result_produto = "INSERT INTO ShopFaceBook (title,description,availability,condition1,price,link,image_link,brand,google_product_category,fb_product_category,quantity_to_sell_on_facebook,sale_price,sale_price_effective_date,item_group_id,gender,color,size,age_group,material,pattern,shipping,shipping_weight, style) 
	VALUES ('$title','$description','$availability','$condition','$price','$link','$image_link','$brand','$google_product_category','$fb_product_category','$quantity_to_sell_on_facebook','$sale_price'	,'$sale_price_effective_date'	,'$item_group_id'	,'$gender'	,'$color'	,'$size'	,'$age_group'	,'$material'	,'$pattern'	,'$shipping'	,'$shipping_weight'	,'$style')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id = mysqli_insert_id($conn);
	echo "Ultimo Id Inserido: $ultimo_id <br>";
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'imagens/produtos/'.$ultimo_id.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	//Verificar se é possive mover o arquivo para a pasta escolhida
	
	
	$nomes = "";
$diretorio ='imagens/produtos/'.$ultimo_id.'/';

if(!is_dir($diretorio)){ 
	echo "Pasta $diretorio nao existe";
}else{
    
    $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
	for ($controle = 0; $controle < count($arquivo['name']); $controle++){
	   
		$nn = $ultimo_id."/".$arquivo['name'][$controle].",";
		$nomes =$nomes."https://connect-com-br.umbler.net/EnviarParaOFacebook/imagens/produtos/$nn";
		
		$destino = $diretorio."/".$arquivo['name'][$controle];
		    
		if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
		    
		//	echo "Upload realizado com sucesso<br>"; 
		}else{
			echo "Erro ao realizar upload";
		}
	
	}
	echo  "<br>".substr($nomes, 0, -1);
}
	
	////
//	if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_UP['pasta'].$nome_imagem)){
	
//		echo "Imagem salva com sucesso!<br>";
//	}
	}
?>

