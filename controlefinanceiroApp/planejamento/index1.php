<!DOCTYPE html>

<html lang="pt">
    <?php


    session_start();
   // $_SESSION['dp4'] = "qw";
include('conexao.php');	
if($_SESSION['usuarioNiveisAcessoId'] == "1" ){
			//	header("Location: ../adm");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
			//	header("Location: ../adm");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
			//	header("Location: ../adm");
			}else
			
			{
				header("Location: ../controlefinanceiroApp/login");
			}
?>
<head>
    
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
	
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title>
Planejamento
		</title>
		
		<style>

		    input:focus {
		        border:none;
		        border-color:white;
}
.menu-fixo {
    float:center ;
    top: 0;
    z-index: 99;
    transition: all .5s;
    
}
   
.botao {
	font-weight: bold;
	left: 0;
	font-family: Nimbus Sans;
    background-color: transparent;
    outline: 0;
    text-align: center;
    border-radius: 10px;
	border: 0px;
   font-size: 13pt;
   margin: 2px;
   color: black;
}
.slideUp{
     background-color:white;
    float:center;
  margin-left:10%;
     position: fixed;
   width:80%;
top:15px;
    z-index: 60;
  
}
.slideUp1{ 
    float:center;
  margin-left:10%;
   
   width:80%;
    visibility:visible;
}
.botao:hover {
  color: white;
  background-color:blue;
  transition: color 0.2s 0.10s ease;
  transition: background-color 0.2s 0.05s ease;
  cursor: pointer;
  
  }
.dropdown {
    position:absolute;
width:60%;
margin-left:20%;
visibility:hidden;
}
.dropdown-child {
display: none;
background-color: black;
min-width: 200px;
}
.dropdown-child a {
color: white;
padding: 20px;
text-decoration: none;
display: block;
}
.dropdown:hover .dropdown-child {

}

.modal-header, .close {
    background-color: #5cb85c;
    color:white;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }

		</style>
</head>
<body>

  
    <br>
     <div align="center">
    <img style="margin-left:;width:60%;max-width:400px;" src="https://www.ventodedeus.com.br/imagens/LogoControleFinanceiro.png" width="" height="">
    </div>
   
<div>
    <image onclick="(window.location= '../')"style="margin-top:30px;margin-left:18px;"height="25px"src="SetaParaEsquerda.png"></image>
   <span  onclick="(window.location= '../')"style="margin-top:32px;position:absolute;">Voltar</span>
 </div>
 
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


 	
<h2 align="center"style="font-family: fantasy;"><strong>PLANEJAMENTO</strong></h2>
 	
  
<div class="container">
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button style="color:black;" type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Adicionando um item</h3>
         
         
        </div>
        <div class="modal-body">
          
          
          
        
<div  style="width: auto; min-height: 90px; max-height: none; height: auto;position:relative;"class="dropdown" id="formularioDespesa">
 		
<form style="visibility:visible;"  method="POST" action="enviarDespesa.php">
     <h4>Adicionando despesa</h4> 
       
      <input name="id_usuario" type="hidden" id="id_usuario" placeholder="Id usuario*" value="<?php echo $_SESSION['usuarioId']?>"><br>
      <input name="despesa" type="text" id="" placeholder="Despesa*" ><br>
         <input name="valor"type="text" id="valor" placeholder="Valor*" ><br>
        
          Vencimento:<br><input name="vencimento" type="datetime-local" id="" placeholder="Vencimento*" ><br>
          <h4>Se já pagou, preencha os campos abaixo:</h4>
        
         <input name="valorRealizado"type="text" id="valorRealizado" placeholder="Valor pago"  ><br>
          Pago em:<br><input name="dataDeRealizacao"type="datetime-local" id="" placeholder="data de realização*" > <br>
          <br><input name="executado"type="checkbox" id="" placeholder="executado*" > Pago
          <br><br>
            <input type="submit" id="" placeholder="*" >
    </form>
</div>
        </div>
        <div style="background-color:transparent;"  class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 
   		
   		
   		
<div class="container">
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button style="color:black;"type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionando um item</h4>
         
         
        </div>
        <div class="modal-body">
          
          
        
