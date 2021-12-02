<!DOCTYPE html>

<html lang="pt">
    <?php


    session_start();
    
include('conexao.php');	

?>
<head>
    
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
		<title>
...
		</title>
		
		<style>

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


<br><br>
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div align="center">
    
<img style="float:; margin-left:;width:60%;max-width:400px;" 
src="https://www.ventodedeus.com.br/imagens/LogoControleFinanceiro.png" width="" height="" ></img>
<br><br>
<button id="extrato" onclick="(window.location= '../controlefinanceiro/extrato/')" style="background-color:transparent;">
Extrato
</button>
<button id="Planejamento" onclick="(window.location= '../controlefinanceiro/planejamento/')"  style=" background-color:transparent;">
Planejamento
</button>
<br><br><br><br>
<button id="Listadecomprasfixa"  onclick="(window.location= '../controlefinanceiro/listafixa/')" style=" background-color:transparent;">
Lista de compras fixa
</button>
<button id="Listadecompras"  onclick="(window.location= '../controlefinanceiro/listadecompras/')" style=" background-color:transparent;">
Lista de compras
</button>
<br><br><br>







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