
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



$(document).ready(function(){
    $(".uploadChange").on('change',function(){
        
        $("#img1").attr('src', '../../imagens/aguarde.gif');
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
        return true;
        }
    }
});

    });
</script>

<form method="POST" action="processa.php" enctype="multipart/form-data">
    <div align="left"style="width:400px;">
<div class="divfotoprincipal">
     <label for="uploadChange1" class="fotoprincipal"  id="fotoprincipal">
 
<img  id="img1"class="fotoprincipal" src="../../imagens/Foto principal.png"></image>        
   
 </label>
    <input class="uploadChange"type="file" multiple="multiple" name="arquivo[]"id="uploadChange" />
   
   
   <div id="lista">
   </div>
</div>


<div class="divfotosadicionais">
     <label for="uploadChange1" class="fotosadicionais"id="fotosadicionais">
<img src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file"  name="arquivo[]"id="uploadChange1" />
  </div>
  
  
<div class="divfotosadicionais">
     <label for="uploadChange1" class="fotosadicionais"id="fotosadicionais">
<img src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file" name="arquivo[]"id="uploadChange2" />
  </div>
  
<div style="margin-left:40px;"class="divfotosadicionais">
     <label for="uploadChange1" class="fotosadicionais"id="fotosadicionais">
<img src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file" name="arquivo[]"id="uploadChange3" />
  </div>
  
  
  
<div class="divfotosadicionais">
     <label for="uploadChange1" class="fotosadicionais"id="fotosadicionais">
<img src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file"  name="arquivo[]"id="uploadChange4" />
  </div>
  
<div class="divfotosadicionais">
     <label for="uploadChange1" class="fotosadicionais"id="fotosadicionais">
<img src="../../imagens/Mais.png"></image>        
 </label>
    <input class="uploadChange"type="file" name="arquivo[]"id="uploadChange5" />
  </div>
  
</div>

</div>


</form>
