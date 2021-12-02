<?php
$servername = "mysql380.umbler.com:41890";
$username = "leandrovd";
$password = "a36825700";
$dbname = "ventodedeus";


//$conn=mysql_connect("mysql380.umbler.com:41890","leandrovd","a36825700");

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$columns = array( 
	0 =>'despesa', 
	1 => 'receita',
	2=> 'valor',
	3=> 'vencimento'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT despesa, receita, valor, vencimento FROM ControleFinanceiro";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT despesa, receita, valor, vencimento FROM ControleFinanceiro WHERE 1=1 GROUP BY receita, despesa";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( despesa LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR valor LIKE '".$requestData['search']['value']."%' ";
    $result_usuarios.=" OR receita LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR vencimento LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array dereceita dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	if ($row_usuarios["receita"] == "") {
	  $rec_des = $row_usuarios["despesa"];  
	}
	if ($row_usuarios["despesa"] == "") {
	  $rec_des = $row_usuarios["receita"];  
	}

   if ($rec_des != ""){
     //-----
     
$tags = $row_usuarios["vencimento"];
$janeirop = '2021-01';
$fereirop = '2021-02';

$pattern = '/' . $janeirop . '/';//Padrão a ser encontrado na string $tags
if (preg_match($pattern, $tags)&&  $row_usuarios["receita"] == $rec_des ) {
  $janeiro = $row_usuarios["valor"];


}
else {
  $janeiro = "";
  // $fevereiro ="";
}
 
 
$pattern1 = '/' .$fevereirop . '/';//Padrão a ser encontrado na string $tags
if (preg_match($pattern1, $tags) &&  $row_usuarios["receita"] == $rec_des) {
  $fevereiro = $row_usuarios["valor"];


}
else {
  $fevereiro = "";
  // $fevereiro ="";
}   
    
      //-----
	$dado[] = $rec_des;
//	$dado[] = $janeiro ;
//	$dado[] = $fevereiro;	
	$dados[] = $dado;
}

}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
