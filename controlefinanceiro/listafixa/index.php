<!DOCTYPE html>

   
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
				header("Location: ../login");
			}
?>
<head>
    
<html lang="pt">
    <meta http-equiv="Content-Type" content="text/html">
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <?php $_SESSION["tirar"] = ""?>
  		<title>
Lista fixa
		</title>
		
		<style>
.botaoapagar{
    position:absolute;
    margin-top:-25px;
    margin-left:80px;
    background-color:transparent;
    border-radius:10px;
    font-size:13px;
}
.botaoeditar{
    position:absolute;
    margin-top:;
    margin-left:80px;
    background-color:transparent;
    border-radius:10px;
    font-size:13px;
}
		    input:focus {
		        border:none;
		        border-color:white;
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
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
   	
	   
   		</script>
   	
   	
   	<br><br><br><br>

	
<div class="container" style=" ">
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionando um item</h4>
         
         
        </div>
        <div class="modal-body">
          
          
<div  style="position:relative;visibility:visible;height:300px;"class="dropdown" id="formularioRendimento231">



   
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

    	<div id="novacat1"style="visibility:hidden;right:12%;margin-top:-200px;position:relative;">	 
	
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
      <div class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionando um item</h4>
         
         
        </div>
        <div class="modal-body">
          
          
<div  style="position:relative;visibility:visible;height:300px;"class="dropdown" id="formularioRendimento23">



   
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

    	<div id="novacat"style="visibility:hidden;right:12%;margin-top:-200px;position:relative;">	 
	
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
    
    
    
    <form  action="" method="get">  
  <label for="categoria">Categoria:</label>
  <select type="submit" onchange="this.form.submit()" name="categoria" id="categoria">
        <option value= "<? echo $_GET['categoria']?>"><? echo $_GET['categoria']?></option>
        <option value= "">Todos</option>
    <?php
       $idusuario = $_SESSION['usuarioId'];
$sql3="SELECT *  FROM Categorias  WHERE tabela = 'ListaDeCompras'  ORDER BY categoria ASC";
$rs3=mysql_query($sql3,$conn) or die(mysql_error());
$result3=mysql_fetch_array($rs3);

$total3 = mysql_num_rows($rs3);

    if($total3 > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
                      
	
echo '
        <option value="'.$result3["categoria"].'">'.$result3["categoria"].'</option>
   
   
   '
  ;
		    }
  	}while( $result3 = mysql_fetch_assoc($rs3));
	// fim do if
	}
?>

  </select>
  </form>
  
    
    
    
    
<div align="center">
    <button id="extrato" onclick="(window.location= '../')" style="background-color:transparent;">
Início
</button>
<button id="extrato" onclick="(window.location= '../extrato/')" style="background-color:transparent;">
Extrato
</button>
<button id="Planejamento" onclick="(window.location= '../planejamento/')"  style=" background-color:transparent;">
Planejamento
</button>
<br><br>

</div>

<button id="listafixa" onclick="(window.location= '../listafixa/')"
style="background-color:green;color:white;">
Lista fixa
</button>
<button id="listadecompras" onclick="(window.location= '../listadecompras/')" style=" background-color:transparent;">
Lista de compras
</button>
<br><br>
<button 
data-toggle="modal" data-target="#myModal"
style=" background-color:transparent;">
Adicionar item à lista fixa
</button>


<button 
data-toggle="modal" data-target="#myModalavulso"
style=" background-color:transparent;">
Adicionar item avulso
</button>
<br>
<br>

<div style="color:blue;">
  <strong>  Para editar, clique no campo.</strong></div>

</div>




<script>
function id(el) {
  return document.getElementById( el );
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
function rolar_para(elemento) {
  $('html, body').animate({
    scrollTop: $(elemento).offset().top
  }, 200);
}
window.onload = function() {
  //  if (</? echo $_GET['categoria']?> == "")
//	{
//	 document.getElementById("opcaoTodos").option = "Todos";  
//	}
}
//id('myBtn').addEventListener('click',function () {

//document.getElementById("myModal").style = 'visibility: visible; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
//})


//id('listafixa').addEventListener('click',function () {
//document.getElementById("divprincipal").style = 'visibility: visible; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
///document.getElementById("divprincipal2").style = 'visibility: hidden; ';
//})


//id('listadecompras').addEventListener('click',function () {
//document.getElementById("divprincipal").style = 'visibility: hidden; ';
//document.getElementById("divprincipal2").style = 'visibility: visible; ';

//document.getElementById("formularioDespesa").style = 'visibility: visible; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
//})

//id('btnfechar').addEventListener('click',function () {
//function btnfechar() {
//document.getElementById("divprincipal").style = 'visibility: visible; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: hidden; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
//}

  

function calcular() {
   // document.getElementById("teste").submit();

setInterval(function () {
    document.getElementById("submitSimular").click();
}, 3000);
  
   // document.getElementById("submitSimular").click();
}


</script>
 
 




<div  style="min-width:280px;max-width:80%;width:80%;margin-left:10%; min-height: 90px; 
max-height: none; height: auto; visibility:visible;"class="dropdown"
id="divprincipal" align="center" >
<div  style="background-color: #fdffbdff ; min-width:280px;max-width:50%;width:30%;margin-left:0%; min-height: 90px; 
max-height: none; height: auto; visibility:visible;"
id="divprin" align="center" >
    <br>
<h2>Lista fixa</h2>
    <br><br>
<div style="min-width:280px;">


Total da lista:


<?php

 $categoriaId = $_GET['categoria'];
$idusuario = $_SESSION['usuarioId'];
$sql21q="SELECT SUM(valor_totalfixo) AS total from ListaDeCompras WHERE id_usuario = '$idusuario' && categoria = '$categoriaId' && item_avulso = '0'";
$rs21q=mysql_query($sql21q,$conn) or die(mysql_error());
$result21q=mysql_fetch_array($rs21q);
//$qwsaq = ;
echo '<strong  style="text-align:left;color:green;"> R$ '.$result21q['total'].'</strong>';
	?>  

</div>
<br>
<?php


$categoriaId = "";
if (isset($_GET['categoria'])) {
    $categoriaId = $_GET['categoria'];
}

    if ($categoriaId === "") {
        $idusuario = $_SESSION['usuarioId'];
$sql1="SELECT * from ListaDeCompras WHERE id_usuario = '$idusuario' && item_avulso = '0'  ORDER BY item ASC";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);
        
$total1 = mysql_num_rows($rs1);


    } else {
       $idusuario = $_SESSION['usuarioId'];
$sql1="SELECT * from ListaDeCompras WHERE id_usuario = '$idusuario' && categoria = '$categoriaId' && item_avulso = '0' ORDER BY item ASC";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);
        