<div  style="width: auto; min-height: 90px; max-height: none; height: auto;position:relative;"class="dropdown" id="formularioRendimento">
<form style="visibility:visible;" method="POST" action="enviarRendimento.php">
     <h4>Adicionando rendimento</h4> 
     <input name="id_usuario" type="hidden" id="id_usuario" placeholder="Id usuario*" value="<?php echo $_SESSION['usuarioId']?>"><br>
         <input name="rendimento" type="text" id="" placeholder="Rendimento*" ><br>
         <input name="valor"type="text" id="valor" placeholder="Valor*" ><br>
      
         Vencimento:<br><input name="vencimento" type="date" id="" placeholder="Vencimento*" ><br>
        <h4>Se já recebeu, preencha os campos abaixo:</h4>  
        <input name="valorRealizado"type="text" id="valorRealizado1" placeholder="Valor recebido"  ><br>
           Recebido em:<br><input name="dataDeRealizacao"type="date" id="" placeholder="data de realização*" > <br>
          <input name="executado"type="checkbox" id="" placeholder="executado*" > Recebido
          <br><br>
            <input class="botao"type="submit" id="" placeholder="*" >
    </form>
</div>
        </div>
        <div style="background-color:transparent;"  class="modal-footer">
          <button type="button" class="botao" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 
   		









<div align="center">
<button data-toggle="modal" data-target="#myModal"id="adicionarDespesa"  style="background-color:transparent;">
Adicionar despesa
</button>
<button data-toggle="modal" data-target="#myModal2"id="adicionarRendimento"  style=" background-color:transparent;">
Adicionar rendimento
</button>
<br>

<button id="btnfechar" class="botao" onclick="btnfechar()" style="visibility:hidden;float:right; background-color:transparent;">
Fechar
</button>

</div>


    
<script>
function id(el) {
  return document.getElementById( el );
}


//id('editar').addEventListener('click',function () {

//document.getElementById("divprincipal").style = 'visibility: hidden; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
//})


//id('adicionarRendimento').addEventListener('click',function () {
//document.getElementById("divprincipal").style = 'visibility: hidden; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
//})


//id('adicionarDespesa').addEventListener('click',function () {
//document.getElementById("divprincipal").style = 'visibility: hidden; ';
//document.getElementById("formularioDespesa").style = 'visibility: visible; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
//})


//id('btnfechar').addEventListener('click',function () {
function btnfechar() {
document.getElementById("divprincipal").style = 'visibility: visible; ';
document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
document.getElementById("btnfechar").style = 'visibility: hidden; ';
document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
}

  

window.onload = function() {
     
 
 
 // document.getElementById("987").click();
//if (document.getElementById("btn").value != "")
 //{
    // document.getElementById("btn123").click();
 //}
 //if (document.getElementById("987").click() == "true" )
//{< ? $_GET['id'] = 'o'?>}
 
//function enviar21() {
   // document.getElementById("submitSimular").click();
//}
}



</script>
 
 
 
 
 
 
 
  <!-- Modal -->
  <div class="modal fade" id="myModal31" role="dialog">
     
    <div  class="modal-dialog">
    
      <!-- Modal content-->
      <div style="height:600px;" class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button style="color:black;" type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 >Editando um item</h3>
         
         
        </div>
        <div class="modal-body">
          
        
        
<div  style="width: 100%;margin-left:0%; min-height: 90px; max-height: none; height: auto;position:;"class="dropdown" id="formularioRendimento">





<?php


$idusuario = $_SESSION['usuarioId'];
$sql1="SELECT mes FROM ControleFinanceiro where  id = '".$_GET["id"]."' && id_usuario = '$idusuario' GROUP BY mes";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);

  
$total1 = mysql_num_rows($rs23);

	//	$resultado = $result['SUM(valor)'];
