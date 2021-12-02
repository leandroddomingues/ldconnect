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
visibility:;
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

<?php
$sql1="SELECT * from ListaDeCompras  where id = '".$_GET["id"]."' ";
$rs1=mysql_query($sql1,$conn) or die(mysql_error());
$result1=mysql_fetch_array($rs1);


//	 if($result1['executado'] === "1" )
	 
//	 {
//	 $exec = checked;
//	  }
  //elseif($result1['executado'] === "0" )
	 
	// {
	// $exec = "" ;
	  //}
echo '

<div  style=""class="dropdown" id="formularioRendimento">

<form style="margin-left:center;" method="post" action="editarItem.php">
     <h2>Editando um item</h2> 
         Categoria: <input name="categoria" type="text" id="categoria" placeholder="Categoria*" value="'.$result1['categoria'].'"><br>
      <input name="idusuario" type="hidden" id="idusuario" placeholder="Id usuario*" value="'.$result1['id_usuario'].'"><br>
     
       Item: <input name="item" type="text" id="item" placeholder="Item*" value="'.$result1['item'].'"><br>
       Quantidade: <input name="quantidade"type="number" id="quantidade" placeholder="Quantidade"  value="'.$result1['quantidadefixa'].'"><br>
         Valor unitário: <input name="valor_unitario"type="money" id="valor_unitario" placeholder="Valor unitário*"  value="'.$result1['valor_unitariofixo'].'"><br>
        <input name="valor_total"type="hidden" id="valor_total" placeholder="Valor total*"  value="'.$result1['valor_totalfixo'].'"><br>
        <input name="id"type="hidden" id="id"   value="'.$result1['id'].'" >
          
          <br><br>
            <input type="submit" >
    </form>

    <br><br>
	<form action="apagar.php" method="post">
	  	
<input class= "botao"   style= "color:black;" id="apagar"type="submit" value="Apagar">
<input type="hidden" name="id" value="'.$result1["id"].'">	

</form><br>';
	?>
	
<script>
function id(el) {
  return document.getElementById( el );
}


window.onload = function() {
    

}
id('valor_unitario').addEventListener('keyup',function () {

document.getElementById("valor_total").value = document.getElementById("quantidade").value *
document.getElementById("valor_unitario").value;
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
})

id('quantidade').addEventListener('keyup',function () {

document.getElementById("valor_total").value = document.getElementById("quantidade").value *
document.getElementById("valor_unitario").value;
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: visible; ';
//document.getElementById("formularioRendimento").style = 'visibility: visible; ';
})
</script>
	</body>
	</html>