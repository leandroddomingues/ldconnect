
<html lang="pt-br">
<?php
session_start();

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$dataDaEntrega = $_POST['dataDaEntrega'];
$dataDoEnvio = $_POST['dataDoEnvio'];
$contrato = $_POST['contrato'];

//"select * from AlscoLoteSujo inner join AlscoLoteLimpo on ( AlscoLoteSujo.Data_do_envio = AlscoLoteLimpo.Data_da_entrega && AlscoLoteSujo.Contrato = AlscoLoteLimpo.Contrato) where AlscoLoteSujo.Contrato = '$contrato'"
?>


<div style="width:90%;margin-left:5%;" >
  
   <div>
 <?php
$query13 = ("
SELECT 
* FROM  AlscoLoteSujo AS sujo
    WHERE sujo.Data_do_envio = '$dataDoEnvio'
    AND sujo.Contrato = '$contrato'
   

   ");
//GROUP BY sujo.Nome_Funcionario

//$query1 = ("SELECT *  FROM AlscoLoteSujo  WHERE tabela = 'VentoDeDeus'  ORDER BY categoria ASC");
// executa a query
$dados13 = mysql_query($query13, $con) or die(mysql_error());
// transforma os dados em um array
$linha13 = mysql_fetch_assoc($dados13);

// calcula quantos dados retornaram
$total13 = mysql_num_rows($dados13);
if ($total13 === 0){
    $total13 = "Não existe nenhuma informação do que foi enviado, verifique as informações inseridas.";
}
echo '<span> Total enviado: '.$total13.' </span><br>';
?>
    
    <?php
$query12 = ("
SELECT 
* FROM AlscoLoteLimpo AS limpo
    WHERE   
    limpo.Data_da_entrega = '$dataDaEntrega'
    AND limpo.Contrato = '$contrato'

   ");
//GROUP BY sujo.Nome_Funcionario

//$query1 = ("SELECT *  FROM AlscoLoteSujo  WHERE tabela = 'VentoDeDeus'  ORDER BY categoria ASC");
// executa a query
$dados12 = mysql_query($query12, $con) or die(mysql_error());
// transforma os dados em um array
$linha12 = mysql_fetch_assoc($dados12);

// calcula quantos dados retornaram
$total12 = mysql_num_rows($dados12);
if ($total12 === 0){
    $total12 = "Não existe nenhuma informação do que foi recebido, verifique as informações inseridas.";
}
$resul =$total12 - $total13;
echo ' <span>Total que retornou: '.$total12.' </span><br>';

echo ' <span>Diferença que retornou: '.$resul.' </span><br>';
?>
</div>
<div align="center">
    
</div>

<div style="float:left;width:25% ; visibility:;position:;">
<h4>Material que foi enviado 
<image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;" src="abrir.png"id="enviado1"></image>
<image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;visibility:hidden;" src="fechar.png"id="enviado2"></image>
</h4>

<div id="enviado"style="float:left;width: ; visibility:hidden;position:;">

    
<?php
$query1 = ("
SELECT 
* FROM  AlscoLoteSujo AS sujo
    WHERE sujo.Data_do_envio = '$dataDoEnvio'
    AND sujo.Contrato = '$contrato'
    ORDER BY sujo.Nome_Funcionario ASC
   ");
//GROUP BY sujo.Nome_Funcionario

//$query1 = ("SELECT *  FROM AlscoLoteSujo  WHERE tabela = 'VentoDeDeus'  ORDER BY categoria ASC");
// executa a query
$dados1 = mysql_query($query1, $con) or die(mysql_error());
// transforma os dados em um array
$linha1 = mysql_fetch_assoc($dados1);

// calcula quantos dados retornaram
$total1 = mysql_num_rows($dados1);
if ($total1 === 0){
    $total1 = "Não existe nenhuma informação do que foi enviado, verifique as informações inseridas.";
}
echo 'Total: '.$total1.'';
//echo $linha1;

	if($total1 > 0) { 
		// inicia o loop que vai mostrar todos os dados
		do {
?>


              <?php
            //   $idd = $linha1['id'];
              // $categ = $linha1['categoria'];
               //$dataDaPublicacao= $linha['dataDaPublicacao'];
             //  $total= 4;
             if ($linha1['Nome_Funcionario'] == ""){
                 $nome1 = "Sem nome";
             }else{
                 $nome1 = $linha1['Nome_Funcionario'];
                 $nome1 = mb_convert_case($nome1, MB_CASE_TITLE, "UTF-8");
             }
              
              ?>
        
        <?php
        
 	for($i = 1; $i <= 1; $i++)
                  {
       
//$str = $categoria;
//print_r (explode(" ",$categoria));
//$arr = array($categoria);
//echo implode(" ",$arr);

       
echo  '
<p><span style="visibility:hidden;position:absolute;">'.$linha1['Codigo_De_Barras'].' - </span>'.$nome1.'</p>
';
                            
  //<input  style= "position:absolute; background-color: #FF5500; outline: 0; text-align: center; border-radius: 15px; border: 1px solid #blue; font-size: 10pt; margin: 2px; color: black; margin-left:100px; width:200px" id="enviar2" value ="Ver mais" type="button" >

						
     }	
                  
              
                
                            
              ?>
               
              

<?php
		// finaliza o loop que vai mostrar os dados
		}while( $linha1 = mysql_fetch_assoc($dados1));
	// fim do if
	}
?>

</div>
</div>

<div style="float:left;width:25% ; visibility:;position:;">
     <h4>Material que retornou corretamente
     <image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;" src="abrir.png"id="retornou1"></image>
<image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;visibility:hidden;" src="fechar.png"id="retornou2"></image>
</h4>
 <div id="retornou"style="float:left;width: ;visibility:hidden;position:;">

   
<?php
$query1 = ("
SELECT 
* FROM  AlscoLoteSujo AS sujo
                    INNER JOIN AlscoLoteLimpo AS limpo ON limpo.Codigo_De_Barras = sujo.Codigo_De_Barras
                    WHERE sujo.Data_do_envio = '$dataDoEnvio'
    AND sujo.Contrato = '$contrato'
    AND limpo.Data_da_entrega = '$dataDaEntrega'
    AND limpo.Contrato = '$contrato'
    ORDER BY limpo.Nome_Funcionario ASC
   ");
//GROUP BY sujo.Nome_Funcionario

//$query1 = ("SELECT *  FROM AlscoLoteSujo  WHERE tabela = 'VentoDeDeus'  ORDER BY categoria ASC");
// executa a query
$dados1 = mysql_query($query1, $con) or die(mysql_error());
// transforma os dados em um array
$linha1 = mysql_fetch_assoc($dados1);

// calcula quantos dados retornaram
$total1 = mysql_num_rows($dados1);

if ($total1 === 0){
    $total1 = "Não existe nenhuma informação do que foi enviado, verifique as informações inseridas.";
}
echo 'Total: '.$total1.'';
//echo $linha1;

	if($total1 > 0) { 
		// inicia o loop que vai mostrar todos os dados
		do {
?>


              <?php
            //   $idd = $linha1['id'];
              // $categ = $linha1['categoria'];
               //$dataDaPublicacao= $linha['dataDaPublicacao'];
             //  $total= 4;
             if ($linha1['Nome_Funcionario'] == ""){
                 $nome1 = "Sem nome";
             }else{
                 $nome1 = $linha1['Nome_Funcionario'];
                 $nome1 = mb_convert_case($nome1, MB_CASE_TITLE, "UTF-8");
             }
              
              ?>
        
        <?php
        
 	for($i = 1; $i <= 1; $i++)
                  {
       
//$str = $categoria;
//print_r (explode(" ",$categoria));
//$arr = array($categoria);
//echo implode(" ",$arr);

       
echo  '
<p><span style="visibility:hidden;position:absolute;">'.$linha1['Codigo_De_Barras'].' - </span>'.$nome1.'</p>
';
                            
  //<input  style= "position:absolute; background-color: #FF5500; outline: 0; text-align: center; border-radius: 15px; border: 1px solid #blue; font-size: 10pt; margin: 2px; color: black; margin-left:100px; width:200px" id="enviar2" value ="Ver mais" type="button" >

						
     }	
                  
              
                
                            
              ?>
               
              

<?php
		// finaliza o loop que vai mostrar os dados
		}while( $linha1 = mysql_fetch_assoc($dados1));
	// fim do if
	}
?>

</div>

</div>


<div style="float:left;width:25% ; visibility:;position:;">
<h4>Material que NÃO foi enviado
<image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;" src="abrir.png"id="nao_enviado1"></image>
<image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;visibility:hidden;" src="fechar.png"id="nao_enviado2"></image>
</h4>
<div  id="nao_enviado"style="float:left;width: ;visibility:hidden;position:;">


      
<?php
$query11 = ("
SELECT * FROM AlscoLoteLimpo AS limpo
                    
            WHERE NOT EXISTS    
                    (SELECT * FROM  AlscoLoteSujo AS sujo
                    WHERE   sujo.Codigo_De_Barras = limpo.Codigo_De_Barras
                    AND sujo.Data_do_envio = '$dataDoEnvio'
                    AND sujo.Contrato = '$contrato'
                   )
    
    AND Contrato = '$contrato'
    AND Data_da_entrega = '$dataDaEntrega'
        ORDER BY .limpo.Nome_Funcionario ASC
    ;


   ");
//GROUP BY sujo.Nome_Funcionario
/*
SELECT 
* FROM  AlscoLoteSujo AS sujo
                    INNER JOIN AlscoLoteLimpo AS limpo ON limpo.Codigo_De_Barras = sujo.Codigo_De_Barras
                    WHERE sujo.Data_do_envio = '$dataDoEnvio'
    AND sujo.Contrato = '$contrato'
    AND limpo.Data_da_entrega = '$dataDaEntrega'
    AND limpo.Contrato = '$contrato'
*/
//$query1 = ("SELECT *  FROM AlscoLoteSujo  WHERE tabela = 'VentoDeDeus'  ORDER BY categoria ASC");
// executa a query
$dados11 = mysql_query($query11, $con) or die(mysql_error());
// transforma os dados em um array
$linha11 = mysql_fetch_assoc($dados11);

// calcula quantos dados retornaram
$total11 = mysql_num_rows($dados11);
if ($total11 === 0){
    $total11 = "Não existe nenhuma informação do que foi enviado, verifique as informações inseridas.";
}
echo 'Total: '.$total11.'';
//echo $linha1;

	if($total11 > 0) { 
		// inicia o loop que vai mostrar todos os dados
		do {
?>


              <?php
            //   $idd = $linha1['id'];
              // $categ = $linha1['categoria'];
               //$dataDaPublicacao= $linha['dataDaPublicacao'];
             //  $total= 4;
             if ($linha11['Nome_Funcionario'] == ""){
                 $nome3 = "Sem nome";
             }else{
                 $nome3 = $linha11['Nome_Funcionario'];
                 $nome3 = mb_convert_case($nome3, MB_CASE_TITLE, "UTF-8");
             }
              
              ?>
        
        <?php
        
 	for($i = 1; $i <= 1; $i++)
                  {
       
//$str = $categoria;
//print_r (explode(" ",$categoria));
//$arr = array($categoria);
//echo implode(" ",$arr);

       
echo  '<p><span style="visibility:hidden;position:absolute;">'.$linha11['Codigo_De_Barras'].' - </span>'.$nome3.'</p>
';
                            
  //<input  style= "position:absolute; background-color: #FF5500; outline: 0; text-align: center; border-radius: 15px; border: 1px solid #blue; font-size: 10pt; margin: 2px; color: black; margin-left:100px; width:200px" id="enviar2" value ="Ver mais" type="button" >

						
     }	
                  
              
                
                            
              ?>
               
              

<?php
		// finaliza o loop que vai mostrar os dados
		}while( $linha11 = mysql_fetch_assoc($dados11));
	// fim do if
	}
?>



</div>

</div>

<div style="float:left;width:25% ; visibility:;position:;">
<h4>Material que NÃO retornou
<image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;" src="abrir.png"id="nao_retornou1"></image>
<image style="width:10px;margin-top:8px;margin-left:4px;position:absolute;visibility:hidden;" src="fechar.png"id="nao_retornou2"></image>


</h4>

  
<div  id="nao_retornou"style="float:left;width: ;visibility:hidden;position:;">
      
<?php
$query1 = ("
SELECT * FROM AlscoLoteSujo AS sujo
WHERE NOT EXISTS (SELECT * FROM AlscoLoteLimpo AS limpo 
WHERE sujo.Codigo_De_Barras = limpo.Codigo_De_Barras
AND sujo.Contrato = '$contrato'
    AND limpo.Data_da_entrega = '$dataDaEntrega'
    AND limpo.Contrato = '$contrato')
AND Contrato = '$contrato'
    AND Data_do_envio = '$dataDoEnvio'
        ORDER BY sujo.Nome_Funcionario ASC
    ;


   ");
//GROUP BY sujo.Nome_Funcionario
/*
SELECT 
* FROM  AlscoLoteSujo AS sujo
                    INNER JOIN AlscoLoteLimpo AS limpo ON limpo.Codigo_De_Barras = sujo.Codigo_De_Barras
                    WHERE sujo.Data_do_envio = '$dataDoEnvio'
    AND sujo.Contrato = '$contrato'
    AND limpo.Data_da_entrega = '$dataDaEntrega'
    AND limpo.Contrato = '$contrato'
*/
//$query1 = ("SELECT *  FROM AlscoLoteSujo  WHERE tabela = 'VentoDeDeus'  ORDER BY categoria ASC");
// executa a query
$dados1 = mysql_query($query1, $con) or die(mysql_error());
// transforma os dados em um array
$linha1 = mysql_fetch_assoc($dados1);

// calcula quantos dados retornaram
$total1 = mysql_num_rows($dados1);


if ($total1 === 0){
    $total1 = "Não existe nenhuma informação do que foi enviado, verifique as informações inseridas.";
}
echo 'Total: '.$total1.'';
//echo $linha1;

	if($total1 > 0) { 
		// inicia o loop que vai mostrar todos os dados
		do {
?>


              <?php
            //   $idd = $linha1['id'];
              // $categ = $linha1['categoria'];
               //$dataDaPublicacao= $linha['dataDaPublicacao'];
             //  $total= 4;
             if ($linha1['Nome_Funcionario'] == ""){
                 $nome2 = "Sem nome";
             }else{
                 $nome2 = $linha1['Nome_Funcionario'];
                 $nome2 = mb_convert_case($nome2, MB_CASE_TITLE, "UTF-8");
             }
              
              ?>
        
        <?php
        
 	for($i = 1; $i <= 1; $i++)
                  {
       
//$str = $categoria;
//print_r (explode(" ",$categoria));
//$arr = array($categoria);
//echo implode(" ",$arr);

       
echo  '<p><span style="visibility:hidden;position:absolute;">'.$linha1['Codigo_De_Barras'].' - </span>'.$nome2.'</p>
';
                            
  //<input  style= "position:absolute; background-color: #FF5500; outline: 0; text-align: center; border-radius: 15px; border: 1px solid #blue; font-size: 10pt; margin: 2px; color: black; margin-left:100px; width:200px" id="enviar2" value ="Ver mais" type="button" >

						
     }	
                  
              
                
                            
              ?>
               
              

<?php
		// finaliza o loop que vai mostrar os dados
		}while( $linha1 = mysql_fetch_assoc($dados1));
	// fim do if
	}
?>

</div>
</div>

</div>


<script>

var enviado = document.querySelector("#enviado1");
var retornou = document.querySelector("#retornou1");
var nao_enviado = document.querySelector("#nao_enviado1");
var nao_retornou = document.querySelector("#nao_retornou1");

var enviado2 = document.querySelector("#enviado2");
var retornou2 = document.querySelector("#retornou2");
var nao_enviado2 = document.querySelector("#nao_enviado2");
var nao_retornou2 = document.querySelector("#nao_retornou2");

 
enviado.addEventListener("click", function() {
    document.getElementById("enviado").style.visibility = 'visible';
  //  document.getElementById("retornou").style.visibility = 'hidden';
//    document.getElementById("nao_enviado").style.visibility = 'hidden';
  //  document.getElementById("nao_retornou").style.visibility = 'hidden';
    
    document.getElementById("enviado2").style.visibility = 'visible';
    document.getElementById("enviado1").style.visibility = 'hidden';
//        document.getElementById("nao_retornou2").style.visibility = 'hidden';
 //   document.getElementById("nao_retornou1").style.visibility = 'visible';
 //   document.getElementById("nao_enviado2").style.visibility = 'hidden';
 //   document.getElementById("nao_enviado1").style.visibility = 'visible';
 //   document.getElementById("retornou2").style.visibility = 'hidden';
 //   document.getElementById("retornou1").style.visibility = 'visible';



});

retornou.addEventListener("click", function() {
   // document.getElementById("enviado").style.visibility = 'hidden';
    document.getElementById("retornou").style.visibility = 'visible';
//    document.getElementById("nao_enviado").style.visibility = 'hidden';
//    document.getElementById("nao_retornou").style.visibility = 'hidden';
    
    document.getElementById("retornou1").style.visibility = 'hidden';
    document.getElementById("retornou2").style.visibility = 'visible';
    
  //  document.getElementById("nao_retornou2").style.visibility = 'hidden';
//    document.getElementById("nao_retornou1").style.visibility = 'visible';
 //   document.getElementById("nao_enviado2").style.visibility = 'hidden';
 //   document.getElementById("nao_enviado1").style.visibility = 'visible';

 //   document.getElementById("enviado1").style.visibility = 'visible';
 //   document.getElementById("enviado2").style.visibility = 'hidden';

    

});

nao_enviado.addEventListener("click", function() {
   // document.getElementById("enviado").style.visibility = 'hidden';
    //document.getElementById("retornou").style.visibility = 'hidden';
    document.getElementById("nao_enviado").style.visibility = 'visible';
//    document.getElementById("nao_retornou").style.visibility = 'hidden';
    
     document.getElementById("nao_enviado1").style.visibility = 'hidden';
    document.getElementById("nao_enviado2").style.visibility = 'visible';
   
 //   document.getElementById("nao_retornou2").style.visibility = 'hidden';
 //   document.getElementById("nao_retornou1").style.visibility = 'visible';

//    document.getElementById("retornou2").style.visibility = 'hidden';
//    document.getElementById("retornou1").style.visibility = 'visible';
 //   document.getElementById("enviado1").style.visibility = 'visible';
 //   document.getElementById("enviado2").style.visibility = 'hidden';


});

nao_retornou.addEventListener("click", function() {
   // document.getElementById("enviado").style.visibility = 'hidden';
//    document.getElementById("retornou").style.visibility = 'hidden';
//    document.getElementById("nao_enviado").style.visibility = 'hidden';
    document.getElementById("nao_retornou").style.visibility = 'visible';
    
      document.getElementById("nao_retornou1").style.visibility = 'hidden';
        document.getElementById("nao_retornou2").style.visibility = 'visible';


//    document.getElementById("nao_enviado2").style.visibility = 'hidden';
//    document.getElementById("nao_enviado1").style.visibility = 'visible';
//    document.getElementById("retornou2").style.visibility = 'hidden';
//    document.getElementById("retornou1").style.visibility = 'visible';
//    document.getElementById("enviado1").style.visibility = 'visible';
//    document.getElementById("enviado2").style.visibility = 'hidden';

});




  
 
enviado2.addEventListener("click", function() {
    document.getElementById("enviado").style.visibility = 'hidden';
  //  document.getElementById("retornou").style.visibility = 'hidden';
//    document.getElementById("nao_enviado").style.visibility = 'hidden';
//    document.getElementById("nao_retornou").style.visibility = 'hidden';
     
    document.getElementById("enviado1").style.visibility = 'visible';
    document.getElementById("enviado2").style.visibility = 'hidden';
    
//    document.getElementById("nao_retornou2").style.visibility = 'hidden';
//    document.getElementById("nao_retornou1").style.visibility = 'visible';
//    document.getElementById("nao_enviado2").style.visibility = 'hidden';
//    document.getElementById("nao_enviado1").style.visibility = 'visible';
//    document.getElementById("retornou2").style.visibility = 'hidden';
//    document.getElementById("retornou1").style.visibility = 'visible';
    
    


});

retornou2.addEventListener("click", function() {
  //  document.getElementById("enviado").style.visibility = 'hidden';
    document.getElementById("retornou").style.visibility = 'hidden';
//    document.getElementById("nao_enviado").style.visibility = 'hidden';
//    document.getElementById("nao_retornou").style.visibility = 'hidden';
    
    
    document.getElementById("retornou2").style.visibility = 'hidden';
    document.getElementById("retornou1").style.visibility = 'visible';
    
 //   document.getElementById("nao_enviado2").style.visibility = 'hidden';
 //   document.getElementById("nao_enviado1").style.visibility = 'visible';
    document.getElementById("retornou2").style.visibility = 'hidden';
    document.getElementById("retornou1").style.visibility = 'visible';
//    document.getElementById("enviado1").style.visibility = 'visible';
//    document.getElementById("enviado2").style.visibility = 'hidden';



});

nao_enviado2.addEventListener("click", function() {
//    document.getElementById("enviado").style.visibility = 'hidden';
//    document.getElementById("retornou").style.visibility = 'hidden';
    document.getElementById("nao_enviado").style.visibility = 'hidden';
//    document.getElementById("nao_retornou").style.visibility = 'hidden';
    
     
    document.getElementById("nao_enviado2").style.visibility = 'hidden';
    document.getElementById("nao_enviado1").style.visibility = 'visible';
   
//    document.getElementById("nao_retornou2").style.visibility = 'hidden';
//    document.getElementById("nao_retornou1").style.visibility = 'visible';
//    document.getElementById("retornou2").style.visibility = 'hidden';
//    document.getElementById("retornou1").style.visibility = 'visible';
//    document.getElementById("enviado1").style.visibility = 'visible';
//    document.getElementById("enviado2").style.visibility = 'hidden';


});

nao_retornou2.addEventListener("click", function() {
  //  document.getElementById("enviado").style.visibility = 'hidden';
//    document.getElementById("retornou").style.visibility = 'hidden';
//    document.getElementById("nao_enviado").style.visibility = 'hidden';
    document.getElementById("nao_retornou").style.visibility = 'hidden';
    
    
    document.getElementById("nao_retornou2").style.visibility = 'hidden';
    document.getElementById("nao_retornou1").style.visibility = 'visible';
  
  //  document.getElementById("nao_enviado2").style.visibility = 'hidden';
//    document.getElementById("nao_enviado1").style.visibility = 'visible';
//    document.getElementById("enviado1").style.visibility = 'visible';
//    document.getElementById("enviado2").style.visibility = 'hidden';


});
  
 
</script>
<html>