//------------------------

          //---------------------------
 if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {  
		    
	 if($result1['executado'] === "1" )
	 
	 {
	 $exec = checked;
	  }
  elseif($result1['executado'] === "0" )
	 
	 {
	 $exec = "" ;
	  }
	  
$exampleDate = $result1['vencimento'];
$vencimento = date('Y-m-d\TH:i:s', strtotime($exampleDate));



$exampleDate1 = $result1['datadarealizacao'];
$datadarealizacao = date('Y-m-d\TH:i:sP', $exampleDate1);
	for($i = 1; $i <= 1; $i++);
		    {
                      
echo '

<div   style="width: 90%; min-height: 90px; max-height: none; height: auto;position:;"class="dropdown" id="formularioRendimento1">


<form style="margin-left:center;position:;" method="post" action="enviarEditar.php">
     <h4>Editando rendimento</h4> 
         Rendimento: <br><input name="rendimento" type="text" id="rendimento1" placeholder="Rendimento*" value="'.$result1['receita'].'"><br>
         Valor: <br><input name="valor"type="money" id="valor" placeholder="Valor*"  value="'.$result1['valor'].'"><br>
       Vencimento:<br><input name="vencimento" type="datetime-local" id="vencimento"  value="'.$vencimento.'" ><br>
          <h4>Se já recebeu, preencha os campos abaixo:</h4>
        Valor recebido: <br><input name="valorRealizado"type="money" id="valorRealizado" placeholder="Valor recebido"  value="'.$result1['valorRealizado'].'"><br>
          Recebido em:<br><input name="datadarealizacao"type="datetime-local" id="datadarealizacao" placeholder="data de realização*"  value="'.$datadarealizacao.'"> <br>
          <input name="executado"type="checkbox" id="executado" placeholder="executado*" '.$exec.' > Recebido
           <input name="id"type="hidden" id="id"   value="'.$result1['id'].'" >
           <input name="id_usuario"type="hidden" id="id"   value="'.$result1['id_usuario'].'" >
          
          <br><br>
            <input class="botao"type="submit" >
    </form>
    <br><br>
	<form style=""action="insertApagar.php" method="post">
	  	
<input class= "botao"   style= "color:black;position:;" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result1["id"].'">	

</form><br>
</div>


<div  style="width: auto; min-height: 90px; max-height: none; height: auto;position:;"class="dropdown" id="formularioDespesa1">
 		
<form style="margin-left:center; position:;"  method="post" action="enviarEditar.php">
     <h4>Editando despesa</h4> 
        Despesa:  <br><input name="despesa" type="text" id="despesa1" placeholder="Despesa*"  value="'.$result1['despesa'].'"><br>
        Valor: <br><input name="valor"type="money" id="valor" placeholder="Valor*"  value="'.$result1['valor'] * '-1'.'"><br>
       Vencimento:<br><input name="vencimento" type="datetime-local" id="vencimento" placeholder="Vencimento*" value="'.$vencimento.'" ><br>
            <h4>Se já foi feito o pagamento, preencha os campos abaixo:</h4>
        Valor pago: <br><input name="valorRealizado"type="money" id="valorRealizado" placeholder="Valor recebido"  value="'.$result1['valorRealizado'].'"><br>
          Pago em:<br><input name="datadarealizacao"type="datetime-local" id="datadarealizacao" placeholder="data de realização*"  value="'.$datadarealizacao.'"> <br>
          <input name="executado"type="checkbox" id="executado" placeholder="executado*" '.$exec.' > Pago
           <input name="id" type="hidden" id=""   value="'.$result1['id'].'" >
          <br><br>
            <input class="botao" type="submit">
    </form>
    <br><br>
	<form  style= "color:black;position:;"  action="insertApagar.php" method="post">
	  	
<input class= "botao"  id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result1["id"].'">	

</form><br>
</div>

	
	';    }
	// finaliza o loop que vai mostrar os dados
		}while( $result1 = mysql_fetch_assoc($rs1));
	// fim do if
	}
?>




</div>



        <div style="background-color:transparent;"  class="modal-footer">
            
            

<form  action="" method="get"     >						
						
 <button type="submit"  class="botao"name="id" value="0"  >Fechar</button>
    

</form>
            
            
             </div>
      </div>
      
    </div>
  </div>
  
</div>




 
 
 
 
<div align="center"class="modal fade" id="myModal3" role="dialog" 
id="divprincipal"  style="position:;float:center;min-height: 90px; 
max-height: none; height: auto;
margin-top:1%;">


    
    

<div style="min-width:300px;width:50%;min-height: 90px; 
max-height: none; height: auto;">
    <div  style="background-color: #fdffbdff ; min-width:280px;max-width:50%;width:50%;margin-left:-3%; min-height: 90px; 
max-height: none; height: auto; visibility:visible;"
id="divprin" align="center" >
<?php 
// where titulo = '".$_GET["titulo"]."' "

