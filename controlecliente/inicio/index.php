<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <?php
session_start();
?>



  
  
  
  		<meta charset="utf-8">
		<title>Cadastrando itens</title>
		
	<style>
	




.botao{
	font-weight: bold;
		background-color: white;
	float: ;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-top-color: black;
	border-right-color:black ;
	border-bottom-color:black;
	border-left-color: black;
	color: black;
	margin-left: ;
}
.botao:hover{
	color: #330000;
	background-color: #8ba8abc3;
	/*CSS 3*/
	/*border-radius: 10px 0px 10px 0px;*/
}
#outer {
  align-items: center;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
}
.formulario_dos_itens{
    visibility:hidden;
    position:absolute;
}

.formulario_dos_itens_visible{
    visibility:visible;
    position:relative;
}

	    
	</style>
	<head>
	<body>
	    
	    
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
	
	
	
<script>
function utilizarLeitor(){
    $('#codigoDiv').removeClass('formulario_dos_itens_visible');
    $('#codigoDiv').addClass('formulario_dos_itens');
    
  //   $('#codigo2').removeClass('formulario_dos_itens');
//    $('#codigo2').addClass('formulario_dos_itens_visible');
    
    $('#EnviarCodigoDeBarras').removeClass('formulario_dos_itens_visible');
    $('#EnviarCodigoDeBarras').addClass('formulario_dos_itens');
    
    
 $('#LeitorDeCodigoDeBarras').removeClass('formulario_dos_itens_visible');
 $('#LeitorDeCodigoDeBarras').removeClass('formulario_dos_itens_visible');
    $('#LeitorDeCodigoDeBarras').addClass('formulario_dos_itens');
    
      $('#BtnDigitarCodigoDeBarras').removeClass('formulario_dos_itens');
    $('#BtnDigitarCodigoDeBarras').addClass('formulario_dos_itens_visible');
   
$('#codigo3').focus();
    
}
function digitarCodigo(){
    
     $('#codigoDiv').removeClass('formulario_dos_itens');
       $('#codigoDiv').addClass('formulario_dos_itens_visible');
      //  $('#codigoDiv1').removeClass('formulario_dos_itens');
      // $('#codigoDiv1').addClass('formulario_dos_itens_visible');
   //  $('#codigo2').removeClass('formulario_dos_itens_visible');
    //$('#codigo2').addClass('formulario_dos_itens');
    
    $('#EnviarCodigoDeBarras').removeClass('formulario_dos_itens');
    $('#EnviarCodigoDeBarras').addClass('formulario_dos_itens_visible');
 
 $('#LeitorDeCodigoDeBarras').removeClass('formulario_dos_itens');
    $('#LeitorDeCodigoDeBarras').addClass('formulario_dos_itens_visible');
      
   $('#BtnDigitarCodigoDeBarras').removeClass('formulario_dos_itens_visible');
    $('#BtnDigitarCodigoDeBarras').addClass('formulario_dos_itens');
   
$('#codigo3').focus();
}
function enviarCodigoDeBarras(){
    
var dadosFormulario = $("#form-consulta1").serialize();

$.ajax({
  type: "POST",
  url: "proc_pesq_user4.php",
  data: dadosFormulario,
  success: function(resposta) {
      	//$(".resultado").html("Clicado - X1");
      		$(".td").html(resposta);
      		
     $('#tabela').removeClass('formulario_dos_itens');
     $('#tabela').addClass('formulario_dos_itens_visible');
    

    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
    // correu mal, agir em conformidade
  }
});
}
function LeitorDeCodigoDeBarras(){
	enviarCodigoDeBarras()
//	    alert("Tecla");
	}
	
  $(document).ready( function () {
    //  alert("Sessao");

      
$(document).on('keyup', function(event) {
$('#codigo1').val($('#codigo2').val());
$('#codigo1').val($('#codigo3').val());
    if(event.keyCode === 13) {
//alert("Enter");
        // Sua função aqui
enviarCodigoDeBarras();
    }

});
 // alert("Iniciou");
    // 	$(".td").html('resposta');
     	inicio();
     	
     	
     	
  });
  function inicio(){
  //  alert("Iniciou");
        var dadosFormulario = $("#form-consulta1").serialize();

$.ajax({
  type: "POST",
  url: "proc_pesq_user5.php",
  data: dadosFormulario,
  success: function(resposta1) {
      	//$(".resultado").html("Clicado - X1");
      		$(".td1").html(resposta1);
      		
   //  $('#tabela').removeClass('formulario_dos_itens');
    // $('#tabela').addClass('formulario_dos_itens_visible');
    

    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
    // correu mal, agir em conformidade
  }
});

   
     //	$(".resultado").html("Clicado - X");
// $("#textocoment").val()
var dadosFormulario = $("#form-consulta1").serialize();

$.ajax({
  type: "POST",
  url: "proc_pesq_user3.php",
  data: dadosFormulario,
  success: function(resposta) {
      	//$(".resultado").html("Clicado - X1");
      		$(".td").html(resposta);
      		
     $('#tabela').removeClass('formulario_dos_itens');
     $('#tabela').addClass('formulario_dos_itens_visible');
    

    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
    // correu mal, agir em conformidade
  }
});

}
    $(function(){


	/*$("#pesquisa").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('proc_pesq_user.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}
	});
	
	*/
		$("#editarCliente").click(function(){
		     $('#editarCliente').addClass('formulario_dos_itens');
        $('#editarCliente').removeClass('formulario_dos_itens_visible');
        
		     $('#cntrato').addClass('formulario_dos_itens_visible');
        $('#cntrato').removeClass('formulario_dos_itens');
        
         $('#formulario_dos_itens').addClass('formulario_dos_itens');
        $('#formulario_dos_itens').removeClass('formulario_dos_itens_visible');
        
         $('#btn_enviar_contrato').addClass('formulario_dos_itens');
        $('#btn_enviar_contrato').removeClass('formulario_dos_itens_visible');
        
         $('#btn_enviar_contrato2').addClass('formulario_dos_itens_visible');
        $('#btn_enviar_contrato2').removeClass('formulario_dos_itens');
        const newDiv = $("<h4  class=\"negacao\"> Preencha os campos abaixo: </h4>");

        		$(".resultado").html(newDiv);
		});
		
	$("#btn_enviar_contrato2").click(function(){
		//Recuperar o valor do campo
		var contrato1 = $("#contrato").val();
		var cliente1 = $("#cliente").val();
if (contrato1 != "" ){
   $('#cntrato').removeClass('formulario_dos_itens_visible');
        $('#cntrato').addClass('formulario_dos_itens');
        
         $('#formulario_dos_itens').removeClass('formulario_dos_itens');
        $('#formulario_dos_itens').addClass('formulario_dos_itens_visible');
        
         $('#btn_enviar_contrato').removeClass('formulario_dos_itens');
        $('#btn_enviar_contrato').addClass('formulario_dos_itens_visible');
        
         $('#btn_enviar_contrato2').removeClass('formulario_dos_itens_visible');
        $('#btn_enviar_contrato2').addClass('formulario_dos_itens');
        	
        	 $('#editarCliente').removeClass('formulario_dos_itens');
        $('#editarCliente').addClass('formulario_dos_itens_visible');
        
        	const newDiv = $("<strong> Contrato: </strong>"+ contrato1 + "	<br>	  </div>");

        	$(".resultado").html(newDiv);
        	
}else{
    	const newDiv = $("<h4  class=\"negacao\"> Preencha os campos acima! </h4>");

        	$(".resultado").html(newDiv);
        	
}
//	enviado();
	
/*	
		//Verificar se há algo digitado
		if(contrato1 != ''){
		//    $(".resultado").html(contrato1 + "/ - " + cliente1);
			var dados = {
				contrato : contrato1
				cliente : cliente1
			}
			$.post('proc_pesq_user.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		
		    
		}
		
		*/
		

     $('#tabela').removeClass('formulario_dos_itens');
     $('#tabela').addClass('formulario_dos_itens_visible');
    





         
        
     //	$(".resultado").html("Clicado - X");
// $("#textocoment").val()
var dadosFormulario = $("#form-cntrato").serialize();

$.ajax({
  type: "POST",
  url: "proc_pesq_user3.php",
  data: dadosFormulario,
  success: function(resposta) {
      	//$(".resultado").html("Clicado - X1");
      		$(".td").html(resposta);
      		
     $('#tabela').removeClass('formulario_dos_itens');
     $('#tabela').addClass('formulario_dos_itens_visible');
    

    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
    // correu mal, agir em conformidade
  }
});


	});
});
    


    function  enviado(){
        

 //       alert($('#codigo').val());
var codigo = $('#codigo').val();
var artigo = $('#artigo').val();
var estoque = $('#estoque').val();
var npessoas = $('#n_de_pessoas').val();
 if (codigo == "" ||artigo  == ""|| estoque == "" || npessoas == ""){
 alert("Preencha todos os campos!")
 
 
}else{
   



     $('#tabela').removeClass('formulario_dos_itens');
     $('#tabela').addClass('formulario_dos_itens_visible');
    





         
        
     //	$(".resultado").html("Clicado - X");
// $("#textocoment").val()
var dadosFormulario = $("#form-cntrato").serialize();

$.ajax({
  type: "POST",
  url: "proc_pesq_user2.php",
  data: dadosFormulario,
  success: function(resposta) {
      if(resposta == "Erro"){
      alert('Este item já foi cadastrado!');
      }else{
      	//$(".resultado").html("Clicado - X1");
      		$(".td").html(resposta);
      			$(".resultado2").html(resposta);
      		
$('#codigo').val("");
$('#artigo').val("");
$('#estoque').val("");
$('#fabricacao_da_peca').val("");
$('#n_de_pessoas').val("");
      }
    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
    // correu mal, agir em conformidade
  }
});

     
/*
	//$(".resultado").html("Clicado2");
	
var dadosFormulario = "";//$("#coment").serialize();
	var contrato1 = $("#contrato").val();
		var cliente1 = $("#cliente").val();
//		var dados = {
//				contrato : contrato1
//				cliente : cliente1
//			};
$.ajax({
  type: "POST",
  url: "proc_pesq_user.php",
  data: dados,
  success: function(resposta) {
    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
   
    // const newBtn = $("<button type=\button\" class=\"negacao\">Pressione-me!</button>");

//   alert(resposta);
//const newBtn = $(resposta);

    
    // Adiciona-o à lista de botões:
    $(".resultado").html(resposta);
//   $("#div1").append(newBtn);
  },
  error: function() {
 $(".resultado").html("correu mal, agir em conformidade");
  }
});

*/
 }
 
        
    };
    
