<!DOCTYPE html>
<html>
    
<?


    session_start();
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
Extrato
		</title>
		
		
		
		<style>

		    input:focus {
		        border:none;
		        border-color:white;
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
<div align="center">
    <img style="margin-left:;width:60%;max-width:400px;" src="https://www.ventodedeus.com.br/imagens/LogoControleFinanceiro.png" width="" height="">
    </div>
    <br>


<div>
    <image onclick="(window.location= '../')"style="margin-top:;margin-left:18px;"height="25px"src="SetaParaEsquerda.png"></image>
   <span  onclick="(window.location= '../')"style="margin-top:2px;position:absolute;">Voltar</span>
 </div>




	<br>



 
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
     
    <div  class="modal-dialog">
    
      <!-- Modal content-->
      <div style="height:600px;" class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button style="color:black;" type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 >Editando um item</h3>
         
         
        </div>
        <div class="modal-body">
          
        
        
<div  style="width: 100%;margin-left:0%; min-height: 90px; max-height: none; height: auto;position:;"class="dropdown" id="formularioRendimento">



<script>
    
window.onload = function() {
    
}
</script>




<?php
$sql1="SELECT * from ControleFinanceiro where id = '".$_GET["id"]."'";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);


	 if($result1['executado'] === "1" )
	 
	 {
	 $exec = checked;
	  }
  elseif($result1['executado'] === "0" )
	 
	 {
	 $exec = "" ;
	  }
        if ($result1['receita'] != ""){
            $recer = "visible";
        }
        if ($result1['despesa'] != ""){
            $desper = "visible";
        }
        
$receder =  $result1['valor'] * -1;
  
$receder2 =  $result1['valorRealizado'] * -1;
$exampleDate = $result1['vencimento'];
$vencimento = date('Y-m-d\TH:i:s', strtotime($exampleDate));



$exampleDate1 = $result1['datadarealizacao'];
$datadarealizacao = date('Y-m-d\TH:i:sP', $exampleDate1);
echo '

<div   style="visibility:'.$recer.';width: 90%; min-height: 90px; max-height: none; height: auto;position:;"class="dropdown" id="formularioRendimento1">
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
          <input type=""name="saldo" value="'.$result1['saldo'].'"></input>
          <br><br>
            <input class="botao"type="submit" >
    </form>
    <br><br>
	<form style=""action="insertApagar.php" method="post">
	  	
<input class= "botao"   style= "color:black;position:;" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result1["id"].'">	

</form><br>
</div>


<div  style="visibility:'.$desper.';width: auto; min-height: 90px; max-height: none; height: auto;position:;"class="dropdown" id="formularioDespesa1">
 		
<form style="margin-left:center; position:;"  method="post" action="enviarEditar.php">
     <h4>Editando despesa</h4> 
        Despesa:  <br><input name="despesa" type="text" id="despesa1" placeholder="Despesa*"  value="'.$result1['despesa'].'"><br>
        Valor: <br><input name="valor"type="money" id="valor" placeholder="Valor*"  value="'.$receder.'"><br>
       Vencimento:<br><input name="vencimento" type="datetime-local" id="vencimento" placeholder="Vencimento*" value="'.$vencimento.'" ><br>
            <h4>Se já foi feito o pagamento, preencha os campos abaixo:</h4>
        Valor pago: <br><input name="valorRealizado"type="money" id="valorRealizado" placeholder="Valor recebido"  value="'.$receder2.'"><br>
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

	
	';
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
      
         Vencimento:<br><input name="vencimento" type="datetime-local" id="" placeholder="Vencimento*" ><br>
        <h4>Se já recebeu, preencha os campos abaixo:</h4>  
        <input name="valorRealizado"type="text" id="valorRealizado1" placeholder="Valor recebido"  ><br>
           Recebido em:<br><input name="dataDeRealizacao"type="datetime-local" id="" placeholder="data de realização*" > <br>
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
<br><h2 style="font-family: fantasy;"><strong>EXTRATO</strong></h2>
<button id="btnfechar" class="botao" onclick="btnfechar()" style="visibility:hidden;float:right; background-color:transparent;">
Fechar
</button><br>



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
    
    
    
 // document.getElementById("btn123").click();
//if (document.getElementById("btn").value != "")
 //{
    // document.getElementById("btn123").click();
 //}
 
 
//function enviar21() {
   // document.getElementById("teste").submit();
   // document.getElementById("submitSimular").click();
//}
}



$(document).ready(function(){
    if (<?php echo $_GET['id']?> != "0")
//   $("#textocoment").click(function() {
{
     document.getElementById("btn123").click();
}    
     
   //});
   
});
</script>
 
 

 		
  
  