$idusuario = $_SESSION['usuarioId'];
$sql23="SELECT * from ControleFinanceiro WHERE executado = '0'  && id = '".$_GET["id"]."' && id_usuario = '$idusuario' ORDER BY vencimento DESC";
$rs23=mysql_query($sql23,$conn) or die(mysql_error());
$result23=mysql_fetch_array($rs23);
        
$total23 = mysql_num_rows($rs23);

	//	$resultado = $result['SUM(valor)'];
//------------------------

          //---------------------------
 if($total23 > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {  
		    
		                 
 $lin= $result23['vencimento'];
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
$olddata = $lin;
$data = str_replace('/', '-', $olddata);
 $venc =  strftime("%d de %B de %Y", strtotime($data)) ; 
  $venc1 =  strftime("Y-m-d", strtotime($lin)); 
  
  
        
          if($result23["receita"] != "") {
		 
		    $rec_des  =  $result23["receita"];
		    $val =  $result23["valor"];
		   	$recebido1 = "Recebido em:";
		   	$recebido2 = "Valor recebido";
		   	$rew = "Realizando recebimento";
		   	$recebido3 = "Recebido";
		   	$recebido4 = "recebeu";
		   	$visu = "visible;";
		   	$visu1 = "hidden";
	
		  }
		    if($result23["despesa"] != "") {
		    $rec_des  =  $result23["despesa"];
		    $val =  $result23["valor"] ;
		   $recebido1 = "Pago em:";
		   $recebido2 = "Valor pago";
		   $rew = "Editando despesa";
		   $recebido3 = "Pago";
		   	$recebido4 = "pagou";
		   	$visu = "hidden";
		   	$visu1 = "visible";
		
	 }
	  
	 
	 if($result23["simulado"] == 1)
	 
	 {
	 $booll = checked;
	  }
	  if($result23["simulado"] != 1)
	 
	 {
	 $booll = "";
	  }



if($val < 0) {
    $pr = "Pago em: ";
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
      $valll = -1 * $result23['valor'];
       $valll2 = -1 * $result23['valorRealizado'];
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
	 $valll =  $result23['valor'];
	  $valll2 =  $result23['valorRealizado'];
}
if ($valll2 == "-0")
{
    $valll2 = 0;
}

if ($valll2 << 0)
{
    $valll2 = $valll2 * -1;
}
//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                    
                    
    
    
echo '<div   style="width: 90%;position:;float:center;"class="" id="formularioRendimento1">
  <div style="background-color: #fdffbdff;"class="modal-header">
        <form style="float:right;position:;margin-top:28px;" action="" method="get"     > 
        <button style="color:black;"  id="987"  type="submit" class="close">&times;</button>
</form>
</div>

<form style="margin-left:;position:;" method="post" action="enviarEditar.php">
     <h4 style="color:'.$cor.';">'.$rew.' </h4> 
     <br><input style=" visibility:'.$visu.'; " name="rendimento"  id="rendimento1" placeholder="Rendimento*" value="'.$result23['receita'].'">
         <input style=" visibility:'.$visu1.'; margin-left:-180px; position:absolute;float:left;" 
         name="despesa"  id="rendimento2" placeholder="Rendimento*" value="'.$result23['despesa'].'"><br>
         Valor: <br><input name="valor"type="money" id="valor" placeholder="Valor*"  value="'.$valll.'"><br>
       Vencimento:<br><input name="vencimento" type="date" id="vencimento"  value="'.$lin.'" ><br>
          <h4 style="color:'.$cor.';">Se já '.$recebido4.', preencha os campos abaixo:</h4>
     
     
       '.$recebido2.' <br><input name="valorRealizado"type="money" id="valorRealizado" 
       placeholder="Valor recebido"  value="'.$valll2. '"><br>
         '.$recebido1.'<br>
         <input name="datadarealizacao"type="date" id="datadarealizacao" placeholder="data de realização*"  value="'.$result23['datadarealizacao'].'"> <br>
          <input name="executado"type="checkbox" id="executado" placeholder="executado*" '.$exec.' > '.$recebido3.'
           <input name="id"type="hidden" id="id"   value="'.$result23['id'].'" >
           <input name="id_usuario"type="hidden" id="id"   value="'.$result23['id_usuario'].'" >
          
          <br><br>
            <input class="botao"type="submit" >
    </form>
    
	<form style=""action="insertApagar.php" method="post">
	  	
<input class= "botao"   style= "color:black;position:;" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result23["id"].'">	

</form><br>
</div>';
           
                  }
	// finaliza o loop que vai mostrar os dados
		}while( $result23 = mysql_fetch_assoc($rs23));
	// fim do if
	}
