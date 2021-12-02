
<?php

//$pdo = new PDO( 'mysql:host=mysql524.umbler.com:41890;dbname=ldconnect', 'ldconnect', 'a36825700' );

$table = 'ShopFaceBook';
$outstr = NULL;

//header("Content-Type: application/csv");
//header("Content-Disposition: attachment;Filename=cars-models.csv");

$conn = mysql_connect("mysql524.umbler.com", "ldconnect", "a36825700");
mysql_select_db("ldconnect",$conn);

// Query database to get column names  
$result = mysql_query("show columns from $table",$conn);
// Write column names
while($row = mysql_fetch_array($result)){
    $outstr.= $row['Field'].',';
}  
$outstr = substr($outstr, 0, -1)."\n";

// Query database to get data
$result = mysql_query("select * from $table",$conn);
// Write data rows
while ($row = mysql_fetch_assoc($result)) {
    $outstr.= join(',', $row)."\n";
    
//$outstr = "teste";
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/tabelas/index.php","wb");
//$fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/novo.csv","w");


fwrite($fp,$outstr);
fclose($fp);
}

//echo $outstr;
echo "Enviado com sucesso";
mysql_close($conn);

?>