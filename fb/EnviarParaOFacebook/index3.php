
<style>
@import url('http://fonts.googleapis.com/css?family=Open+Sans');
p, ol, #message {
     font-family:'Open Sans';
}
#multiple_upload {
      position:relative;
}
#uploadChange {
      position:absolute;
      top:2px;
      left:0;
      opacity:0.01;
      border:none;
      width:355px;
      padding:10px;
      z-index:1;
      cursor:pointer
}
#message {
      border:2px solid #ccc;
      background:#fff;
      padding:10px;
      width:250px;
      float:left;
      margin:4px;
      overflow:hidden;
      color: #333
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
#multiple_upload:hover > #botao {
      background:#662f00;
      border-color:#662f00;
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
 $(function() {
  $('#uploadChange').on('change', function() {
    var id = $(this).attr('id');
    var totalFiles = $(this).get(0).files.length;
    if (totalFiles == 0) {
      $('#message').text('Selecionar fotos');
    }
    if (totalFiles > 1) {
      $('#message').text(totalFiles + ' arquivos selecionados');
    } else {
      $('#message').text(totalFiles + ' arquivo selecionado');
    }
    var htm = '<ol>';
    for (var i = 0; i < totalFiles; i++) {
      var c = (i % 2 == 0) ? 'item_white' : 'item_grey';
      var arquivo = $(this).get(0).files[i];
      var fileV = new readFileView(arquivo, i);
      htm += '<li class="' + c + '"><div class="box-images"><img class="item" data-img="' + i + '" data-id="' + id + '" border="0"></div><span>' + arquivo.name + '</span><a href="javascript:removeFile(' + i + ',\'' + id + '\')" class="remove">x</a></li>' + "\n";
    }
    htm += '</ol>';
    $('#lista').html(htm);

  });

});

function readFileView(file, i) {

  var reader = new FileReader();
  reader.onload = function(e) {
    $('[data-img="' + i + '"]').attr('src', e.target.result);
  }
  reader.readAsDataURL(file);
}

function removeFile(item, id) {
  var el = $('img[data-img="' + item + '"]');
  var textoQtdArquivosAtuais = $('#message').text();
  var qtdArquivosSelecionados = parseInt(textoQtdArquivosAtuais.substring(0, parseInt(textoQtdArquivosAtuais.indexOf(' arquivo'))));

  if (confirm('Tem certeza que deseja remover este item?')) {
    el.closest("li").remove();
    qtdArquivosSelecionados = qtdArquivosSelecionados - 1;
    //Alterando label com quantidade de arquivos selecionados..  

    if (qtdArquivosSelecionados == 0) {
      $('#message').text('Selecionar fotos');
    } else {
      if (qtdArquivosSelecionados > 1) {
        $('#message').text(qtdArquivosSelecionados + ' arquivos selecionados');
      } else {
        $('#message').text(qtdArquivosSelecionados + ' arquivo selecionado');
      }
    }
  }
}

</script>

<form method="POST" action="processa.php" enctype="multipart/form-data">
<p>Utilize a tecla <b>Ctrl</b> para selecionar mais de um arquivo.</p>
<input name="title"/>
<div id="multiple_upload">
    <input type="file" multiple="multiple" name="arquivo[]"id="uploadChange" />
    <div id="message">Selecionar fotos</div>
    <input type="button" id="botao" value="Upload" />
   <div id="lista">
   </div>
</div>

	<input type="submit" value="Cadastrar">
</form>
