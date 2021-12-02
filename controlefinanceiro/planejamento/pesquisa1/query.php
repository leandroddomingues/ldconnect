<?php
include("conexao.php");

$cod = $_POST['busca'];
$user = $_POST['user'];


$pq = "select * from ControleFinanceiro where cod='$cod'";
$rs = mysqli_query($link, $pq);
$reg = mysqli_fetch_assoc($rs);

$produto = $reg['item'];
$detalhes = $reg['detalhes'];
$valor = $reg['valor'];
$img = $reg['img'];



$sql = "insert into ControleFinanceiro (produto,detalhes, valor, user, img) values ('$produto', '$detalhes', '$valor', '$user', '$img')";
$sql = mysqli_query($link, $sql);

?>

<table cellspacing="0" cellpadding="0" border="0">
    
<?php
$retorno = '0,';
$total = 0;
$pqCar = "select * from ControleFinanceiro";
$rsCar = mysqli_query($link, $pqCar);
while ($regCar = mysqli_fetch_assoc($rsCar)) {
   $total++;
   echo "<tr>
         
          <td width='130'>" . $regCar['receita'] . "</td>
         </tr>";
};
?> 
   
 </table>