</script>
	<div style="text-align:center;"id="">  
		<h1>Cadastrando itens</h1>
			<div  width="750px"id="cntrato">
  <form method="GET" id="form-consulta" action="">
    		
    		    	<h3>Adicione os dados a seguir:</h3>
		  
    		<label>Digite o número do contrato</label><br>
		    <input type="text" id="contrato"name="contrato" value="<?php echo $_GET["contrato"]?>"><br><br>
	      <button>Enviar</button>
	      </form>
 <br>
 <table style='border:solid 1px;margin-left:20%;width:60%;'>
     <tr> 

<th style='text-align:center;'width="250px">Contrato</th> 
<th style='text-align:center;'width="250px">Cliente</th> 
<th style='text-align:center;'width="250px">Cidade</th> 

</tr> 
<tr class="td1" >
    
</tr> 
 </table>
 
 </div>
	<button class="formulario_dos_itens botao"id="editarCliente" type="" value="">Editar os dados do cliente</button>
<br><br>

<br>
	<button class="formulario_dos_itens botao"id="btn_enviar_contrato2" type="" value="">Próximo</button>

	<button class="formulario_dos_itens botao"id="btn_enviar_contrato" type="" onclick="enviado()"value="">Cadastrar</button><br><br>

<div align="center"id="" class="" style="width:100%;">
<div id="tabela" class="formulario_dos_itens" style="border:solid 1px;width:80%;">
    <h3>Código de barras</h3>
    
    <div class="" id="codigoDiv">
	       
    		<label>Digite o código de barras</label><br>
		  
		   </div>
        <input type="text" id="codigo3"name="codigo3" ><br><br> 
    <form method="GET" id="form-consulta1" action="">
    			<div  width="750px"id="cntrato">
    		    	
		   <input type="hidden" id="contrato1"name="contrato1" value="<?php echo $_GET["contrato"]?>">
	      
	      
		   <input type="hidden" id="codigo1"name="codigo1" >
	      
	     
	      </div></form>
	      <br>
	       <button class="botao formulario_dos_itens"id="BtnDigitarCodigoDeBarras"  onclick="digitarCodigo()">Digitar código de barras</button>
	    <div class="" id="codigoDiv1">
	           <button class="botao"id="LeitorDeCodigoDeBarras"  onclick="utilizarLeitor()">Utilizar leitor de código de barras</button>
	      <button type=""class="botao" onclick="LeitorDeCodigoDeBarras()"id="EnviarCodigoDeBarras">Enviar</button>