?>

	</div>
	</div>
</div>


 
 
 
 
 
 
 
<div align="center"class="modal fade" id="myModal5" role="dialog" 
id="divprincipal"  style="position:;float:center;min-height: 90px; 
max-height: none; height: auto;
margin-top:2%;">


    
    
<br>

<div style="min-width:300px;width:50%;min-height: 90px; 
max-height: none; height: auto;">
    <div  style="background-color: #fdffbdff ; min-width:280px;max-width:50%;width:50%;margin-left:-3%; min-height: 90px; 
max-height: none; height: auto; visibility:visible;"
id="divprin" align="center" >
<?php 
// where titulo = '".$_GET["titulo"]."' "

$idusuario = $_SESSION['usuarioId'];
$sql231="SELECT * from ControleFinanceiro WHERE executado = '0'  && id = '".$_GET["idpg"]."' && id_usuario = '$idusuario' ORDER BY vencimento DESC";
$rs231=mysql_query($sql231,$conn) or die(mysql_error());
$result231=mysql_fetch_array($rs231);
        
$total231 = mysql_num_rows($rs231);

	//	$resultado = $result['SUM(valor)'];
//------------------------

          //---------------------------
 if($total231 > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {  
		    
		                 
 $lin= $result231['vencimento'];
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
$olddata = $lin;
$data = str_replace('/', '-', $olddata);
 $venc =  strftime("%d de %B de %Y", strtotime($data)) ; 
        
        
		   // $venc = $result["vencimento"];
		    if($result231["receita"] != "") {
		 
		    $rec_des  =  $result231["receita"];
		    $val =  $result231["valor"];
		   	$recebido1 = "Recebido em:";
		   	$recebido2 = "Valor recebido";
		   	$rew = "Realizando recebimento";
		   	$recebido3 = "Recebido";
		   	$recebido4 = "recebeu";
	
		  }
		    if($result231["despesa"] != "") {
		    $rec_des  =  $result231["despesa"];
		    $val =  $result231["valor"] ;
		   $recebido1 = "Pago em:";
		   $recebido2 = "Valor pago";
		   $rew = "Realizando pagamento";
		   $recebido3 = "Pago";
		   	$recebido4 = "pagou";
		
	 }
	
	  
	 
	 if($result231["simulado"] == 1)
	 
	 {
	 $booll = checked;
	  }
	  if($result231["simulado"] != 1)
	 
	 {
	 $booll = "";
	  }



if($val < 0) {
    $pr = "Pago em: ";
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
}

//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
           
           
    
    
echo '<div   style="width: 90%;position:;float:center;"class="" id="formularioRendimento1">
 
 
  <div style="background-color: #fdffbdff;"class="modal-header">
          <button style="color:black;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
  <h4 style="color:'.$cor.';"><strong>'.$rew.'</strong> </h4> 
   <h2 style="color:'.$cor.';"><strong>'.$rec_des.'</strong></h2><br><br>
     <div align="left"style="margin-top:-10%;">
        
        <span><strong> Valor: </strong></span> <span style="color:'.$cor.';"> R$ '.$result231['valor'].'</span><br>
        <span style="color:;"><strong> Vencimento: </strong> '.$venc.'</span><br>
      </div>
         <br> <h4>Se já '.$recebido4.', preencha os campos abaixo:</h4>
       
      <form method="POST" action="enviarEditar.php">
 
        '.$recebido2.' <input required name="valorRealizado"type="number" id="valorRealizado" placeholder="Valor"  value="'.$result23['valorRealizado'].'"><br>
        <br>  '.$recebido1.' <input required name="datadarealizacao"type="date" id="datadarealizacao" placeholder=""  value="'.$datadarealizacao.'"> <br>
          <input required name="executado"type="checkbox" id="executado" placeholder="executado*" '.$exec.' > '.$recebido3.'
           <input name="id"type="hidden" id="id"   value="'.$result231['id'].'" >
           <input name="id_usuario"type="hidden" id="id_usuario"   value="'.$result231['id_usuario'].'" >
           
           <br>
            <input class="botao"type="submit" >
    </form>
    <br>
    <br>
<form style="position:;margin-top:-20px;" action="" method="get">						
						
<button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:-30px;margin-left:;"   
id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result231["id"].'"  >Editar</button>

</form>
<br>

</div>

';
           
                  }
	// finaliza o loop que vai mostrar os dados
		}while( $result231 = mysql_fetch_assoc($rs231));
	// fim do if
	}
