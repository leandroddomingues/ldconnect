<!DOCTYPE html>

<html lang="pt">
    <?php

//$_GET['Ano'] = "2021";

include('conexao.php');	
    session_start();
    ?>
    <head>
        
        
    </head>
   <body>
 <!-- --	TABELA  inicio <1>
 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| \\\\\\\\\\\\\\\\||
 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||   \\\\\\\\\\\\\\||
 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||     \\\\\\\\\\\\||
 |||||||||||||||||||||||||||||||||||||||||||||||                        \\\\\\\\||
 |||||||||||||||||||||||||||||||||||||||||||||||                        ////////||
 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||       //////////||
 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||     ////////////||
 ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||   //////////////||
 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| ////////////////||
 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 -->
    <div  class="divv"style="background-color:#F5F5F5;border:1px solid white;  width:130px;margin-left:4px; min-height:300px; 
max-height: none; height: auto; visibility:;float:left; font-size: 8pt;"
id="divprin" align="center" >
        
        <div style="border-bottom:1px solid #FE9;">
<h6><strong>Janeiro</strong></h6>

<div style="margin-right:;width:;">
    
   <?php
//$mesSelecionado = $_GET["Mes"];
   
$mesSelecionado = "01";
//$dataAtual = date("Y-m-d");
$ano =   $_SESSION["Ano"] ;
$mes =  "$ano-$mesSelecionado-";
$mes1 =  "$ano-$mesSelecionado-31";

$idusuario = $_SESSION['usuarioId'];