</div>

<table  style='border-bottom:;'>
     <tr> 

<th style='text-align:center;'width="250px">Nome</th> 
<th style='text-align:center;'width="250px">Descrição</th> 
<th style='text-align:center;'width="250px">Cód. de barras</th> 
<th style='text-align:center;'width="250px">Data da leitura</th> 
</tr> 


 </table>
 <table  class="td"style='border-bottom:;'>
    
    


 </table>



  </div>
  
</div>

<table style="visibility:hidden;position:;"border="1">
    <tr>
        <th height="">Frutas</th>
        <th>Verduras</th>
        <th>Grãos</th>
        
        </tr>
        
        <div id="resultado2">
            
            </div>
        
        <tr>
            
            <td>Laranja</td>
            <td>Beterraba</td>
            <td>Trigo</td>
            </tr>
            
    </table>

		<!--	<label>Arquivo</label><br>
			<input type="file" name="arquivo"><br><br>
			<label>Data da entrega do material limpo</label><br>
			<input type="date" name="dataDaEntrega"><br><br>
		-->
		
	
		</div>
       
	
		</div>

   <?php 
 
 if ($_GET['contrato'] == "") { ?>
  
<script>
//alert("Teste");
 $('#tabela').removeClass('formulario_dos_itens_visible');
     $('#tabela').addClass('formulario_dos_itens');
     </script>   <?php
     
 } 


elseif ($_GET['contrato'] != "") { ?>

  <script>
  //alert("Teste 2 (<?php echo $_GET['contrato'] ?>)");
   $('#tabela').removeClass('formulario_dos_itens');
     $('#tabela').addClass('formulario_dos_itens_visible');
     </script> <?php
  }     
 
  ?>
		
	</body>
</html>