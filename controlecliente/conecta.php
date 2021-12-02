<?php
header('Content-Type: application/json; chart=utf-8');


$response = array();
$response["erro"] = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//$teste = "1";
//if ($teste = "1") {
	 
	
	include 'dbConnection.php';
	
	$conn = new mysqli($HostName, $HostUser, 
			$HostPass, $DatadaseName);
	
	mysqli_set_charset($conn, "utf8");
	
	if ($conn->connect_error)  {
		
	}
	
//	$senhacrypto1 = $_POST['senha'];

//$senhacrypto = md5($senhacrypto1);
//	$login = "'".$_POST['login']."'";
//	$senha ="'".$senhacrypto."'";
//$contrato = $_POST['Contrato'];
$contrato ="05.4122.000"; ///$_POST['Contrato'];
	$sql = "SELECT * FROM Inventario_matriz_itens WHERE Contrato = '$contrato'";
	
	print_r($result);
	
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
//		echo "Com alguns registros...";

    $registro = mysqli_fetch_array($result);
    
  //  	while($registro = mysqli_fetch_assoc($result)){
	$response["linhas"] = $result->num_rows ;
	$response["erro"] = false;
	while($registro = mysqli_fetch_assoc($result)){
	$response[] = $registro['Nome_Funcionario'];
//	echo json_encode($response);
}
//	$response["data"] = $registro['data'];
//	$response["lavado"] = $result->num_rows;//$registro['data'];
//    $response["nome"] = $registro['nome'];


//}
	} else {
	 
	 $response["mensagem"] = "Não encontrado...";    
	// conteúdo	echo "Sem alguns registros...";
	$response["erro"] = true;
	}
	
	$conn->close();
}


echo json_encode($response);
?>