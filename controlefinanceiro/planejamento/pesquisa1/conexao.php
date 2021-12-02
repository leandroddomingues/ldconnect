<?php

$servername = "mysql380.umbler.com:41890";
$username = "leandrovd";
$password = "a36825700";
$dbname = "ventodedeus";

$link = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($link, 'utf8');
?>