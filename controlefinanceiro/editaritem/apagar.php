<?php

$strcon = mysqli_connect("mysql380.umbler.com:41890","leandrovd","a36825700","ventodedeus") or die("Erro ao conectar ao banco de dados requisitado");
//$nome = $_POST['titulo'];
$id = $_POST['id'];
//$subtitulo = $_POST['subtitulo'];
//$texto = $_POST['texto'];
//$link = $_POST['link'];
//$categoria = $_POST['categoria'];
//$dataDaPublicacao = $_POST['dataDaPublicacao'];

$sql = "DELETE FROM ListaDeCompras WHERE id='$id'"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar excluir!   ");
	header("Location: ../listafixa/");
//echo "Excluído  ";
mysqli_close($strcon);

 		?>