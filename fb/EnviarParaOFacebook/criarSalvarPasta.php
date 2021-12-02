<?php
	include("conectaProd.php");
	
	$id = $_POST["id"];
	$titulo=$_POST['titulo'];
	$link = "https://connect-com-br.umbler.net/produto/".$titulo;

	
	$title=$_POST['title'];
	$description= "";
	$availability= "";
	$condition= "";
	$price= "";
	//$link= "";
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
	/*
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
    
$sql1="SELECT * from ShopFaceBook WHERE  WHERE id='$id'";
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
*/
	
	

	
$sql="SELECT * FROM ShopFaceBook WHERE id = '$id'";

$rs=mysql_query($sql,$conn) or die(mysql_error());

//  echo 	die(mysql_error());//die("Falha na conexao: " . mysqli_error());
$result=mysql_fetch_array($rs);

  
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
	
	echo "Produto atualizado!";
	}else{
	    
	    /////
	    $sql1="INSERT INTO ShopFaceBook (id, title, link)
VALUES  
('$id','$title','$link')";
//A instrução POST recupera os dados do formulário.

if (!mysql_query($sql1,$conn))
//if (!mysqli_query($conn,$sql1))
  {
  die('Erro: ' . mysqli_error($conn));
  }
  else {
      	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = '../produto/'.$titulo.'/';//;'../produto/'.$ultimo_id.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	
$conteudo = '<?php 
session_start();

include (\'../../conectaPost.php\');


$sql1="SELECT * from ShopFaceBook WHERE id= \'".$id."\' ";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);

$total = mysql_num_rows($rs1);




		if($total > 0 ) { 
		    
		// inicia o loop que vai mostrar todos os dados
		do {
		    
	for($i=0; $i<1; $i++);
	{
	   
echo \'<div align="left">
<p   style="font-size:9pt; white-space: pre-wrap;font-family: Comic Sans Ms; text-align: left;margin-left:0%; width:70%;">\'.$result1["title"] .\'</p><br>
<p   style="margin-top:-2%; white-space: pre-wrap;font-family: Comic Sans Ms; text-align: left;margin-left:5%; width:70%;">\'.$result1["link"] .\'</p>

<hr>
</div>\';
	
              
		}	
         
         
                            
              ?>
              
              

<?php
	
// finaliza o loop que vai mostrar os dados
		}while($result1=mysql_fetch_array($rs1));
	// fim do if
	
	
	}


?>';
$fp = fopen('../produto/'.$titulo.'/index.php','wb');
fwrite($fp,$conteudo);
fclose($fp);

		echo 
		
		
		
		
		
		
		
		
		 ''




;


		
		
		
  }
mysqli_close($conn);
	    /////
	    
	
	}

	
	
	?>