if ($ano < date("Y")) {
$sql5 = "SELECT SUM(valorRealizado) as soma1 FROM ControleFinanceiro WHERE executado = '1' && id_usuario = '$idusuario'  && datadarealizacao <= '$mes1'  ";
$rs5=mysql_query($sql5,$conn) or die(mysql_error());
$result5=mysql_fetch_array($rs5);
 $simulado = "Resultado:";
 
$vlq = $result5['soma1'];
	 if($vlq < 0)
	 
	 {
	 $cor2 = "red";
	  }
	  
	 if($vlq  > 0)
	 
	 {
	 $cor2 = "green";
	  }
	  
   echo '
   '.$simulado.' <strong style="text-align:left;width:100px;color:'.$cor2.'; " > R$ '.$vlq.'</strong> ';
} elseif ($ano == date("Y") && $mesSelecionado < date("m")) {
$sql5 = "SELECT SUM(valorRealizado) as soma1 FROM ControleFinanceiro WHERE  executado = '1' && id_usuario = '$idusuario' && datadarealizacao <= '$mes1'  ";
$rs5=mysql_query($sql5,$conn) or die(mysql_error());
$result5=mysql_fetch_array($rs5);
 $simulado = "Resultado:";
 
$vlq = $result5['soma1'];
	 if($vlq < 0)
	 
	 {
	 $cor2 = "red";
	  }
	  
	 if($vlq  > 0)
	 
	 {
	 $cor2 = "green";
	  }
	  
   echo '
   '.$simulado.' <strong style="text-align:left;width:100px;color:'.$cor2.'; " > R$ '.$vlq.'</strong> ';
} elseif ($ano == date("Y") && $mesSelecionado == date("m")) {
             
$sql5 = "SELECT SUM(valorRealizado) as soma2 FROM ControleFinanceiro WHERE  executado= '1' && id_usuario = '$idusuario' && datadarealizacao <= '$mes1'   ";
$rs5=mysql_query($sql5,$conn) or die(mysql_error());
$result5=mysql_fetch_array($rs5);
$simulado = "Simulação:";

$vlq = $result5['soma2'];
	 if($vlq < 0)
	 
	 {
	 $cor2 = "red";
	  }
	  
	 if($vlq  > 0)
	 
	 {
	 $cor2 = "green";
	  }
	  
   echo '
   Saldo anterior: <strong style="text-align:left;width:100px;color:'.$cor2.'; " > R$ '.$vlq.'</strong> ';

      
$sql5q = "SELECT SUM(valor) as soma FROM ControleFinanceiro WHERE executado= '0' && simulado= '1' && id_usuario = '$idusuario' && vencimento <= '$mes1'   ";
$rs5q=mysql_query($sql5q,$conn) or die(mysql_error());
$result5q=mysql_fetch_array($rs5q);
$simuladoq = "Simulação:";

$vlqq = $result5q['soma'] + $vlq;
	 if($vlqq < 0)
	 
	 {
	 $cor2q = "red";
	  }
	  
	 if($vlqq  > 0)
	 
	 {
	 $cor2q = "green";
	  }
	  
   echo '
   '.$simuladoq.' <strong style="text-align:left;width:100px;color:'.$cor2q.'; " > R$ '.$vlqq.'</strong> ';
} elseif ($ano == date("Y") && $mesSelecionado > date("m")) {
          
$sql5 = "SELECT SUM(valorRealizado) as soma2 FROM ControleFinanceiro WHERE  executado= '1' && id_usuario = '$idusuario' && datadarealizacao <= '$mes1'   ";
$rs5=mysql_query($sql5,$conn) or die(mysql_error());
$result5=mysql_fetch_array($rs5);
$simulado = "Simulação:";

$vlq = $result5['soma2'];
	 if($vlq < 0)
	 
	 {
	 $cor2 = "red";
	  }
	  
	 if($vlq  > 0)
	 
	 {
	 $cor2 = "green";
	  }
	  
   echo '
   Saldo anterior: <strong style="text-align:left;width:100px;color:'.$cor2.'; " > R$ '.$vlq.'</strong> ';

      
$sql5q = "SELECT SUM(valor) as soma FROM ControleFinanceiro WHERE executado= '0' && simulado= '1' && id_usuario = '$idusuario' && vencimento <= '$mes1'   ";
$rs5q=mysql_query($sql5q,$conn) or die(mysql_error());
$result5q=mysql_fetch_array($rs5q);
$simuladoq = "Simulação:";

$vlqq = $result5q['soma'] + $vlq;
	 if($vlqq < 0)
	 
	 {
	 $cor2q = "red";
	  }
	  
	 if($vlqq  > 0)
	 
	 {
	 $cor2q = "green";
	  }
	  
   echo '
   '.$simuladoq.' <strong style="text-align:left;width:100px;color:'.$cor2q.'; " > R$ '.$vlqq.'</strong> ';
} elseif ($ano > date("Y")) {
        
$sql5 = "SELECT SUM(valorRealizado) as soma2 FROM ControleFinanceiro WHERE  executado= '1' && id_usuario = '$idusuario' && datadarealizacao <= '$mes1'   ";
$rs5=mysql_query($sql5,$conn) or die(mysql_error());
$result5=mysql_fetch_array($rs5);
$simulado = "Simulação:";

$vlq = $result5['soma2'];
	 if($vlq < 0)
	 
	 {
	 $cor2 = "red";
	  }
	  
	 if($vlq  > 0)
	 
	 {
	 $cor2 = "green";
	  }
	  
   echo '
   Saldo anterior: <strong style="text-align:left;width:100px;color:'.$cor2.'; " > R$ '.$vlq.'</strong> ';

      
$sql5q = "SELECT SUM(valor) as soma FROM ControleFinanceiro WHERE executado= '0' && simulado= '1' && id_usuario = '$idusuario' && vencimento <= '$mes1'   ";
$rs5q=mysql_query($sql5q,$conn) or die(mysql_error());
$result5q=mysql_fetch_array($rs5q);
$simuladoq = "Simulação:";

$vlqq = $result5q['soma'] + $vlq;
	 if($vlqq < 0)
	 
	 {
	 $cor2q = "red";
	  }
	  
	 if($vlqq  > 0)
	 
	 {
	 $cor2q = "green";
	  }
	  
   echo '
   '.$simuladoq.' <strong style="text-align:left;width:100px;color:'.$cor2q.'; " > R$ '.$vlqq.'</strong> ';
} 
?>

</div>

</div>
<?php 
// where titulo = '".$_GET["titulo"]."' "



if ($ano < date("Y"))   {
$sql="SELECT * from ControleFinanceiro WHERE executado = '1' && id_usuario = '$idusuario'  && vencimento LIKE '%$mes%' && vencimento <= '$mes1' ORDER BY vencimento ASC";
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
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
}

//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '
<div  style="background-color:white;margin-left:;width:;float:left;"onmouseover="porCima(this)" onmouseout="porFora(this)">
    <div style="margin-top:;position:;" id="'.$result["id"].'">

