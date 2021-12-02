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
    
    
<br><br>

<div align="center">    
  <img style="width:90%;max-width:200px;min-width:150px;" 
src="http://ventodedeus.com.br/leitor/image843.png" width="" height="" ></img>

<button style="visibility:hidden;"id="botaoleitura">
    Leitura
</button>
<button style="visibility:hidden;"id="botaodigitar">
    Digitar o código de barras
</button><br><br>


<input id="digitar"type="number">
<div id="res">
  
<form method="GET" action="">
   <div style="visibility:;" id="resultado"></div>
    Pesquisar:<input onChange="this.form.submit()" id="resultado1"type="text" name="codigodebarras" placeholder="PESQUISAR">
   <button id="resultado2" >Pesquisar</button>
</form>
</div>
</div>
<div align="center" class="leitura"id="leitura">
     
    <div id="camera"></div>

    <script src="quagga.js"></script>
    
    <script>
    
    
function id(el) {
  return document.getElementById(el);
}
      
id('botaoleitura').addEventListener('click',function () {

document.getElementById("leitura").style = 'visibility: visible; ';
document.getElementById("res").style = 'visibility: hidden; ';


quagga()
})

id('botaodigitar').addEventListener('click',function () {

document.getElementById("leitura").style = 'visibility: hidden; ';

document.getElementById("res").style = 'visibility: visible; ';
Quagga.stop();
})




  //  $("#leitura").show(function (){

//id('botaoleitura').addEventListener('click',function () {
function quagga() {
Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#camera')    // Or '#yourElement' (optional)
            },
            decoder: {
                readers: ["ean_reader"]
            }
        }, function (err) {
            if (err) {
                console.log(err);
                return
            }
            console.log("Initialization finished. Ready to start");
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            console.log(data.codeResult.code);
            document.querySelector('#resultado').innerText = data.codeResult.code;
        });
}
function cli(){
    
setInterval(function () {
//wixLocation.to("/paginas")
    
    
document.getElementById("resultado2").click();

cli.stop();
}, 3000);
    
    
}

    </script>

</div>


<div align="center" id="listaderesultado">
    </div>
    <div align="center" >
    <h3>Resultado</h3>
  <div id="result" style="visibility:;">  
    <h4>Código de barras n.°: <?php echo $_GET['codigodebarras']?></h4>
    <h4>    Este item foi lavado <span id="lavado" ></span> vez<span id="s"></span></h4>


    <h4>Foi lavado nos dia(s):</h4>
    </div>
    <div  style="height:50px;">

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

<p> '. $venc.'</p>';
       
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
    }else     if (<?php echo $_SESSION['lavado']?> == 1){
        document.getElementById("s").textContent = "";
    }
</script>
</body>

</html>