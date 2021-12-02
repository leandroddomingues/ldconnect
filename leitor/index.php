<!DOCTYPE html>

<html lang="pt">
    <?php


    session_start();
    
include('conexao.php');	

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Leitura de código de barras </title>
    
    <style>
#digitar{
    visibility:hidden;
}
.leitura{
    visibility:hidden;
}
video {

max-width: 300px;	
  width: 100%;
  height: auto;
  
}
canvas {
  display: none;
}
        
    </style>
</head>

<body>
    
    
    
<div align="center">    
  <img style="width:90%;max-width:200px;min-width:150px;" 
src="http://ventodedeus.com.br/leitor/Logo_ALSCO.png" width="" height="" ></img>


  
<form method="GET" action="">
    
   <input onChange="this.form.submit()" id="resultado1"type="text" name="codigodebarras" placeholder="PESQUISAR">
   <button id="resultado2" >Pesquisar</button>
</form>
<input id="digitar"type="number">
</div>





<div align="center" id="listaderesultado">
    </div>
    <div align="center" >
    <h3>Resultado</h3>
  <div id="result" style="visibility:;">  
  
  
  
<?php
$codigodebarras = $_GET['codigodebarras'];
$sql11="SELECT * FROM Leitura WHERE codigodebarras= '$codigodebarras'   ORDER BY data ASC";
$rs11=mysql_query($sql11,$conn) or die(mysql_error());
$result11=mysql_fetch_array($rs11);
        
$total11 = mysql_num_rows($rs11);
 //   if ($total1>0)else{$s = "s"};
   // if ($total1 == 0)else{$s = ""};
	$_SESSION['lavado'] = $total1;
	
	if ($codigodebarras != ""){
	$visib = 'visible';}else{
	    $visib ='hidden';
	}
// if($total11 > 0) {
	  
		// inicia o loop que vai mostrar todos os dados
		
		echo ' <h4>Código de barras n.°: '.$codigodebarras.'</h4>
		<h4 id="h4"style="visibility:'.$visib.';">    Este item foi lavado 
		<span id="lavado" ></span> vez<span id="s"></span> 
		no<span id="s1"></span>
		 dia<span id="s2"></span>:</h4>

'
	
//	}
?>
  
  
  
   
    

   
    </div>
    <div  align="center"style="height:50px;width:200px;">

<?php
$codigodebarras = $_GET['codigodebarras'];
$sql1="SELECT * FROM Leitura WHERE codigodebarras= '$codigodebarras'   ORDER BY data ASC";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);
        
$total1 = mysql_num_rows($rs1);
 //   if ($total1>0)else{$s = "s"};
   // if ($total1 == 0)else{$s = ""};
	$_SESSION['lavado'] = $total1;
	
 if($total1 > 0) {
	  
		// inicia o loop que vai mostrar todos os dados
		do {
	
             
		                 
 $lin= $result1['data'];
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
$olddata = $lin;
$data = str_replace('/', '-', $olddata);
 $venc =  strftime("%d de %B de %Y", strtotime($data)) ; 
        
		
	  
	  	for($i = 1 ;$i <=1; $i++);
	  
              
		    {
             
		    
echo '

<p style="text-align:left;"> '. $venc.'</p>';
       
                  }
                  
	// finaliza o loop que vai mostrar os dados
		}while($result1 = mysql_fetch_assoc($rs1));
	// fim do if
	
	}
?>

<hr align="center"width="200px"/>
</div>
</div>
<script>
    


    document.getElementById("lavado").textContent = <?php echo $_SESSION['lavado']?> ;
    
    if (<?php echo $_SESSION['lavado']?> >> 1){
        document.getElementById("s").textContent = "es";
        document.getElementById("s1").textContent = "s";
        document.getElementById("s2").textContent = "s";
    }else     if (<?php echo $_SESSION['lavado']?> == 1){
        document.getElementById("s").textContent = "";
         document.getElementById("s1").textContent = "";
          document.getElementById("s2").textContent = "";
    }else if (<?php echo $_SESSION['lavado']?> == 0){
    //document.getElementById("h4").style.visibility = "hidden";
    document.getElementById("h4").style.color = "red";
    document.getElementById("h4").textContent = "ITEM NÃO ENCONTRADO!";
        
    }
    
</script>
</body>

</html>