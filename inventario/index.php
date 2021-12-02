<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Importar dados do Excel</title>
	<head>
	<body>
		<h1>Material limpo</h1>
		
		<form method="POST" action="processa.php" enctype="multipart/form-data" >
		    
    		<label>Digite o número do contrato</label><br>
		    <input type="text" id="contrato"name="contrato"><br><br>
	    
			<label>Arquivo</label><br>
			<input type="file" name="arquivo"><br><br>
			<label>Data da entrega do material limpo</label><br>
			<input type="date" name="dataDaEntrega"><br><br>
			<input type="submit" value="Enviar">
		</form>
		
	</body>
</html>