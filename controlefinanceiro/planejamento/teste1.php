<!DOCTYPE html>

<html lang="pt">
      <?php


    session_start();
   // $_SESSION['dp4'] = "qw";
include('conexao.php');	?>
	<head>
	    
<style>

    [data-tooltip] {
  position: relative;
  font-weight: bold;
}

[data-tooltip]:after {
  display: none;
  position: absolute;
  top: -20px;
  padding: 5px;
  border-radius: 3px;
  left: calc(100% + 2px);
  content: attr(data-tooltip);
  white-space: nowrap;
  background-color: #0095ff;
  color: White;
}

[data-tooltip]:hover:after {
  display: block;
}
</style>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
				<meta charset="utf8">
	</head>
	<body>
<div>   


	</div>	    
  <!--	
<table style="text-align: justify;" border="1" class="table">
<thead class="thead-dark">
    <tr>
	<th scope="col">Despesas</th>
      <th scope="col">Janeiro</th>
      <th scope="col">Fevereiro</th>
      <th scope="col">Março</th>
      <th scope="col">Abril</th>
      <th scope="col">Maio</th>
      <th scope="col">Junho</th>
      <th scope="col">Julho</th>
      <th scope="col">Agosto</th>
      <th scope="col">Setembro</th>
      <th scope="col">Outubro</th>
      <th scope="col">Novembro</th>
      <th scope="col">Dezembro</th>

    </tr>
  </thead>
  
  
<tbody>

 <tr>
      <th scope="row">Despesa/Rendimento</th>
	  
      <td width="100px"><p style="text-align: justify;"></p>Desp 1</td>
	
	
	
	-->
	
	 	<table cellspacing="3" bgcolor="" style="color:;width:100%;">
			<thead class="thead-dark" bgcolor="#000000"style="color:white;width:100%;">
				<tr>
						<th  scope="col"></th>
						<th scope="col">Janeiro</th>
					<th  scope="col">Fevereiro</th>
				<th  scope="col">Março</th>
					<th scope="col">Abril</th>
					<th  scope="col">Maio</th>
					<th  scope="col">Junho</th>
					<th scope="col">Julho</th>
					<th  scope="col">Agosto</th>
					<th  scope="col">Setembro</th>
					<th  scope="col">Outubro</th>
					<th  scope="col">Novembro</th>
					<th  scope="col">Dezembro</th>
			</tr>
			</thead>
			<tbody>
			    <!--	<tr>-->
			   
			  		<?php


$mesSelecionado = "01";
$dataAtual = date("Y-m-d");
$ano = "2021";//  $_SESSION["Ano"] ;
$mes =  "$ano-$mesSelecionado-";
$mes1 =  "$ano-$mesSelecionado-31";

$idusuario = $_SESSION['usuarioId'];
$sql="SELECT 
                ContNome.nome AS ContNome_nome,
                 
               
               
                 
                 SUM(Cont1.valorRealizado) AS vr1 ,
                  GROUP_CONCAT(Cont1.valorRealizado) AS vr1_1 ,
                   
                SUM(Cont2.valorRealizado) AS vr2,
                   GROUP_CONCAT(Cont2.valorRealizado) AS vr2_1  
                   
                    
                    FROM ControleFinanceiroNome ContNome
                 
               LEFT JOIN ControleFinanceiro AS Cont1   ON 
                    Cont1.receita_despesa = ContNome.nome 
                      
                        && Cont1.datadarealizacao LIKE '%2021-01%' 
                        && Cont1.executado = '1' 
                        && Cont1.id_usuario = '$idusuario' 
                       
             
               LEFT JOIN ControleFinanceiro AS Cont2   ON 
                           Cont2.receita_despesa = ContNome.nome 
                        && Cont2.datadarealizacao  LIKE '%2021-02%' 
                    
                        && Cont2.executado = '1' 
                        && Cont2.id_usuario = '$idusuario' 
                    
             
             
             
                 GROUP BY ContNome.nome 
                    ORDER BY ContNome.nome ASC";

$rs=mysql_query($sql,$conn) or die(mysql_error());
$result=mysql_fetch_array($rs);

$total = mysql_num_rows($rs);

	//	$resultado = $result['SUM(valor)'];
//------------------------

          //---------------------------



if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
	do {
		    
		                 
 $lin= $result['vencimento'];
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set("America/Sao_Paulo");
$olddata = $lin;
$data = str_replace('/', '-', $olddata);
 //$venc =$olddata;
// $venc =  strftime("%d de %B", strtotime($data)) ; 
   $venc =  strftime("%d/%B", strtotime($data)) ; 
        // de %Y
        
		   // $venc = $result["vencimento"];
		    if($result["receita"] != "") {
		 
		    $rec_des  =  $result["receita"];
		    $val =  $result["valor"];
		   	
	
		  }
		    if($result["despesa"] != "") {
		    $rec_des  =  $result["despesa"];
		    $val =  $result["valor"] ;
		   
		
		
	 }
	
	  
	 
	 if($result["simulado"] == 1)
	 
	 {
	 $booll = checked;
	  }
	  if($result["simulado"] != 1)
	 
	 {
	 $booll = "";
	  }



if($val < 0) {
    $pr = "Pago em: ";
    
    
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";


	 $cor = "green";
}


//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '

 <tr   style="bordercolor:#ff0;text-align:;">
 
           <td style="height:20px;width:100px;text-align:left;">
         
           <span style="text-align: justify;font-color:;">'.$result["ContNome_nome"].'</span>
           </td>

';

 
 
  
  $vr =$result["vr1"];
  $vr1 =$result["vr1_1"];
  
 $vowels = array(",0.00");
$vr1 = str_replace($vowels, "",$vr1);
if($vr < 0) {
    $pr = "Pago em: ";
   
   
      $cor = "red";
}
else if($vr > 0) {
    $pr = "Recebido em: ";
  
  
	 $cor = "green";


} else {
    $pr = "Recebido em: ";
    
    
	 $cor = "green";


} 


echo '
 
           <td style="height:20px;width:100px;text-align:center;">
             
             
          
          <span  data-tooltip="'.$vr1.'" style="font-size:12px;float:;text-align:justify;color:'.$cor.';"> '.$vr.'</span>
           </td>
    
';         





  $vr = $result["vr2"];
  
 $vr1 = $result["vr2_1"];
 $vowels = array(",0.00");
$vr1 = str_replace($vowels, "",$vr1);

  
if($vr < 0) {
    $pr = "Pago em: ";
    
    
      $cor = "red";
}
else if($vr > 0) {
    $pr = "Recebido em: ";
  
  
	 $cor = "green";
	
} else {
    $pr = "Recebido em: ";
   
   
	 $cor = "green";
	 
} 


echo '
 
           <td style="height:20px;width:100px;text-align:center;">
           
           <span data-tooltip="'.$vr1.'" style="font-size:12px;float:;text-align:justify;color:'.$cor.';"> '.$vr.'</span>
           </td>
    </tr>
';         


                  }
// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
}

	
	
?>	


		
		
			</tbody>
	
	</table>
	</body>

</html>