<div style="float:left; margin-right:1%;width:125px;" >
    <div align="left" style="float:left;">
        <img style="float:center; margin-left:%;" src="'.$img.'" width="10" height="12" ></img>
            <strong style="font-size:9pt" id="rec_des" name="rec_des"placeholder="0">'.$rec_des.'</strong>
    </div>
    </div>
<div style="float:left; margin-right:;width:125px;" >
<input type="hidden" style="position:absolute;" id="id" name="id" value="'.$result["id"].'">
<strong>'.$venc.'</strong>
<span style="color:'.$cor.';margin-left:3px;">      R$ '.$val.'</span>
</div>

<div   id=""style="visibility:;background-color:;float:left; width:128px;margin-right:;position:;">

        <form style="position:;margin-top:;float:;" action="" method="get"     >						
            <button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:;margin-left:;"   
            id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Editar</button>
            </form>

<input type="hidden" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">

</div>

<div style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
</div>
	
	</div>
</div>


';
           
                  }
// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
	}
}elseif ($ano == date("Y") && $mesSelecionado < date("m"))   {
$sql="SELECT * from ControleFinanceiro WHERE executado = '1' && id_usuario = '$idusuario'  && vencimento LIKE '%$mes%' && vencimento <= '$mes1'  ORDER BY vencimento ASC";
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
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
}

//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '
<div  style="background-color:white;margin-left:;width:;float:left;"onmouseover="porCima(this)" onmouseout="porFora(this)">
    <div style="margin-top:;position:;" id="'.$result["id"].'">

<div style="float:left; margin-right:1%;width:125px;" >
    <div align="left" style="float:left;">
        <img style="float:center; margin-left:%;" src="'.$img.'" width="10" height="12" ></img>
            <strong style="font-size:9pt" id="rec_des" name="rec_des"placeholder="0">'.$rec_des.'</strong>
    </div>
    </div>
<div style="float:left; margin-right:;width:125px;" >
<input type="hidden" style="position:absolute;" id="id" name="id" value="'.$result["id"].'">
<strong>'.$venc.'</strong>
<span style="color:'.$cor.';margin-left:3px;">      R$ '.$val.'</span>
</div>

<div   id=""style="visibility:;background-color:;float:left; width:128px;margin-right:;position:;">

        <form style="position:;margin-top:;float:;" action="" method="get"     >						
            <button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:;margin-left:;"   
            id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Editar</button>
            </form>

<input type="hidden" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">

</div>

<div style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
</div>
	
	</div>
</div>


';
           
                  }
// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
	}

}elseif ($ano == date("Y") && $mesSelecionado == date("m"))  {
$mes32 = date("Y-m-d");

$sql="SELECT * from ControleFinanceiro WHERE executado = '0' && id_usuario = '$idusuario'  && vencimento <= '$mes1'  ORDER BY vencimento ASC";
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
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
 
 
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";



}

if ($result["vencimento"] == $mes32 ) {
    $venceHoje = "VENCE HOJE";
    $vencidoCor = "white";
    $vencidoCorTexto = "green";
}
if ($result["vencimento"] < $mes32 ) {
    $venceHoje = "ATRASADO";
     $vencidoCor = "#edededff";
      $vencidoCorTexto = "red";
}
if ($result["vencimento"] > $mes32 ) {
    $venceHoje = "";
    
}

//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '

<div style="margin-left:;width:;" id="btns" >

<div style="margin-top:;position:;" id="'.$result["id"].'"></div>
<form id="teste" method="POST" action="enviarSimular.php">

     <div style="float:left;; margin-right:;background-color:'.$vencidoCor.';"onmouseover="porCima2(this)" onmouseout="porFora2(this)" >
            <div align="center" style="float:left;width:128px;">
     
      <strong style="color:'.$vencidoCorTexto.';">'.$venceHoje.'</strong>
</div>
<div align="center" style="float:left;">
               
                <img style="float:center; margin-left:;" src="'.$img.'" width="10" height="12" ></img>
                <strong style="font-size:9pt" id="rec_des" name="rec_des"placeholder="0">'.$rec_des.'</strong>
            </div>
            
    <div style="width:125px;float:left;">
        <input type="hidden" style="position:absolute;" id="id" name="id" value="'.$result["id"].'">
       <strong>'.$venc.'</strong>
        <span style="color:'.$cor.';margin-left:;">      R$ '.$val.'</span>
    </div>
