<?php
	include_once("conexao.php");
	
	$id = $_POST["id"];
	$titulo=$_POST['titulo'];
	$link = "https://connect-com-br.umbler.net/produto/"+ $titulo;
	
	
	$title=$_POST['title'];
	$description= "";
	$availability= "";
	$condition= "";
	$price= "";
	$link= "";
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
	
	
	//Pasta onde o arquivo vai ser salvo
//	$_UP['pasta'] = '../produto/'.$title.'/';//;'../produto/'.$ultimo_id.'/';
	
	//Criar a pasta de foto do produto
//	mkdir($_UP['pasta'], 0777);
	
	/////
	
$diretorio = $link;//'../produto/'.$titulo.'/';
//echo "testedir";
if(!is_dir($diretorio)){

	
		//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = '../produto/'.$title.'/';//;'../produto/'.$ultimo_id.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);

   
//$sql= "INSERT INTO ShopFaceBook (id, title, link) 
//	VALUES ('$id','$title','$link')";

	$result_produto = "INSERT INTO ShopFaceBook (title,link,id) 
	VALUES ('$title','$link','$id')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id = mysqli_insert_id($conn);
		echo "Pasta $diretorio nao existe<br>
		Inserido: $ultimo_id";
}else{
    
$sql1="SELECT * from ShopFaceBook  WHERE id='$id'";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);

$total = mysql_num_rows($rs1);

		if($total > 0 ) {
		   
		    
	$myoldfolder=  $result1["autor"];
	
rename(realpath(dirname(__FILE__)).$myoldfolder,realpath(dirname(__FILE__)).$titulo);
//rename(realpath(dirname(__FILE__)).'/myoldfolder',realpath(dirname(__FILE__)).'/mynewfolder');
	echo "Pasta $diretorio  existe";
	}

//$up = mysql_query("UPDATE ShopFaceBook SET id= '$id',  title='$title', link= '$link' WHERE id='$id'");
 
 

//  echo "Sucesso: Atualizado corretamente!   ";
//	header("Location: ../planejamento/");
//  echo  $_POST['rendimento'];


 
 
	
}
	
	//////
	
	
	



	    ///
	 /*   
	$result_produto = "INSERT INTO ShopFaceBook (id, title, link) 
	VALUES ('$id','$title', '$link')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	
	
	*/

	
	
	
	?>