<script type="text/javascript">
function id(el) {
  return document.getElementById( el );
}
function total( valor1, qnt ) {
  return parseFloat(valor1.replace(',', '.'), 10) * parseFloat(qnt.replace(',', '.'), 10);
    
}
window.onload = function() {
     var result = total(  id('valor1').value , id('qnt').value );
  id('total').value ="R$ " + String(result.toFixed(2)).formatMoney();
  
  id('valor1').addEventListener('keyup', function() {
    var result = total( this.value , id('qnt').value );
    id('total').value ="R$ " + String(result.toFixed(2)).formatMoney();
  });

  id('qnt').addEventListener('keyup', function(){
    var result = total( id('valor1').value , this.value );
    id('total').value ="R$ " + String(result.toFixed(2)).formatMoney();
  });


}

String.prototype.formatMoney = function() {
  var v = this;

  if(v.indexOf('.') === -1) {
    v = v.replace(/([\d]+)/, "$1,00");
  }

  v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
  v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
  v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");

  return v;
};

		   
</script>


    <div align="center" >
 
<div style="min-width:300px;width:30%;">
<div  style="background-color: #fdffbdff ; min-width:280px;max-width:50%;width:50%;margin-left:-3%; min-height: 90px; 
max-height: none; height: auto; visibility:visible;"
id="divprin" align="center" >
<br>
       
<div style="margin-left:30%;">
Saldo atual:


<?php


$idusuario = $_SESSION['usuarioId'];
$sql21="SELECT SUM(valorRealizado) AS total from ControleFinanceiro WHERE executado= '1' && id_usuario = '$idusuario'";
$rs21=mysql_query($sql21,$conn) or die(mysql_error());
$result21=mysql_fetch_array($rs21);
//$qwsaq = ;
echo '
<strong>R$ '.$result21['total'].'</strong>
';
	?>
	</div></br>
<?php 
// where titulo = '".$_GET["titulo"]."' "

$idusuario = $_SESSION['usuarioId'];
$sql="SELECT * from ControleFinanceiro WHERE executado= '1' && id_usuario = '$idusuario'  ORDER BY vencimento DESC" ;
$rs=mysql_query($sql,$conn) or die(mysql_error());
$result=mysql_fetch_array($rs);
        
$total = mysql_num_rows($rs);
	//	$resultado = $result['SUM(valor)'];
		
		     
		                 
 $lin= $result['vencimento'];
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
$olddata = $lin;
$data = str_replace('/', '-', $olddata);
 $venc =  strftime("%d de %B de %Y", strtotime($data)) ; 
        
                     
          //---------------------------
 if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {  
		    
if ($result['vencimento'] != $result['datadarealizacao']){
   $lin= $result['datadarealizacao']; 
}
if ($result['vencimento'] == $result['datadarealizacao']){
   $lin= $result['vencimento']; 
}
 
 
		//    $venc = $result["vencimento"];
		    if($result["receita"] != "") {
		 
		    $rec_des  =  $result["receita"];
		 
		   	
	
		  }
		    if($result["despesa"] != "") {
		    $rec_des  =  $result["despesa"];
		   
	 }
		     if( $result["valor"] != $result["valorRealizado"]) {
		   $val =  $result["valorRealizado"];
		   
		  }
		    if( $result["valor"] == $result["valorRealizado"]) {
		    $val =  $result["valor"] ;
		
	 }
if($val < 0) {
    $pr = "Pago em: ";
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor1 = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor1 = "green";
}


	  
		    	for($i = 1; $i <= 1; $i++)
		    {
                      
?>

    <?php
    
echo '<div>

<div style="margin-top:-10%;position:absolute;" id="'.$result["id"].'"></div>


<div align="left"style="margin-left:3%;width:100%; float:left;">
<img style="margin-left:-2%;" src="'.$img.'" width="10" height="12" ></img>
<strong style="margin-left:0%;" id="qnt" >'.$rec_des.'</strong>
<span style="float:right;margin-right:10%;color:'.$cor1.';">R$ '.$val.'  </span>

<br>
<span style="margin-left:-2%;"  ><strong>'.$pr.'</strong> '.$venc.'</span>

<form  action="" method="get"     >
<button  
id="editar"  type="submit" name="id" id="idPessoa" class="botao"  
value="'. $result["id"].'"  >Editar</button>
</form>

</div>
 
<hr align="center" style="border-color:black;"width="80%"/>
</div>
';
           
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

window.onload = function() {

function rolar_para(elemento) {
  $('html, body').animate({
    scrollTop: $(elemento).offset().top
  }, 1000);
}

 rolar_para('#<?php echo $_SESSION["div5"]?>');
 


if(document.getElementById("rendimento1").value != "" ) {
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
document.getElementById("formularioRendimento1").style = 'visibility: visible; ';
}
else
 {
document.getElementById("formularioDespesa1").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
}
   
   
//$(".valor1").blur(function(){
            //declaro uma var para somar o total


   
}
  //$(function(){

//  var editavelvlr = 0;

    //$( ".editavelvlr" ).each(function() {
    //editavelvlr += parseInt($( this ).text());
//    });
 //  $( "#qtdtotal" ).text(editavelvlr);
    
  
      
  //});
</script>




    
    

<button data-toggle="modal" data-target="#myModal3"id="btn123"  style="visibility:hidden;">

    
    


</body>




</html>