?>

	</div>
	</div>
</div>


 
 
 
 
 
 
 
 
 
<div id="divprincipal" align="center" style="position:;">

<div style="height:25px;">
    
<div class="divsimulacao" id="divsimulacao"align="center">



<div style="">

<?php

$idusuario = $_SESSION['usuarioId'];
$sql4 = "SELECT SUM(valorRealizado) as soma FROM ControleFinanceiro WHERE executado= '1'  && id_usuario = '$idusuario' ";
$rs4=mysql_query($sql4,$conn) or die(mysql_error());
$result4=mysql_fetch_array($rs4);

	
	  
	 if($result4['soma'] < 0)
	 
	 {
	 $cor1 = "red";
	  }
	  
	 if($result4['soma']  > 0)
	 
	 {
	 $cor1 = "green";
	  }
	  

   echo 'Saldo anterior: <strong style="color:'.$cor1.';" > R$ '.$result4['soma'].'</strong>';
    
    ?>
    
    </div>
   
<div style="">
    
   <?php

$idusuario = $_SESSION['usuarioId'];
$sql5 = "SELECT SUM(valor) as soma FROM ControleFinanceiro WHERE executado = '0' && simulado= '1' && id_usuario = '$idusuario'  ";
$rs5=mysql_query($sql5,$conn) or die(mysql_error());
$result5=mysql_fetch_array($rs5);

$vlq = $result4['soma'] + $result5['soma'];
	 if($vlq < 0)
	 
	 {
	 $cor2 = "red";
	  }
	  
	 if($vlq  > 0)
	 
	 {
	 $cor2 = "green";
	  }
	  
   echo '
   Simulação: <strong style="text-align:left;width:100px;color:'.$cor2.'; " > R$ '.$vlq.'</strong> '; ?><!--Resultado da soma dos checkbox-->


</div>
</div>
</div>
<br>

<div style="min-width:300px;width:50%;">
    <div  style="background-color: #fdffbdff ; min-width:280px;max-width:50%;width:50%;margin-left:-3%; min-height: 90px; 
max-height: none; height: auto; visibility:visible;"
id="divprin" align="center" >
<?php 
// where titulo = '".$_GET["titulo"]."' "

$idusuario = $_SESSION['usuarioId'];
$sql="SELECT * from ControleFinanceiro WHERE executado = '0' && id_usuario = '$idusuario' ORDER BY vencimento ASC";
$rs=mysql_query($sql,$conn) or die(mysql_error());
$result=mysql_fetch_array($rs);
        
$total = mysql_num_rows($rs);

	//	$resultado = $result['SUM(valor)'];
