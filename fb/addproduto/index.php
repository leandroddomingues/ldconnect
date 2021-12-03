<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <?php
	include_once("conexao.php");
	 session_start();
//	 $_SESSION["idfb"] = "";

	?>
	
		<meta charset="utf-8">
		<title>LdConnect</title>
	</head>
	<body>
	<style>
@import url('http://fonts.googleapis.com/css?family=Open+Sans');
p, ol, #message {
     font-family:'Open Sans';
}
#multiple_upload {
      position:relative;
}
.uploadChange{
      position:absolute;
      top:2px;
      left:0;
      opacity:0.01;
      border:none;
      width:200px;
     visibility:hidden;
      padding:10px;
      z-index:1;
      cursor:pointer;
}
.divfotoprincipal{
    float:left;
}
.divfotosadicionais{
    float:left;
    margin-top:40px;
}
.fotoprincipal {
     display: flex;
     justify-content: center;
     align-items: center;
 
      border:2px solid #ccc;
      background:#fff;
    max-width:140px;
    max-height:140px;
     
      min-width:140px;
      float:;
      margin:4px;
      overflow:hidden;
      color: #333
      cursor:pointer;
      
}

.fotosadicionais {
     display: flex;
     justify-content: center;
     align-items: center;
    
      border:2px solid #ccc;
      background:#fff;
       max-width:100px;
    max-height:100px;
     
      min-width:100px;
      float:;
      margin:4px;
      overflow:hidden;
      color: #333
      cursor:pointer;
      text-align:center;
}
#botao {
      border:1px solid #ff7b00;
      background:#ff7b00;
      color:#ffffff;
      font-family:'Open Sans';
      font-size:15px;
      font-weight:bold;
      padding:12px 28px;
      margin:4px 8px;
}

#lista ol {
      margin-left: -16px; 
}
#lista ol li {
     border-bottom:1px solid #eee;
     padding:10px;
    display:block;
    clear:left;
    margin-bottom:2px;
}
#lista ol li.item_grey{
     background:#f9f9f9;
}
a.remove {
     text-decoration:none;
     color:#ff7b00;   
     display:block;
     font-size: 16px;
     width:20px;
     float:right;
     font-weight:bold;
}
a.remove:hover {
    color:red;
}
img.item {
    
    
}
img.item {
    max-width: 100%;
    max-height: 100%;
}

.box-images {
    height: 30px;
    width: 30px;
    background-color: #eee;
    border:1px solid #eee;
    margin-bottom:15px;
    /* Centralizando imagens */
    display: flex;
    align-items: center;
    justify-content: center;
    float:left;
    margin:0 10px 20px 0;
}    
</style>
	
	
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>

function id(el) {
  return document.getElementById( el );
}
window.onload = function() {
    
     function makeid() {

  var texto = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 32; i++)
    texto += possible.charAt(Math.floor(Math.random() * possible.length));
//document.getElementById("id").value = texto;
var dadosFormulario = $("#fb").serialize();

$.ajax({
  type: "POST",
    url: "idfb.php", 
  //data: dadosFormulario,
  data: {
    id:texto  
  },
  success: function(resposta) {
      document.getElementById("id").value = resposta;
    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
    // correu mal, agir em conformidade
  }
});



  return texto;

}
if(document.getElementById("id1").value == ""){
    makeid();
    
  //  document.getElementById("id1").value = ;
}else{
    document.getElementById("id").value =document.getElementById("id1").value;
}
}

