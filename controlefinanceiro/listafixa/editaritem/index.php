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
      <h2>Editando um item</h2>
    <div  style=""class="dropdown" id="formularioRendimento">
         <br>
<label for="categoria">Trocar categoria:</label><br>
  <select type="submit" style="" onchange="trocarcat()" name="categoria" id="categoriadb">

        <option value= "">Escolha</option>
    <?php
       $idusuario = $_SESSION['usuarioId'];
$sql3="SELECT *  FROM Categorias  WHERE tabela = 'ListaDeCompras' && id_usuario = $idusuario  ORDER BY categoria ASC";
$rs3=mysql_query($sql3,$conn) or die(mysql_error());

$result3=mysql_fetch_array($rs3);

//utf8_encode($total3);
$total3 = mysql_num_rows($rs3);

    if($total3 > 0) {
		// inicia o loop que vai mostrar todos os dados
		    	for($i = 1; $i <= 1; $i++);

do {
		    
		   
		   
                      
                      
	
echo '<option value="'.$result3["categoria"].'">'.$result3["categoria"].'</option>';  


	}while( $result3 = mysql_fetch_assoc($rs3));
	// fim do if
	}
?>

  </select>
<?php
$idusuario = $_SESSION['usuarioId'];
$sql1="SELECT * from ListaDeCompras  where id_usuario = '$idusuario' && id = '".$_GET["id"]."' ";
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



<form style="margin-left:center;" method="post" action="editarItem.php">
   
         Categoria atual: <br>
         <input name="categoria" type="text" id="categoria" placeholder="Categoria*" value="'.$result1['categoria'].'">
      <input name="idusuario" type="hidden" id="idusuario" placeholder="Id usuario*" value="'.$result1['id_usuario'].'"><br>
     
       Item: <br>
       <input name="item" type="text" id="item" placeholder="Item*" value="'.$result1['item'].'"><br>
       Quantidade: <br>
       <input name="quantidade"type="number" id="quantidade" placeholder="Quantidade"  value="'.$result1['quantidadefixa'].'"><br>
         Valor unitário: <br>
         <input name="valor_unitario"type="money" id="valor_unitario" placeholder="Valor unitário*"  value="'.$result1['valor_unitariofixo'].'"><br>
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

function trocarcat(){
    document.getElementById("categoria").value = document.getElementById("categoriadb").value;
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