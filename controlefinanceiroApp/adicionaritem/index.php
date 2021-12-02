
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

<div  style=""class="dropdown" id="formularioRendimento">
<form style="margin-left:center;" method="post" action="enviarItem.php">
     <h2>Adicionando um item</h2> 
         Categoria: <input name="categoria" type="text" id="categoria" placeholder="Categoria*" value=""><br>
     <input name="id_usuario" type="hidden" id="id_usuario" placeholder="Id usuario*" value="<?php echo $_SESSION['usuarioId']?>"><br>
     
       Item: <input name="item" type="text" id="item" placeholder="Item*" value=""><br>
       Quantidade: <input name="quantidade"type="number" id="quantidade" placeholder="Quantidade"  value=""><br>
         Valor: <input name="valor_unitario"type="money" id="valor_unitario" placeholder="Valor unitário*"  value=""><br>
         Valor: <input name="valor_total"type="money" id="valor_total" placeholder="Valor total*"  value=""><br>
           <input name="id"type="hidden" id="id"   value="" >
          
          <br><br>
            <input type="submit" >
    </form>
    <br><br>
    
</div>


</div>

	
	
<script>
function id(el) {
  return document.getElementById( el );
}


window.onload = function() {
    

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