$(document).ready(function(){
   function slugify(str) {
  
  // Converte o texto para caixa baixa:
  str = str.toLowerCase();
  
  // Remove qualquer caractere em branco do final do texto:
  str = str.replace(/^\s+|\s+$/g, '');

  // Lista de caracteres especiais que serão substituídos:
  const from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
  
  // Lista de caracteres que serão adicionados em relação aos anteriores:
  const to   = "aaaaaeeeeeiiiiooooouuuunc------";
  
  // Substitui todos os caracteres especiais:
  for (let i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
  }

  // Remove qualquer caractere inválido que possa ter sobrado no texto:
  str = str.replace(/[^a-z0-9 -]/g, '');
  
  // Substitui os espaços em branco por hífen:
  str = str.replace(/\s+/g, '-');

  return str;
};

$(function () {

//  $("#title").on("keyup", function (event) {
  $(".atualiza").on("change", function (event) {
   //    $(".atualiza").on("keyup", function (event) {
        $("#titulo").val(slugify($("#title").val()));
        
        
  /*
  
           var id = $("#id").val();
           var titulo = $("#titulo").val();
     
     
        
    $.ajax({
      type: "POST",
       url: "criarSalvarPasta.php", 
      data: {
        teste: $('#teste').val()
        id:id,
        titulo:titulo
      },
      success: function (result) {
        $('#result').html(result);
      },
      error: function (result) {
        $('#result').html(result);
      }
    });
    
  */
        /////
        
        if ($(this).val()==""){
            
        }else{
            variavel = setTimeout(criarSalvarPasta, 4000);
// $("#textocoment").val()
}

        ///
  
  
  
    
  
  });
function criarSalvarPasta(){
    var dadosFormulario = $("#fb").serialize();

$.ajax({
  type: "POST",
    url: "criarSalvarPasta.php", 
  data: dadosFormulario,
  success: function(resposta) {
       $('#formulario').html(resposta);
    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
      
     $('#formulario').html(resposta);
    // correu mal, agir em conformidade
  }
});
}
});  
    $(".uploadChange").on('change',function(){
        
      
     //   $('#img1').src("../../imagens/load.gif");
  //   $('#file').change(function () {
     FormularioOk = false
    var files = this.files; // SELECIONA OS ARQUIVOS
    var qtde = files.length; // CONTA QUANTOS TEM
    var tamanho = 0;
    var nome = "";
   
    if (qtde > 1) { // VERIFICA SE É MAIOR DO QUE 1
        alert("Não é permitido enviar mais do que 1 arquivo.");
        $(this).val("");
        FormularioOk = false;
        return false;
    } else {
        
        var id = $(this).attr('id');
         var imgid = "#img"+ id;
        
        for (i = 0; i < qtde; i++) {
            tamanho += files[i].size;
          
          
        }
        console.log(tamanho);
        if (tamanho > 2000000) {
          //   removeFile(i,id);
           //  nome = nome + files[i].name + " - ";
            alert("Existe(m) arquivo(s) acima de 2MB, escolha outro(s)")
            $(this).val("");
            FormularioOk = false;
            return false;
        } else {
            FormularioOk = true;
          
              $(imgid).attr('src', '../../imagens/aguarde.gif');
              
idprod = document.getElementById("id").value;

$.ajax({
  type: "POST",
    url: "enviarfoto.php", 
  //data: dadosFormulario,
  data: {
    id:  idprod,
    arquivo: files
  },
  success: function(resposta) {
      document.getElementById("id").value = resposta;
    // variável "resposta" contém o que o servidor envia
    // aqui código a executar quando correu tudo bem
  },
  error: function() {
    // correu mal, agir em conformidade
  }
});

        return true;
        }
    }
});

});
   $(function(){
    $('#uploadChange').on('change',function() {
         var id = $(this).attr('id');
        var totalFiles = $(this).get(0).files.length;
        if(totalFiles == 0) {
          $('#message').text('Selecionar foto' );
        }
        if ( totalFiles > 1) {
	        $('#message').text( totalFiles+' arquivos selecionados' );
        } else {
	        $('#message').text( totalFiles+' arquivo selecionado' );
        }
           var htm='<ol>';
         for (var i=0; i < totalFiles; i++) {
             var c = (i % 2 == 0) ? 'item_white' : 'item_grey';
             var arquivo = $(this).get(0).files[i];
             
             
             var fileV = new readFileView(arquivo, i);
             
             htm += '<li class="'+c+'"><div class="box-images"><img class="item" data-img="'+i+'" data-id="'+id+'" border="0"></div><span>'+arquivo.name+'</span><a href="javascript:removeFile('+i+',\''+id+'\')" class="remove">x</a></li>'+"\n";
         }
        htm += '</ol>';
           $('#lista').html(htm);
         
    });
  
});

function readFileView(file, i) {

    var reader = new FileReader();
     reader.onload = function (e) {
       $('[data-img="'+i+'"]').attr('src', e.target.result);
	}
     reader.readAsDataURL(file);
}

