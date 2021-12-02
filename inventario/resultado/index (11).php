<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Importar dados do Excel</title>
	<head>
	<body>
	    <div align="center" style="width:;float:center;">
		<h1>Material limpo</h1>
		
		<form method="POST" action="compara.php" enctype="multipart/form-data" >
		
    		<label>Digite o número do contrato</label><br>
		    <input type="text" id="contrato"name="contrato"><br><br>
	    
	    	<label>Data do envio do material sujo</label><br>
			<input type="date" name="dataDoEnvio"><br><br>
			
			<label>Data da entrega do material limpo</label><br>
			<input type="date" name="dataDaEntrega"><br><br>
			<input type="submit" value="Enviar">
		</form>
		</div>
<script>

var desc = document.querySelector("#contrato");
desc.addEventListener("keypress", function(e) {
    //var maxChars = 20;
  inputLength = desc.value.length;
  
  if(inputLength === 2) {
    document.getElementById("contrato").value = desc.value + '.';
  }
   if(inputLength === 7) {
    document.getElementById("contrato").value = desc.value + '.';
  }
    
});
</script>
	</body>
</html>