$total1 = mysql_num_rows($rs1);


    }


//$dropdowm = ?/> <input id="categoria1"> <?php  && categoria = '$dropdowm'
// where titulo = '".$_GET["titulo"]."' "



	//	$resultado = $result['SUM(valor)'];
//------------------------
          //---------------------------
 if($total1 > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
		    
		                 
 $lin= $result1['vencimento'];
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
$olddata = $lin;
$data = str_replace('/', '-', $olddata);
 $venc =  strftime("%d de %B de %Y", strtotime($data)) ; 
        
	
if($result1["enviarparaalista"] == 1)
	 {
$nalista1 = checked;
	  }
if($result1["enviarparaalista"] != 1)
	 {
$nalista1 = "";
     }
	  
	  
		    	for($i = 1; $i <= 1; $i++);
	  
	  
		    {
                      
                      
	
echo '<div>

<div style="margin-top:-10%;position:absolute;" id="'.$result1["id"].'"></div>
	<form action="editaritem/?id='.$result1["id"].'" method="post">

<input class= "botaoeditar"   style= "" id="editar"type="submit" value="Editar">
	

</form>
<form id="teste" method="POST" action="atualizar.php">
<div align="left" style="min-width:250px;margin-left:5%;">

 <label for="categoria">Categoria:</label>
       <span>'.$result1["categoria"].'</span>
        
        </select>
        <br>
<input style="width:30px; border:0px;" id="quantidade" onChange="this.form.submit()"name="quantidade"placeholder="0" value="'.$result1["quantidadefixa"].'">
<span> X </span>
<input onChange="this.form.submit()" style="width:180px; border:0px;" id="item" name="item"placeholder="0" value="'.$result1["item"].'">
</div>
<div  align="left"style="min-width:250px;margin-left:5%;">
Valor unit. R$<input onChange="this.form.submit()"type="money"style="width:80px; border:0px;text-align:left;" class="valor2"style="width:100px;" name="valor2" id="valor2" value=" '.$result1["valor_unitariofixo"].'">
<strong  style="margin-right:10%;float:right;">R$ '.$result1["valor_totalfixo"].'</strong>
</div>

<div style="min-width:200px;">
<input type="checkbox" style="margin-left:-1%;"onChange="this.form.submit()"  class="tirar"id="tirar" '.$nalista1.' name="tirar"> Enviar para a lista de compras




<input type="submit" id="submitSimular" value="SIMULAR" style="visibility:hidden; background-color:transparent;border:none;">

</div>


<input type="hidden" id="id" name="id" value="'.$result1["id"].'">
<input type="hidden" id="id_usuario" name="id_usuario" value="'.$result1["id_usuario"].'">

</form>
	


	<form action="apagar.php" method="post">
	  	
<input class= "botaoapagar"   style= "" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result1["id"].'">	

</form>



<hr align="center"width="60%"/>
</div>';
           
                  }
	// finaliza o loop que vai mostrar os dados
		}while( $result1 = mysql_fetch_assoc($rs1));
	// fim do if
	}
?>

	</div>
	



</div>









	 
	 


<script>

   

window.onload = function() {
    
 rolar_para('#<?php echo $_SESSION["div1"]?>');
    var total4 = 0;
            //faço um foreach percorrendo todos os inputs com a class soma e faço a soma na var criada acima
           $(".valor1").each(function() {
    
    
            total4 = (parseFloat(total4) + parseFloat($(this).val())).toFixed(2);
            
            $("#editavelvlr").val(total4);
      });
     
}
</script>

<?php
$_SESSION["endereco"] =  $_GET["categoria"];
?>
</body>




</html>