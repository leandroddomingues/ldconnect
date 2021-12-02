<!DOCTYPE html>

<html lang="pt">

    <?php


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
			
	//		$_SESSION['div'] ="";
?>
<head>
    
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

 
		<title>
Lista de compras
		</title>
			<style>
			
.botao{
background-color:#f29e76ff;
border:solid 0;
border-radius:30px;

color:white;

font-size:15px;
margin-top:10px;
margin-left:10px;
    
}
.load{
     background-color:white;
   float:center;
   position: fixed;
  opacity:0.8;
  width:100%;
  height:100%;
     right:50;
   top: 0;
    z-index: 60;
visibility:visible;
		    
		}
.load1{
    
 visibility:visible;
    float:center;
 
     position: fixed;
   right:50;
   top: 0;
    z-index: 60;
height:100px;
    margin-top:80%;
   margin-left:35%;
}
.imgr1{
     background-color:white;
   float:center;
   position: fixed;
  opacity:0.6;
  width:100%;
  height:100%;
     right:50;
   top: 0;
    z-index: 60;
visibility:hidden;
   
}
.imgr{
    
 visibility:hidden;
    float:center;
   margin-left:40%;
     position: fixed;
   right:50;
   top: 0;
    z-index: 60;
height:100px;
    margin-top:20%;
   margin-left:45%;

}
.slideUp{
    
     background-color:white;
    float:center;
   margin-left:40%;
     position: fixed;
   right:50;
   top: 0;
    z-index: 60;
width:60%;
    margin-top:20px;
   margin-left:50px;


   top: 0;
    z-index: 60;
  
}
.slideUp1{
    float:center;
    visibility:visible;
}
.tirar{
    visibility:hidden;
}
		    input:focus {
		        border:none;
		        border-color:white;
}
.dropdown {
  
  

}
.dropdown-child {
display: none;
background-color: black;


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
   width:90%;
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
    <div id="load"class="imgr1">  </div>
    <div id="load1"class="imgr">
 
 
    <br>
    
    <strong style="font-size:18px;">Aguarde...</strong>
   </div>
   <div>
    <image onclick="(window.location= '../')"style="margin-top:30px;margin-left:18px;"height="25px"src="SetaParaEsquerda.png"></image>
   <span  onclick="(window.location= '../')"style="margin-top:32px;position:absolute;">Voltar</span>
 </div>
 <h2 style="font-family: fantasy;" align="center"><strong>Lista de compras</strong></h2>
   <br>
   <div style="display: none;position:absolute;width:80%;float:left;margin-left:40%;margin-top:10%;">Para editar, clique no campo.</div>
   
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



   	
<div class="container" style=" ">
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div style="  width:90%;"class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionando um item</h4>
         
         
        </div>
        <div class="modal-body">
          
          
<div  style="position:;visibility:visible;height:300px;"class="dropdown" id="formularioRendimento231">



   
   <form style="margin-left:center;" method="post" action="enviarItem.php">
     
<label for="categoria">Categoria:</label>
  <select type="" onchange="" name="categoria" id="categoria">
        <option value= "">Escolha</option>
    <?php
       $idusuario = $_SESSION['usuarioId'];
$sqlcat="SELECT *  FROM Categorias  WHERE tabela = 'ListaDeCompras' && id_usuario = $idusuario ORDER BY categoria ASC";
$rscat=mysql_query($sqlcat,$conn) or die(mysql_error());

$resultcat=mysql_fetch_array($rscat);

//utf8_encode($total3);
$totalcat = mysql_num_rows($rscat);

    if($totalcat > 0) {
		// inicia o loop que vai mostrar todos os dados
		    	for($i = 1; $i <= 1; $i++);

do {
		    
		   
		   
                      
                      
	
echo '<option value="'.$resultcat["categoria"].'">'.$resultcat["categoria"].'</option>';  


	}while( $resultcat = mysql_fetch_assoc($rscat));
	// fim do if
	}
?>

</select>

<button id="botaoMais01" type="button"  onclick="btnContato1()" style=" border-radius: 50%; background-color:transparent;" class="botao" >+</button><br>
	
	

	
   
    <input name="id_usuario" type="hidden" id="id_usuario" placeholder="Id usuario*" value="<?php echo $_SESSION['usuarioId']?>"><br>
     
       Item: <input name="item" type="text" id="item" placeholder="Item*" value=""><br>
       Quantidade: <input name="quantidade"type="number" id="quantidade" placeholder="Quantidade"  value=""><br>
         Valor: <input name="valor_unitario"type="money" id="valor_unitario" placeholder="Valor unitário*"  value=""><br>
         <input name="valor_total"type="hidden" id="valor_total" placeholder="Valor total*"  value=""><br>
           <input name="id"type="hidden" id="id"   value="" >
          <input name="avulso" type="hidden" value="0">
          <br><br>
            <input style="background-color:blue;border-radius:5px;color:white;"type="submit" >
    </form>

    	<div id="novacat1"style="visibility:hidden;margin-top:-200px;position:relative;">	 
	
   <form style="margin-left:center;" method="post" action="enviarCategoria.php">
     
     <span id="nc" style="visibility:;">	
<strong>Nova categoria</strong></span><br>
      <input  style="" name="nomeDaCategoria" type="text"      id="nomeDaContegoria" placeholder="Nova categoria" ><br>
    	  <input style="" name="idusuariocat"type="hidden"    value="<?echo $_SESSION['usuarioId']?>"    id="idusuariocat"  ><br>
  <input style="background-color:blue;border-radius:5px;color:white;" name=""type="submit"        id="enviarcat" ><br>	
	   </form>
	   <br>
	    <button id="botaoMais11" type="button"  onclick="btnContato1()" style="background-color:blue ;border-radius:5px;color:white;" class="botao" >Cancelar</button>

</div>
    <br><br>
    
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 	
 
   	
   	
<div class="container" style=" ">
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModalavulso" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div  style="  width:90%;"class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionando um item</h4>
         
         
        </div>
        <div class="modal-body">
          
          
<div  style="position:relative;visibility:visible;height:250px;"class="dropdown" id="formularioRendimento23">



   
   <form style="margin-left:center;" method="post" action="enviarItem.php">
     
     

     



<label for="categoria">Categoria:</label>
  <select type="" onchange="" name="categoria" id="categoria">
        <option value= "">Escolha</option>
    <?php
       $idusuario = $_SESSION['usuarioId'];
$sqlcat="SELECT *  FROM Categorias  WHERE tabela = 'ListaDeCompras' && id_usuario = $idusuario ORDER BY categoria ASC";
$rscat=mysql_query($sqlcat,$conn) or die(mysql_error());

$resultcat=mysql_fetch_array($rscat);

//utf8_encode($total3);
$totalcat = mysql_num_rows($rscat);

    if($totalcat > 0) {
		// inicia o loop que vai mostrar todos os dados
		    	for($i = 1; $i <= 1; $i++);

do {
		    
		   
		   
                      
                      
	
echo '<option value="'.$resultcat["categoria"].'">'.$resultcat["categoria"].'</option>';  


	}while( $resultcat = mysql_fetch_assoc($rscat));
	// fim do if
	}
?>

</select>

<button id="botaoMais" type="button"  onclick="btnContato()" style=" border-radius: 50%;background-color:transparent;" class="botao" >+</button><br>
	
	

	
   
    <input name="id_usuario" type="hidden" id="id_usuario" placeholder="Id usuario*" value="<?php echo $_SESSION['usuarioId']?>"><br>
     
       Item: <input name="item" type="text" id="item" placeholder="Item*" value=""><br>
       Quantidade: <input name="quantidade"type="number" id="quantidade" placeholder="Quantidade"  value=""><br>
         Valor: <input name="valor_unitario"type="money" id="valor_unitario" placeholder="Valor unitário*"  value=""><br>
         <input name="valor_total"type="hidden" id="valor_total" placeholder="Valor total*"  value=""><br>
           <input name="id"type="hidden" id="id"   value="" >
          <input name="avulso" type="hidden" value="1">
          <br><br>
            <input style="background-color:blue;border-radius:5px;color:white;" type="submit" >
    </form>

    	<div id="novacat"style="visibility:hidden;margin-top:-200px;position:relative;">	 
	
   <form style="margin-left:center;" method="post" action="enviarCategoria.php">
     
     <span id="nc" style="visibility:;">	
<strong>Nova categoria</strong></span><br>
      <input  style="" name="nomeDaCategoria" type="text"      id="nomeDaContegoria" placeholder="Nova categoria" ><br>
    	  <input style="" name="idusuariocat"type="hidden"    value="<?echo $_SESSION['usuarioId']?>"    id="idusuariocat"  ><br>
  <input style="background-color:blue;border-radius:5px;color:white;" name=""type="submit"        id="enviarcat" ><br>	
	   </form>
	   <br>
	    <button id="botaoMais1" type="button"  onclick="btnContato()" style="border-radius:5px;color:white;;background-color:blue;" class="botao" >Cancelar</button>

</div>
    <br><br>
    
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 	
   		
   		<div align="center">
    
    
    
       
    
   
<div align="center">
<button 
data-toggle="modal" data-target="#myModal"
class="botao">
Adicionar item à lista fixa
</button>
<br>

<button 
data-toggle="modal" data-target="#myModalavulso"
class="botao">
Adicionar item avulso
</button>


<form id="teste"style="" method="POST" action="limparLista.php">

<input type="hidden"style="position:absolute;"name="id_usuario" value="<?php echo $_SESSION['usuarioId']?>"></input>

<input type="submit"  class="botao" value="Limpar esta lista" name="limpar"></input>
</form>




<br>
<br>

<div style="color:blue;">
   <strong>  Para editar, clique no campo.</strong></div>


 
    <script>
        
    
    
function id(el) {
  return document.getElementById( el );
}
        
function id(el) {
  return document.getElementById( el );
}
function mudanca() {
document.getElementById("nomeDoContato").value = document.getElementById("contato1").value ;


}

function btnContato() {
if (document.getElementById("novacat").style.visibility == 'hidden') {
document.getElementById("botaoMais").style.visibility= 'hidden; '
document.getElementById("novacat").style.visibility= 'visible';
document.getElementById("formularioRendimento23").style = 'position:relative;visibility:hidden;height:300px; ';
} else{
document.getElementById("botaoMais").style.visibility ='visible; '
document.getElementById("novacat").style.visibility='hidden';
document.getElementById("formularioRendimento23").style = 'position:relative;visibility: visible;height:300px; ';
}
}
function btnContato1() {
  if (document.getElementById("novacat1").style.visibility == 'hidden') {
document.getElementById("botaoMais01").style.visibility= 'hidden; '
document.getElementById("novacat1").style.visibility= 'visible';
document.getElementById("formularioRendimento231").style = 'position:relative;visibility:hidden;height:300px; ';
} else{
document.getElementById("botaoMais01").style.visibility= 'visible; '
document.getElementById("novacat1").style.visibility='hidden';
document.getElementById("formularioRendimento231").style = 'position:relative;visibility: visible;height:300px; ';
}


}
window.onload = function() {
 
}


  
  


//id('editar').addEventListener('click',function () {

//document.getElementById("divprincipal").style = 'visibility: hidden; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
//})




id('listafixa').addEventListener('click',function () {
//document.getElementById("divprincipal").style = 'visibility: hidden; ';
//document.getElementById("divprincipal2").style = 'visibility: visible; ';

//document.getElementById("formularioDespesa").style = 'visibility: visible; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
})

//id('btnfechar').addEventListener('click',function () {
function btnfechar() {
document.getElementById("divprincipal").style = 'visibility: visible; ';
document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
document.getElementById("btnfechar").style = 'visibility: hidden; ';
document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
}

  
function load() {
  //  document.getElementById("imageoption").style = "visibility:visible;";
//document.getElementById("imageoption").src = "images/hyperx-option.png";
 $(".imgr1").addClass('load');
        $(".load").removeClass('imgr1');
        
 $(".imgr").addClass('load1');
        $(".load1").removeClass('imgr');
        
        
   //  $(".imgr").toggleClass('imgr');
//document.getElementById("load").style.visibility = 'visible; ';
//document.getElementById("load1").style.visibility = 'visible; ';
}  

function calcular() {
   // document.getElementById("teste").submit();

setInterval(function () {
    document.getElementById("submitSimular").click();
}, 3000);
  
   // document.getElementById("submitSimular").click();
}



function rolar_para(elemento) {
  $('html, body').animate({
    scrollTop: $(elemento).offset().top
  }, 200);
}
 
</script>
 
 













 
<div id="divprincipal" style="width:90%;"class="">

<div  style="background-color: #f2cab6ff ;min-height: 90px; 
max-height: none; height: auto;"
id="divprin" align="center" >
    <br>
 
 
 <form  style="position:;"action="" method="get">
<button type="submit" name="categoria" id="idPessoa" class="botao"  value="" style= " background-color:#FF5500">Todos</button>

<?php
//$cat = $_GET["categoria"];
  $idusuario = $_SESSION['usuarioId'];
$query1 = ("SELECT *  FROM Categorias  Where tabela = 'ListaDeCompras' && id_usuario = $idusuario ORDER BY categoria ASC");
// executa a query
$dados1 = mysql_query($query1, $conn) or die(mysql_error());
// transforma os dados em um array
$linha1 = mysql_fetch_assoc($dados1);

// calcula quantos dados retornaram
$total1 = mysql_num_rows($dados1);


	if($total1 > 0) { 
		// inicia o loop que vai mostrar todos os dados
		do {
?>


              <?php
               $idd = $linha1['id'];
               $categ = $linha1['categoria'];
               //$dataDaPublicacao= $linha['dataDaPublicacao'];
             //  $total= 4;
             
              
              ?>
        
        <?php
        
 	for($i = 1; $i <= 1; $i++)
                  {
       
//$str = $categoria;
//print_r (explode(" ",$categoria));
//$arr = array($categoria);
//echo implode(" ",$arr);

       
echo  '<input type="submit" name="categoria" id="'.$idd.'" class="botao"  
value="'.$categ.'" style= " background-color:#FF5500">
';
                            
  //<input  style= "position:absolute; background-color: #FF5500; outline: 0; text-align: center; border-radius: 15px; border: 1px solid #blue; font-size: 10pt; margin: 2px; color: black; margin-left:100px; width:200px" id="enviar2" value ="Ver mais" type="button" >

						
     }	
                  
              
                
                            
              ?>
               
              

<?php
		// finaliza o loop que vai mostrar os dados
		}while( $linha1 = mysql_fetch_assoc($dados1));
	// fim do if
	}
?>

 </form>


<h3 style="font-family:fantasy;"> <strong><?php echo $_GET['categoria'] ?></strong></h3>

 
 <div style="height:30px;">
    <div id="divtotal">
<div align="center">
Total desta lista:

<?php
$sqlcat="SELECT *  FROM Categorias  WHERE tabela = 'ListaDeCompras'  ORDER BY categoria ASC";
$rscat=mysql_query($sqlcat,$conn) or die(mysql_error());

$resultcat=mysql_fetch_array($rscat);

$categoriaId = $_GET['categoria'];
$idusuario = $_SESSION['usuarioId'];

if ($categoriaId){
$sql21q="SELECT SUM(valor_total) AS total from ListaDeCompras WHERE enviarparaalista ='1' && id_usuario = '$idusuario' && categoria = '$categoriaId'
 ";
} else {
   $sql21q="SELECT SUM(valor_total) AS total from ListaDeCompras WHERE enviarparaalista ='1' && id_usuario = '$idusuario'
 "; 
}
$rs21q=mysql_query($sql21q,$conn) or die(mysql_error());
$result21q=mysql_fetch_array($rs21q);
$qwsaq123 = $result21q['total'];
if ($qwsaq123 == 0){
    $qwsaq123 = '0,00';
} 
if ($qwsaq123 != 0){
    $qwsaq123 = $qwsaq123;
}
echo '<strong  style="text-align:left;color:green;"> R$ '.$qwsaq123.'</strong>';
	?>   <!--Resultado da soma dos checkbox-->
<br>
</div>
<div align="center">
    
<form id="teste"style="" method="POST" action="limpar.php">

Comprado: 
<?php

$categoriaId = $_GET['categoria'];
$idusuario = $_SESSION['usuarioId'];

if ($categoriaId){
$sql21="SELECT SUM(compradoTotal) AS total1 from ListaDeCompras WHERE  enviarparaalista ='1' && comprado= '1'  && categoria = '$categoriaId' && id_usuario = '$idusuario'";
}else{
$sql21="SELECT SUM(compradoTotal) AS total1 from ListaDeCompras WHERE  enviarparaalista ='1' && comprado= '1'   && id_usuario = '$idusuario'";
    
}
$rs21=mysql_query($sql21,$conn) or die(mysql_error());
$result21=mysql_fetch_array($rs21);
//$qwsaq = ;
$qwsaq12 = $result21['total1'];
if ($qwsaq12 == 0){
    $qwsaq12 = '0,00';
} 
if ($qwsaq12 != 0){
    $qwsaq12 = $qwsaq12;
}
echo '<strong align="right" style="color:green;"> R$ '.$qwsaq12.'</strong>
<input type="hidden"style="position:absolute;"name="id_usuario" value="'.$idusuario.'"></input>';
	?>
	
	

<input type="submit"  class="botao" style="font-size:10px;margin-left:-2px;margin-top:-1px;"value="Limpar" name="limpar"></input>
<br><br>
</form>

   <!--Resultado da soma dos checkbox-->



</div>

</div>
</div>
<br>


  

  
<?php 
 

$categoriaId = "";
if (isset($_GET['categoria'])) {
    $categoriaId = $_GET['categoria'];
}

    if ($categoriaId === "") {
         $categoriaId = $_GET['categoria'];
        $idusuario = $_SESSION['usuarioId'];
$sql="SELECT * from ListaDeCompras WHERE enviarparaalista = '1'  && id_usuario = '$idusuario'  ORDER BY item ASC";
$rs=mysql_query($sql,$conn) or die(mysql_error());
$result=mysql_fetch_array($rs);
        
$total = mysql_num_rows($rs);
    } else {
         $categoriaId = $_GET['categoria'];
       $idusuario = $_SESSION['usuarioId'];
$sql="SELECT * from ListaDeCompras WHERE enviarparaalista = '1'  &&  id_usuario = '$idusuario' && categoria = '$categoriaId'  ORDER BY item ASC";
$rs=mysql_query($sql,$conn) or die(mysql_error());
$result=mysql_fetch_array($rs);
        
$total = mysql_num_rows($rs);
    }
    
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
	////	    if($result["receita"] != "") {
		 
		/////    $rec_des  =  $result["receita"];
		////    $val =  $result["valor"];
		   	
	
////		  }
	/////	    if($result["despesa"] != "") {
		 /////   $rec_des  =  $result["despesa"];
		 ////   $val =  $result["valor"] ;
		   
 if($result["comprado"] == 1)	 {
	 $comprado = checked;
	  }
 if($result["comprado"] != 1)
	 {
 $comprado = "";
	  }
if($result["enviarparaalista"] == 1)
	 {
$nalista = checked;
	  }
if($result["enviarparaalista"] != 1)
	 {
$nalista = "";
     }
	  
	   if ($result["valor_unitario"] == $result["valor_unitariofixo"]){
	      $valoratual = $result["valor_unitariofixo"] ;
	  }
	  
	  if ($result["valor_unitario"] != $result["valor_unitariofixo"]){
	      $valoratual = $result["valor_unitario"] ;
	  }
	  if  ($result["valor_unitario"] == 0){
	       $valoratual = $result["valor_unitariofixo"] ;
	  }
	  //
	   
	   
	  //
	  if ($result["compradoTotal"] == $result["valor_totalfixo"]){
	      $valoratual1 = $result["compradoTotal"] ;
	  }
	  if ($result["compradoTotal"] != $result["valor_totalfixo"]){
	      $valoratual1 = $result["compradoTotal"] ;
	  }
	  if  ($result["compradoTotal"] == 0){
	       $valoratual1 = 0 ;
	  }
	  
	  
	  
	  if ($result["compradoTotal"] == $result["valor_totalfixo"]){
	      $valoratual3 = $result["compradoTotal"] ;
	  }
	  if ($result["compradoTotal"] != $result["valor_totalfixo"]){
	      $valoratual3 = $result["compradoTotal"] ;
	  }
	  if  ($result["quantidade"] == 0){
	       $valoratual3 = $result["compradoTotal"]  ;
	  }
	  
	  
	  
	  if ($result["quantidadefixa"] == $result["quantidade"]){
	      $quantidadeatual = $result["quantidadefixa"] ;
	  }
	   if ($result["quantidadefixa"] != $result["quantidade"]){
	      $quantidadeatual = $result["quantidade"] ;
	  }
	  if ($result["quantidade"] == 0 ){
	      $quantidadeatual = $result["quantidadefixa"] ;
	  }
    
		
		
	 ////    }
	
//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
                      
	
echo '
 
  <div  style="height:100%;">

<div style="margin-top:-10%;position:absolute;" id="'.$result["id"].'"></div>

<form id="teste"style="" method="POST" action="atualizar.php">




<input type="hidden"style="width:1px;position:absolute;" id="id" name="id" value="'.$result["id"].'">
<input type="hidden"style="width:1px;position:absolute;" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">
<input type="hidden"style="width:1px;position:absolute;" id="categoria" name="categoria" value="'.$result["categoria"].'"></input>




<div align="left" style="width:95%;">
<input type="number"style="border-color: #fdffbdff ;font-family: fantasy;width:30px; border:solid 0px;text-align:center;" id="quantidade" onChange="load(); this.form.submit()"name="quantidade"placeholder="0" value="'.$quantidadeatual.'">
<span style="letter-spacing: 1px;font-family: fantasy;"> - </span>

<span  style="letter-spacing: 1px;font-family: fantasy; border:0px;"><strong>'.$result["item"].'</strong></span>
<span>(Na lista: <strong>'.$result["quantidadefixa"].'</strong>)</span>

<br>


<input type="hidden" style="width:1px;position:absolute;"id="item" name="item"placeholder="0" value="'.$result["item"].'">

 <input type="hidden" style="width:1px;position:absolute;"id="quantidade12" onChange="load(); this.form.submit()"name="quantidade12"placeholder="0" value="'.$result["quantidadefixa"].'"></input>





</div>

<div align="left"style="width:95%;">
Valor unit.: R$<input onChange="load(); this.form.submit()"type="money"style="width:50px; border:0px;text-align:left;" class="valor2"style="width:90px;" name="valor2" id="valor2" value=" '.$valoratual.'"></input>
<span style="margin-left:;">Total: R$ '.$result["valor_total"].'</span>
<input type="hidden" style="width:1px; border:0px;text-align:left;position:absolute;" class="valor1"style="" name="valor1" id="valor1" value="'.$valoratual1.'">
</input>
</div>

<div align="left" style="width:95%;">





<input type="checkbox" onChange="load(); this.form.submit()"class="tirar1 tirar"id="tirar" '.$nalista.' name="tirar">
<span class="tirar2 tirar4"style="position:absolute;cursor:pointer;">Tirar desta lista</span>

<span class="tirar3 tirar"style="position:absolute;cursor:pointer;">
<image height="12px"src="SetaParaEsquerda.png"></image> Desmarque <strong> X</strong></span>




<input style="position:absolute;"type="hidden"name="valorunitariofixo" value="'.$result["valor_unitariofixo"].'"></input>
<input style="margin-top:-1px;margin-left:50%;" type="checkbox" onclick=""onChange="load(); this.form.submit()" value="'.$valoratual3.' class="comprado1"id="comprado" '.$comprado.' name="comprado1" > Comprado
<input type="submit" id="submitSimular" value="SIMULAR" style="width:1px;visibility:hidden; background-color:transparent;border:none;position:absolute;">
<br>
</div>
</form>
<hr style="border-color:black;"align="center"width="90%"/>
</div>';
           
                  }
	// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if

     
 }
	
