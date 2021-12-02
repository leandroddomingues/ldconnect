<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Celke</title>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-usuario').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "proc_pesq_user.php",
					"type": "POST"
				}
			});
			$('#listar-usuario2').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "proc_pesq_user.php",
					"type": "POST"
				}
			});
		    
		} );
		</script>
	</head>
	<body>
		<h1>Listar usuários</h1>
		<table id="listar-usuario" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Janeiro</th>
					<!--	<th>Janeiro</th>
					<th>Fevereiro</th>
				<th>Março</th>
					<th>Abril</th>
					<th>Maio</th>
					<th>Junho</th>
					<th>Julho</th>
					<th>Agosto</th>
					<th>Setembro</th>
					<th>Outubro</th>
					<th>Novembro</th>
					<th>Dezembro</th>
				--></tr>
			</thead>
		</table>		
		<table id="listar-usuario2" class="display" style="width:100%">
			<thead>
				<tr>
					<th>Fevereiro</th>
					<!--	<th>Janeiro</th>
					<th>Fevereiro</th>
				<th>Março</th>
					<th>Abril</th>
					<th>Maio</th>
					<th>Junho</th>
					<th>Julho</th>
					<th>Agosto</th>
					<th>Setembro</th>
					<th>Outubro</th>
					<th>Novembro</th>
					<th>Dezembro</th>
				--></tr>
			</thead>
		</table>		
	</body>
</html>
