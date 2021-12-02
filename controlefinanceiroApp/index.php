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
?>
<head>
    
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
		<title>
...
		</title>
		
		<style>
.botao{
background-color:#f29e76ff;
border:solid 0;
border-radius:30px;
height:40px;
width:200px;
font-size:15px;
margin-top:-10px;
    
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
		</style>
</head>
<body>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div align="center">
    
<img style="float:; margin-left:;width:90%;" 
src="https://www.ventodedeus.com.br/imagens/LogoControleFinanceiro.png" width="" height="" ></img>

<div align="center">
<span style="font-family: fantasy;font-size:20px;"><strong>Bem vindo</strong></span>
<br>
<span  style="font-family: fantasy;font-size:;"><?echo $_SESSION['usuarioNome']?></span>
</div>
<h3 style="color:#f29d77ff;font-family: fantasy;"><strong >Planejamento financeiro</strong></h3>
<button id="extrato" onclick="(window.location= '../controlefinanceiroApp/extrato/')" class="botao" >
Extrato
</button><br><br>
<button id="Planejamento" onclick="(window.location= '../controlefinanceiroApp/planejamento/')"  class="botao">
Planejamento
</button><br><br>
<h3 style="color:#f29d77ff;font-family: fantasy;"><strong>Lista para o mercado</strong></h3>
<button id="Listadecomprasfixa"  onclick="(window.location= '../controlefinanceiroApp/listafixa/')"class="botao">
Lista de compras fixa
</button><br><br>
<button id="Listadecompras"  onclick="(window.location= '../controlefinanceiroApp/listadecompras/')" class="botao">
Lista de compras
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
///document.getElementById("divprincipal").style = 'visibility: hidden; ';
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
//function btnfechar() {
//document.getElementById("divprincipal").style = 'visibility: visible; ';
//document.getElementById("formularioDespesa").style = 'visibility: hidden; ';
//document.getElementById("btnfechar").style = 'visibility: hidden; ';
//document.getElementById("formularioRendimento").style = 'visibility: hidden; ';
//}

  

//function enviar21() {
   // document.getElementById("teste").submit();
   // document.getElementById("submitSimular").click();
//}


</script>
 
 


 
 
    
    
<br>


<script>

   

window.onload = function() {
  

  
  

 
}
</script>
</body>




</html>