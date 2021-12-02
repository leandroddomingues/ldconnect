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
	$("#btn_enviar_contrato").click(function(){
		//Recuperar o valor do campo
		var contrato1 = $("#contrato").val();
		var cliente1 = $("#cliente").val();
	//	$(".resultado").html(contrato1 + "/" + cliente1);
	
	
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
		
	});
});