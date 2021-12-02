<?php





//session_start();
$host = "mysql380.umbler.com";
$dbname   = "ventodedeus";
$user = "leandrovd";
$pass = "a36825700";
$port = 41890;

	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

try {
    $conn = new PDO('mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname, $user, $pass);
  //  echo "Conexão com banco de dados realizado com sucesso!";
} catch (PDOException $err) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $err->getMessage();
}
 mysqli_set_charset($conn, "utf8");

?>