function removeFile(item, id) {
    var el = $('img[data-img="'+item+'"]');
    var textoQtdArquivosAtuais = $('#message').text();
    var qtdArquivosSelecionados = parseInt(textoQtdArquivosAtuais.substring(0, parseInt(textoQtdArquivosAtuais.indexOf(' arquivo')))); 
    
  if (confirm('Tem certeza que deseja remover este item?')) {
  		el.closest("li").remove();  
      qtdArquivosSelecionados = qtdArquivosSelecionados -1;
      //Alterando label com quantidade de arquivos selecionados..  
     
        if(qtdArquivosSelecionados == 0) {
          $('#message').text('Selecionar fotos' );
        } else {
        if (qtdArquivosSelecionados > 1) {
	        $('#message').text( qtdArquivosSelecionados+' arquivos selecionados' );
        } else {
	        $('#message').text( qtdArquivosSelecionados+' arquivo selecionado' );
        }
        }
  }
}


//outras fotos

</script>

<div align="center">
    
<div id="formulario" style="height: 60px;
">
    
	</div>
<div  style="width:50%;">

<form method="POST" action="processa.php" id="fb" name="fb" enctype="multipart/form-data">
    
    
    <input type="hidden" id="id" name="id"value=""/>
    <input type="hidden" id="id1" name="id1"value="<?php echo $_SESSION['idfb']?>"/>
   
   
   
   
   
   
   
  <div>
<div align="left" style="border:1px solid #eee;">
    <div align="left">
    
	<label>Título: </label><br>
	<input type="text" class="atualiza"name="title"id="title" max="65" style="width:90%;"/>*<br>
		<input type="hidden" name="titulo" id="titulo"max="65" style="width:90%;"/><br>
	</div>
	
	 <div align="left">
	<label>Descrição:</label><br>
	<textarea type="text" name="description" max="5000" style="width:90%;height:50px;"></textarea>*<br><br>
	</div>
	</div>
	
	<div style="border:1px solid #eee;width:100%;height:300px;">
	<div align="left"style="float:left;width:33%;">
	    <div  style="width:;height:60px;">
	<label>Disponibilidade: </label><br>
	<select name="availability">
  <option value="in stock" selected>Em estoque</option>
  <option value="available for order" >Disponível para pedido</option>
  <option value="out of stock">Em falta</option>
    </select>*<br><br>
    </div>
    
     <div  style="width:;height:60px;">
	<label>Condição:</label><br>
	<select name="condition">
  <option value="new" selected>Novo</option>
  <option value="refurbished" >Recuperado</option>
  <option value="used">Usado</option>
    </select>*<br><br>
    </div>
    
    
     <div  style="width:;height:60px;">
	<label>Tamanho </label><br>
	<input type="text" name="size" max="200"><br>
	<label>Por exemplo, pequeno, GG ou 12. </label><br><br>
    </div>


	</div>
	
	 <div align="left" style="float:left;width:33%;">
	     
	      <div  style="width:;height:60px;">
	<label>Preço</label><br>
	<input type="number" name="price"/>*<br><br>
	</div>
	
          <div  style="width:;height:60px;">
	<label>Marca: </label><br>
	<input type="text" name="brand">*<br><br>
	</div>
	
	 <div  style="width:;height:60px;">
	 <label>Cor</label><br>
	<input type="text" name="color" max="200"><br><br>
	</div>



	      <div  style="width:;height:60px;">
	<label>Material: </label><br>
	<input type="text" name="material"max="200"/><br>
	<label>Exemplo: algodão orgânico. </label><br><br>
	</div>
	
	 <div  style="width:;height:60px;">
	<label>Estampa: </label><br>
	<input type="text" name="pattern"max="100"/><br>
	<label>Exemplo: listrado. </label><br><br>
	</div>
	
	</div>
	
	<div align="left" style="float:left;width:33%;">
	    
	  
     <div  style="width:;height:40px;">
   <label>Faixa etária</label><br>
	<select name="age_group">
  <option value="all ages"selected>Todas as idades</option>
  <option value="adult" >Adulto</option>
   <option value="teen">Adolescente</option>
   <option value="kids">Crianças</option>
   <option value="toddler">Criança</option>
   <option value="infant">Bebê</option>
   <option value="newborn">Recém-nascido</option>
    </select><br><br>
    </div>
    
       <div  style="width:;height:60px;">
	 <label>Gênero ao qual o seu item se destina:</label><br>
	 <select name="gender">
  <option value="female" selected>Feminino</option>
  <option value="male">Masculino</option>
   <option value="unisex">Unisex</option>
    </select><br><br>
    
    </div>
    
	</div>
	</div>
	
	<!--fim dos obrigatórios -->
		<!--inicio dos opcionais -->
	 <div align="left" style="border:1px solid #eee;">
	
    
    
         
	
	     
         
	
  
    </div>
	
	<div align="left"style="border:1px solid #eee;height:200px;">


     	<h3>Se estiver em promoção, preencha os campos abaixo:</h3>
	<div align="left" style="float:left;width:50%;">
	    
	<label>Coloque o valor com o desconto:</label><br>
	<input type="number" name="sale_price"><br><br>
    </div>
    
    
	<div align="left" style="float:left;width:50%;">
	<label>Data de início da promoção:</label><br>
	<input type="datetime"></input>
	<br>
	<label>Data de término da promoção:</label><br>
	<input type="datetime"></input><br>
	<input type="text" name="sale_price_effective_date"><br><br>
	</div>
	</div>
	
	
	


    
    
    	 <div align="left"style="border:1px solid #eee;">
	<label>shipping BR:SP:TERRESTRE:9.99 BRL</label><br>
	<input type="text" name="shipping"/><br><br>
	
	<label>Peso (Exemplo: 0,3 kg):</label>	<br>
	<input type="text" name="shipping_weight"/><br><br>
	
	<label>Estilo </label><br>
	<input type="text" name="style"/><br><br>
	</div>
	
		 <div align="left"style="border:1px solid #eee;">
		     
		     	<h3>Configurações Google e Facebook</h3>
	<label>Escolha a categoria para o Google:</label><br>
	<input type="text" name="google_product_category"><br><br>
	
	     
	<label> Escolha a categoria para o FaceBook:</label><br>	
	<input type="text" name="fb_product_category"><br><br>

	     
    <label>Quantidade disponível para FaceBook e Instagran </label><br>
	<input type="number" name="quantity_to_sell_on_facebook"><br><br>
	
	     
	<label> item group id</label><br>
	<input type="text" name="item_group_id"><br><br>
	</div>
	 <div align="left"style="border:1px solid #eee;">
	<label>link </label><br>
	<input type="text" name="link">*<br><br>
	
         
	<label>image link </label><br>
	<input type="text" name="image_link">*<br><br>
	</div>
	
	
   <div align="center"style="margin-top:;border:1px solid #eee;height:400px;">
	  <div align="left"style="width:400px;margin-top:50px;">
	      <h3>Adicionar foto(s)</h3>
