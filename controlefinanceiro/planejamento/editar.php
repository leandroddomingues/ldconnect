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
				header("Location: ../login");
			}
?>
<head>
    
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
		<title>
...
		</title>
		<script>
		
	
	</script>
		<style>

		    input:focus {
		        border:none;
		        border-color:white;
}

.dropdown {
min-height: 90px; 
max-height: none; 
height: auto;
border: 1px solid;
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
		</style>
</head>
<body><br><br><br><br>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div align="center">




 		
<div class="container">
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div style="background-color: blue;"class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editando um item</h4>
         
         
        </div>
        <div class="modal-body">
          
          
        
<div  style="width: auto; min-height: 90px; max-height: none; height: auto;position:relative;"class="dropdown" id="formularioRendimento">





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
echo '

<div  style=""class="dropdow" id="formularioRendimento">
<form style="margin-left:center;" method="post" action="enviarEditar.php">
     <h2>Editando rendimento</h2> 
         Rendimento: <input name="rendimento" type="text" id="rendimento" placeholder="Rendimento*" value="'.$result1['receita'].'"><br>
         Valor: <input name="valor"type="money" id="valor" placeholder="Valor*"  value="'.$result1['valor'].'"><br>
       Vencimento:<input name="vencimento" type="datetime-local" id="vencimento" placeholder="Vencimento*" value="'.$result1['vencimento'].'" ><br>
          <h3>Se já recebeu, preencha os campos abaixo:</h3>
        Valor recebido: <input name="valorRealizado"type="money" id="valorRealizado" placeholder="Valor recebido"  value="'.$result1['valorRealizado'].'"><br>
          Recebido em:<input name="datadarealizacao"type="datetime-local" id="datadarealizacao" placeholder="data de realização*"  value="'.$result1['datadarealizacao'].'"> <br>
          <input name="executado"type="checkbox" id="executado" placeholder="executado*" '.$exec.' > Recebido
           <input name="id"type="hidden" id="id"   value="'.$result1['id'].'" >
           <input name="id_usuario"type="hidden" id="id"   value="'.$result1['id_usuario'].'" >
          
          <br><br>
            <input type="submit" >
    </form>
    <br><br>
	<form action="insertApagar.php" method="post">
	  	
<input class= "botao"   style= "color:black;" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result1["id"].'">	

</form><br>
</div>


<div style="width: auto; min-height: 90px; max-height: none; height: auto;border: 1px solid;width:60% border: 1px solid;width:60%"class="dropdown" id="formularioDespesa">
 		
<form style="margin-left:center;"  method="post" action="enviarEditar.php">
     <h2>Editando despesa</h2> 
        Despesa:  <input name="despesa" type="text" id="despesa" placeholder="Despesa*"  value="'.$result1['despesa'].'"><br>
        Valor: <input name="valor"type="money" id="" placeholder="Valor*"  value="'.$result1['valor'] * '-1'.'"><br>
       Vencimento:<input name="vencimento" type="datetime-local" id="vencimento" placeholder="Vencimento*" value="'.$result1['vencimento'].'" ><br>
            <h3>Se já foi feito o pagamento, preencha os campos abaixo:</h3>
        Valor pago: <input name="valorRealizado"type="money" id="valorRealizado" placeholder="Valor recebido"  value="'.$result1['valorRealizado'].'"><br>
          Pago em:<input name="datadarealizacao"type="datetime-local" id="datadarealizacao" placeholder="data de realização*"  value="'.$result1['datadarealizacao'].'"> <br>
          <input name="executado"type="checkbox" id="executado" placeholder="executado*" '.$exec.' > Pago
           <input name="id" type="hidden" id=""   value="'.$result1['id'].'" >
          <br><br>
            <input type="submit">
    </form>
    <br><br>
	<form action="insertApagar.php" method="post">
	  	
<input class= "botao"   style= "color:black;" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result1["id"].'">	

</form><br>
</div>

	
	';
	?>




</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 







	
<script>
function id(el) {
  return document.getElementById( el );
}


window.onload = function() {
    

if(document.getElementById("rendimento").value != '' ) {
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
document.getElementById("formularioRendimento").style = 'visibility: visible; ';
}
else
if(document.getElementById("despesa").value != '') 
 {
document.getElementById("formularioDespesa").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
}
}
//id('editar').addEventListener('click',function () {

//document.getElementById("divprincipal").style = 'visibility: hidden; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
//})
</script>
	</body>
	</html>