<div  style="visibility:;position:;;float:left; width:128px;margin-left:;float:left; border-bottom:1px solid #FE9;">
  
<input type="checkbox" onChange="this.form.submit()"  style="margin-left:-70px;"class="simula"id="simular" '.$booll.' name="simular" value="'.$val.'">Simular
 
    <input type="submit" id="submitSimular" value="SIMULAR" style="position:absolute;visibility:hidden; background-color:transparent;border:none;">
    <input style="position:absolute;"type="hidden" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">
</form>
<form style="position:;margin-top:;float:;" action="" method="get"     >						
            <button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:-20px;margin-right:;float:right;"   
            id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Editar</button>
            </form>
</div>

<div id="'.$result["id"].'"style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
</div>

</div>
</div>


';
		    }
                  //<hr align="center"width="" style="margin-top:;border-color:black;"/>

	
	
// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
	
	
	}
	
		
	
$sql="SELECT * from ControleFinanceiro WHERE executado = '0' && id_usuario = '$idusuario'  && vencimento LIKE '%$mes%' && vencimento > '$mes1' ORDER BY vencimento ASC";
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
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
}

//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '
<div style="margin-left:;width:;" id="btns" >

<div style="margin-top:;position:;" id="'.$result["id"].'"></div>
<form id="teste" method="POST" action="enviarSimular.php">

     <div style="float:left;; margin-right:;background-color:white;" onmouseover="porCima(this)" onmouseout="porFora(this)">
            <div align="center" style="float:left;width:130px;">
     
     
</div>
<div align="center" style="float:left;">
               
                <img style="float:center; margin-left:;" src="'.$img.'" width="10" height="12" ></img>
                <strong style="font-size:9pt" id="rec_des" name="rec_des"placeholder="0">'.$rec_des.'</strong>
            </div>
            
    <div style="width:125px;float:left;">
        <input type="hidden" style="position:absolute;" id="id" name="id" value="'.$result["id"].'">
       <strong>'.$venc.'</strong>
        <span style="color:'.$cor.';margin-left:3px;">      R$ '.$val.'</span>
    </div>
<div  style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
  
<input type="checkbox"style="margin-left:-70px;" onChange="this.form.submit()"  class="simular"id="simular" '.$booll.' name="simular" value="'.$val.'">Simular

            
            
    <input type="submit" id="submitSimular" value="SIMULAR" style="position:absolute;visibility:hidden; background-color:transparent;border:none;">
    <input type="hidden" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">
</form>

<form style="position:;margin-top:;float:;" action="" method="get"     >						
            <button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:-20px;margin-right:;float:right;"   
            id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Editar</button>
            </form>
</div>

<div id="'.$result["id"].'"style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
</div>

</div>
</div>

';
           
                  }
                  //<hr align="center"width="" style="margin-top:;border-color:black;"/>

// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
	}
	
}elseif ($ano == date("Y") && $mesSelecionado > date("m"))  {
//$mes32 = date("Y-m-d");

	
$sql="SELECT * from ControleFinanceiro WHERE executado = '0' && id_usuario = '$idusuario'  && vencimento LIKE '%$mes%' && vencimento <= '$mes1' ORDER BY vencimento ASC";
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
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
}

//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '
<div style="margin-left:;width:;" id="btns" >

<div style="margin-top:;position:;" id="'.$result["id"].'"></div>
<form id="teste" method="POST" action="enviarSimular.php">

     <div style="float:left;; margin-right:;background-color:white;" onmouseover="porCima(this)" onmouseout="porFora(this)">
            <div align="center" style="float:left;width:130px;">
     
     
</div>
<div align="center" style="float:left;">
               
                <img style="float:center; margin-left:;" src="'.$img.'" width="10" height="12" ></img>
                <strong style="font-size:9pt" id="rec_des" name="rec_des"placeholder="0">'.$rec_des.'</strong>
            </div>
            
    <div style="width:125px;float:left;">
        <input type="hidden" style="position:absolute;" id="id" name="id" value="'.$result["id"].'">
       <strong>'.$venc.'</strong>
        <span style="color:'.$cor.';margin-left:3px;">      R$ '.$val.'</span>
    </div>
