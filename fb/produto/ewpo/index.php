<?php 
session_start();

include ('../../conectaPost.php');


$sql1="SELECT * from ShopFaceBook WHERE id= '".$id."' ";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);

$total = mysql_num_rows($rs1);




		if($total > 0 ) { 
		    
		// inicia o loop que vai mostrar todos os dados
		do {
		    
	for($i=0; $i<1; $i++);
	{
	   
echo '<div align="left">
<p   style="font-size:9pt; white-space: pre-wrap;font-family: Comic Sans Ms; text-align: left;margin-left:0%; width:70%;">'.$result1["title"] .'</p><br>
<p   style="margin-top:-2%; white-space: pre-wrap;font-family: Comic Sans Ms; text-align: left;margin-left:5%; width:70%;">'.$result1["link"] .'</p>

<hr>
</div>';
	
              
		}	
         
         
                            
              ?>
              
              

<?php
	
// finaliza o loop que vai mostrar os dados
		}while($result1=mysql_fetch_array($rs1));
	// fim do if
	
	
	}


?>