//------------------------

          //---------------------------
 if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {  
		    
		                 
 $lin= $result['vencimento'];
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
$olddata = $lin;
$data = str_replace('/', '-', $olddata);
 $venc =  strftime("%d de %B de %Y", strtotime($data)) ; 


		   // $venc = $result["vencimento"];
		    if($result["receita"] != "") {
		 
		    $rec_des  =  $result["receita"];
		    $val =  $result["valor"];
		   	
	
		  }
		    if($result["despesa"] != "") {
		    $rec_des  =  $result["despesa"];
		    $val =  $result["valor"] ;
		   
		
		
	 }
	
	  
	 
	 if($result["simulado"] == 1)
	 
	 {
	 $booll = checked;
	  }
	  if($result["simulado"] != 1)
	 
	 {
	 $booll = "";
	  }



if($val < 0) {
    $pr = "Pago em: ";
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
}



		 $data45       = explode("-", $result['vencimento']);
    $anoNasc    = $data45[0];
    $mesNasc    = $data45[1];
    $diaNasc    = $data45[2];
 
    $anoAtual   = date("Y");
    $mesAtual   = date("m");
    $diaAtual   = date("d");
 
    $idade      = $anoAtual - $anoNasc;
 
    if ($mesAtual < $mesNasc){
        $idade -= 1;
         $corVencimento = "green";
    } elseif ( ($mesAtual == $mesNasc) && ($diaAtual <= $diaNasc) ){
     $idade -= 1;
       $corVencimento = "blue";
       if($diaAtual == $diaNasc){
           $ppp = "Vence hoje!";
           $br = "<br>";
       }else{
           $ppp = "";
       }
    }else
         $corVencimento = "red";



 
// a data passada para a função está no padrão americano
// yyyy-mm-dd
//echo descobrirIdade($dataNasc);   
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '<div style="margin-left:2%;;"align="left">

<div style="margin-top:-10%;position:absolute;" id="'.$result["id"].'"></div>


<form id="teste" method="POST" action="enviarSimular.php">

<div style="height:;width:100%;">
<img style="float:center; margin-left:%;" src="'.$img.'" width="10" height="12" ></img>
<strong style="" id="rec_des" name="rec_des"placeholder="0">'.$rec_des.'</strong>

<div style="float:right; margin-right:1%;" >
<input type="checkbox" onChange="this.form.submit()"  class="simular"id="simular" '.$booll.' name="simular" value="'.$val.'">Simular
<input type="hidden" id="id" name="id" value="'.$result["id"].'">

<span style="color:'.$cor.';"> R$ '.$val.'</span>
</div>
</div>


<div style="width:280px;float:left;">


<span style="color:'.$corVencimento.';">Vencimento: '.$venc.'</span>
'.$br.'<span style="color:'.$corVencimento.';">'.$ppp.'</span>


</div>

<input type="submit" id="submitSimular" value="SIMULAR" style="visibility:hidden; background-color:transparent;border:none;">

<input type="hidden" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">
</form>
	

<form style="position:;margin-top:-20px;" action="" method="get"     >						
						
<button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:-30px;margin-left:-2%;"   
id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Editar/Pagar/Receber</button>

</form>


<form style="float:right;position:;margin-top:-28px;" action="" method="get"     >						
						
<button data-toggle="modal" data-target="#myModal5" style="position:;margin-top:-30px;margin-right:22%;visibility:hidden;"   
id="editar1"  type="submit" name="idpg" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Pagar/Receber</button>

</form>




<hr align="center"width="45%" style="margin-top:-1px;min-width:280px;border-color:black;"/>
</div>';
           
                  }
	// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
	}
?>
	</div>
	</div>


 
 
</div>


<script>

   
 //$(".divteste").show (function() {
     
//$(window).scroll, function(){
//  if(isScrolledIntoView('#btn123')){
   // $('.divsimulacao').addClass('bounceIn');
   
  //}
  //else{
 //  $('#divsimulacao').removeClass('bounceIn');
  //}
//});
 
  function divtestee() {
    document.getElementById("divsimulacao").style = 'visibility: hidden; ';
     
}
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    document.getElementById("divsimulacao").className = "slideUp";
 }
  else 
{
   document.getElementById("divsimulacao").className = "slideUp1";
    
    
}
    
}
window.onload = function() {

//id('editar').addEventListener('click',function () {
//</?php   ?>

//});
    

//if(< ?php $_GET["id"]?> != "") {
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("formularioRendimento1").style = 'visibility: visible; ';
//}
//else
//if(document.getElementById("despesa1").value != '') 
 //{
//document.getElementById("formularioDespesa1").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
//}

  
//id('simular').addEventListener('click',function () {

 
    //funcionando
 
 

  //==========

}


$(document).ready(function(){
    
     if ('<?php echo $_GET['id'] ?>' > 0) {
      document.getElementById("btn123").click();
     }
    
     
function rolar_para(elemento) {
  $('html, body').animate({
    scrollTop: $(elemento).offset().top
  }, 1000);
}
 rolar_para('#<?php echo $_SESSION["dp4"]?>');
 
  //  $("#editar1").click(function() { 




 if ('<?php  echo $_GET['idpg']?>'>0 )
     

{
     document.getElementById("btn1234").click();

}

});

</script>

<?php  $_SESSION["dp4"] = ""?>
</body>
<button class="btn123" data-toggle="modal" data-target="#myModal3"id="btn123"  style="margin-top:-100 px;visibility:;"></button>

    
<button data-toggle="modal" data-target="#myModal5"id="btn1234"  style="visibility:hidden;">

</button>



</html>