?>

</div>


	</div>
	



<script>


   
   
$('.tirar2').click(function(){
    $(".tirar1").toggleClass('tirar');
     $(".tirar2").toggleClass('tirar');
      $(".tirar3").toggleClass('tirar');
});
   
$('.tirar3').click(function(){
    $(".tirar1").toggleClass('tirar');
     $(".tirar2").toggleClass('tirar');
      $(".tirar3").toggleClass('tirar');
});
//$('.tirar2').click(function(){
  //  $(".tirar1").toggleClass('tirar');
    // $(".tirar3").toggleClass('tirar2');
//});

window.onload = function() {
    

 rolar_para('#<?php echo $_SESSION["div"]?>');
 
  var total5 = 0;
            //faço um foreach percorrendo todos os inputs com a class soma e faço a soma na var criada acima
           $(".valor3").each(function() {
    
    
            total5 = (parseFloat(total5) + parseFloat($(this).val())).toFixed(2);
            
            $("#editavelvlr5").val(total5);
      });
  //==========

//id('simular').addEventListener('click',function () {

    //document.getElementById("submitSimular").click();
//});

 
    //funcionando
  ///  document.getElementById('editavelvlr').value= "0";
///    (function() {
///var elements = document.getElementsByTagName('input');//document.getElementById('simular');
///var resultado = document.getElementById('editavelvlr');
///var total =  document.getElementById('editavelvlr1').value;

///for (var i = 0; i < elements.length; i++) {
  //  elements[i].onclick = function() {
   ///     if (this.checked === false) {
      ///      total = total - this.value;
        ///} else {
          ///  total = total + parseFloat(this.value);
//        }
///document.getElementById('editavelvlr').value= total;
      //  resultado.innerHTML = total;
  //  }
///}})();


//var valor = document.getElementById('valor1').value
    var total4 = 0;
            //faço um foreach percorrendo todos os inputs com a class soma e faço a soma na var criada acima
           $(".valor1").each(function() {
    
    
            total4 = (parseFloat(total4) + parseFloat($(this).val())).toFixed(2);
            
            $("#editavelvlr").val(total4);
      });
  //==========
  
  
    var total = 0;
            //faço um foreach percorrendo todos os inputs com a class soma e faço a soma na var criada acima
           $(".comprado").each(function() {
    
      // $(".simular").each(function() {
                 if (this.checked == false) {
            total = (parseFloat(total) + parseFloat($(this).val())).toFixed(2);
//     total = Number(total) + Number($(this).val());
       total = (parseFloat(total) - parseFloat($(this).val())).toFixed(2);
       //parseFloat(this.value);
        } else {
           total = (parseFloat(total) + parseFloat($(this).val())).toFixed(2);
    }
         /////       total = total + Number($(this).val()).toFixed(2);  
         /////   });
            //mostro o total no input Sub Total
            $("#editavelvlr2").val(total);
      });
  

  


//===============
(function() {

var elements = document.getElementsByName('comprado');//document.getElementById('simular');
var resultado = document.getElementById('editavelvlr');
var total1 = document.getElementById('editavelvlr').value;
//

for (var i = 0; i < elements.length; i++) {
 
 elements[i].onclick = function() {
       //  document.getElementById("submitSimular").click();
      // $("#submitSimular").trigger('click');
     
         if (this.checked == false) {

   total1 = Number(total1) -  Number($(this).val());
  // document.getElementById("submitSimular").click();

} else {
        
           total1 =   Number(total1) + Number($(this).val())  ;
           //document.getElementById("submitSimular").click();
  }
  document.getElementById('editavelvlr').value= total1;
//document.getElementById("submitSimular").click();
//enviar21()
//resultado.value = total1;
}
}})();
//===============

//===============
(function() {

var elements = document.getElementsByName('quantidade');//document.getElementById('simular');
var resultado = document.getElementById('editavelvlr');
var total2 = document.getElementById('valor2').value;
//

for (var i = 0; i < elements.length; i++) {
 
 elements[i].keyup = function() {
       //  document.getElementById("submitSimular").click();
      // $("#submitSimular").trigger('click');
     
    /////    if (this.checked == false) {

////   total1 = Number(total1) -  Number($(this).val());
  // document.getElementById("submitSimular").click();

////} else {
         
 
 //          total2 =   Number(total2) * Number($(this).val())  ;
           //document.getElementById("submitSimular").click();
  }
  document.getElementById('total1').value= total2;
//document.getElementById("submitSimular").click();
//enviar21()
//resultado.value = total1;
}
})();
//===============
  
  
}



window.onscroll = function() {
    myFunction();
  
    
};

function myFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    document.getElementById("divtotal").className = "slideUp";
 }
  else 
{
   document.getElementById("divtotal").className = "slideUp1";
    
    
}
    
}

</script>
<?php
$_SESSION["endereco"] =  $_GET["categoria"];
$_SESSION["div"] = "";
?>
</body>




</html>