<div class="divfotoprincipal">
     <label for="uploadChange" class="fotoprincipal"  id="fotoprincipal">
 
<img  id="imguploadChange"class="fotoprincipal" src="../../imagens/Foto principal.png"></image>        
   
 </label>
    <input class="uploadChange"type="file" multiple="multiple" name="arquivo[]"id="uploadChange" />

</div>


<div class="divfotosadicionais">
     <label for="uploadChange1" class="fotosadicionais"id="fotosadicionais">
<img class="fotosadicionais"id="imguploadChange1"src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file"  name="arquivo[]"id="uploadChange1" />
  </div>
  
  
<div class="divfotosadicionais">
     <label for="uploadChange2" class="fotosadicionais"id="fotosadicionais">
<img class="fotosadicionais"id="imguploadChange2"src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file" name="arquivo[]"id="uploadChange2" />
  </div>
  
<div style="margin-left:40px;"class="divfotosadicionais">
     <label for="uploadChange3" class="fotosadicionais"id="fotosadicionais">
<img class="fotosadicionais"id="imguploadChange3"src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file" name="arquivo[]"id="uploadChange3" />
  </div>
  
  
  
<div class="divfotosadicionais">
     <label for="uploadChange4" class="fotosadicionais"id="fotosadicionais">
<img class="fotosadicionais"id="imguploadChange4"src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file"  name="arquivo[]"id="uploadChange4" />
  </div>
  
<div class="divfotosadicionais">
     <label for="uploadChange5" class="fotosadicionais"id="fotosadicionais">
<img class="fotosadicionais"id="imguploadChange5"src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file" name="arquivo[]"id="uploadChange5" />
  </div>
  
</div>
   
   
   </div>
   <div align="center"style="margin-top:10px;border:1px solid #eee;padding:30px 0px 30px 0px;">
   <div align="left" style="margin-top:;float:center;width:30%;">
	<label>Status *:</label><br>
	<select name="status">
  <option value="active" selected>Ativo</option>
  <option value="archived">Arquivado</option>
    </select>
    
        
	<input type="submit" value="Cadastrar">
	</div>
	</div>



</form>

</div>
</div>

</body>
</html>