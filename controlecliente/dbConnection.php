<?php
$ambiente = false;

if ($ambiente)  { //Ambiente de produção
	
	$HostName = "";
	$HostUser = "";
	$HostPass = "";
	$DatadaseName = "";
	
} else { //Ambiente de Desenvolvimento

	$HostName = "mysql380.umbler.com:41890";
	$HostUser = "leandrovd";
	$HostPass = "a36825700";
	$DatadaseName = "ventodedeus";
}
?>