<div  style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
  
<input type="checkbox"style="margin-left:-70px;" onChange="this.form.submit()"  class="simular"id="simular" '.$booll.' name="simular" value="'.$val.'">Simular

            
            
    <input type="submit" id="submitSimular" value="SIMULAR" style="position:absolute;visibility:hidden; background-color:transparent;border:none;">
    <input type="hidden" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">
</form>

<form style="position:;margin-top:;float:;" action="" method="get"     >						
            <button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:-20px;margin-right:;float:right;"   
            id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Editar</button>
            </form>
</div>

<div id="'.$result["id"].'"style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
</div>

</div>
</div>

';
           
                  }
                  //<hr align="center"width="" style="margin-top:;border-color:black;"/>

// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
	}
	
}elseif ($ano > date("Y"))  {
    
$sql="SELECT * from ControleFinanceiro WHERE executado = '0' && id_usuario = '$idusuario'  && vencimento LIKE '%$mes%' ORDER BY vencimento ASC";
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
     $img = "https://www.ventodedeus.com.br/imagens/red.png" ;
      $cor = "red";
}
if($val > 0) {
    $pr = "Recebido em: ";
    $img = "https://www.ventodedeus.com.br/imagens/green.png";
	 $cor = "green";
}

//		     $check = $result["simulado"];
		    
		    	for($i = 1; $i <= 1; $i++);
		    {
                      
?>

    <?php
    
    
    
echo '
<div style="margin-left:;width:;" id="btns"">

<div style="margin-top:;position:;" id="'.$result["id"].'" ></div>
<form id="teste" method="POST" action="enviarSimular.php">

     <div style="float:left;; margin-right:;background-color:white;"onmouseover="porCima(this)" onmouseout="porFora(this)" >
            <div align="center" style="float:left;width:130px;">
     
    
</div>
<div align="center" style="float:left;">
               
                <img style="float:center; margin-left:;" src="'.$img.'" width="10" height="12" ></img>
                <strong style="font-size:9pt" id="rec_des" name="rec_des"placeholder="0">'.$rec_des.'</strong>
            </div>
            
    <div style="width:125px;float:left;">
        <input type="hidden" style="position:absolute;" id="id" name="id" value="'.$result["id"].'">
       <strong>'.$venc.'</strong>
        <span style="color:'.$cor.';margin-left:3px;">      R$ '.$val.'</span>
    </div>
<div  style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
  
<input type="checkbox" onChange="this.form.submit()" style="margin-left:-70px;"class="simular"id="simular" '.$booll.' name="simular" value="'.$val.'">Simular

            
            
    <input type="submit" id="submitSimular" value="SIMULAR" style="position:absolute;visibility:hidden; background-color:transparent;border:none;">
    <input type="hidden" id="id_usuario" name="id_usuario" value="'.$result["id_usuario"].'">
</form>

<form style="position:;margin-top:;float:;" action="" method="get"     >						
            <button data-toggle="modal" data-target="#myModal3" style="position:;margin-top:-20px;margin-right:;float:right;"   
            id="editar"  type="submit" name="id" id="idPessoa" class="botao"  value="'. $result["id"].'"  >Editar</button>
            </form>
</div>

<div id="'.$result["id"].'"style="visibility:;position:;background-color:;float:left; width:125px;margin-left:;float:left; border-bottom:1px solid #FE9;">
</div>

</div>
</div>

';
           
                  }
                  //<hr align="center"width="" style="margin-top:;border-color:black;"/>

// finaliza o loop que vai mostrar os dados
		}while( $result = mysql_fetch_assoc($rs));
	// fim do if
	}
	
}
//<hr align="center"width="" style="margin-top:;border-color:black;"/>
?>
	</div>
<!-- --	TABELA  fim 
 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 //////////////// ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 //////////////   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 ////////////     ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 //////////       ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 ////////                        |||||||||||||||||||||||||||||||||||||||||||||||
 \\\\\\\\                        |||||||||||||||||||||||||||||||||||||||||||||||
 \\\\\\\\\\       ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 \\\\\\\\\\\\     ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 \\\\\\\\\\\\\\   ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 \\\\\\\\\\\\\\\  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 -->
    </body>
    </html>