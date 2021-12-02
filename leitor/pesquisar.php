<?php


$servidor = "mysql380.umbler.com:41890";
$dbname   = "ventodedeus";
$usuario = "leandrovd";
$senha = "a36825700";



    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    $pesquisar = $_POST['pesquisar'];
    $result_cursos = "SELECT * FROM leitura WHERE codigodebarras= '$pesquisar' LIMIT 50";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    
    while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        echo "Lavado em: ".$rows_cursos['codigodebarras']." em ".$rows_cursos['data']."<br>";
    }
?>