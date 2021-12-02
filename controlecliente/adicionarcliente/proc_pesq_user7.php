
 

<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
	 
		/*--
Contrato,NomeCliente,Endereco,Numero_endereco,Cidade,Estado,Cep
-->*/		 
         
$Contrato = $_POST["Contrato"];//filter_input(INPUT_POST, 'contrato', FILTER_SANITIZE_STRING);
$NomeCliente = $_POST["NomeCliente"];//filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$Endereco = $_POST["Endereco"];
$Numero_endereco = $_POST["Numero_endereco"];
$Cidade = $_POST["Cidade"];
$Estado = $_POST["Estado"];
$Cep = $_POST["Cep"];

//echo $Contrato $NomeCliente $Endereco $Numero_endereco $Cidade $Estado $Cep;
//insere no banco de dados o numero do contrato
	//$result_usuario = "INSERT INTO AlscoLoteLimpo (Matricula, Nome_Funcionario, Chapa, Armario, Gaveta, Nome_Setor, Centro_de_Custo, Tipo_Movimento, Produto_Contrato, Novo_Especial, Tamanho, Quantidade, Obs_Estoque, GME, Data_da_Entrega, Contrato, Codigo_De_Barras) VALUES ('$Matricula','$Nome_Funcionario','$Chapa','$Armario','$Gaveta','$Nome_Setor','$Centro_de_Custo','$Tipo_Movimento','$Produto_Contrato',''$Novo_Especial'','$Tamanho','$Quantidade','$Obs_Estoque','$GME','$dataDaEntrega1','$Contrato','$Codigo_De_Barras')";
//	$result_usuario = "INSERT INTO Inventario_cliente (contrato, cliente,codigo,artigo,estoque) VALUES ('$contrato','$cliente','$codigo','$artigo','$estoque')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
//	if($resultado_usuario){
	    	
$result_user = "SELECT * FROM Controle_cliente_matriz  WHERE Contrato = '$Contrato'";

// WHERE contrato = '$contrato' 
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
    	while($row_user = mysqli_fetch_assoc($resultado_user)){
    	
    echo "
    
    <script>
$('#cntrato').removeClass('formulario_dos_itens_visible');
$('#cntrato').addClass('formulario_dos_itens');
 $('#tabela').removeClass('formulario_dos_itens_visible');
    $('#tabela').addClass('formulario_dos_itens');
     $('#td1').removeClass('formulario_dos_itens_visible');
     $('#td1').addClass('formulario_dos_itens');
     $('#resultado3').removeClass('formulario_dos_itens_visible');
     $('#resultado3').addClass('formulario_dos_itens');
      $('#div_adicionar_contato').removeClass('formulario_dos_itens_visible');
     $('#div_adicionar_contato').addClass('formulario_dos_itens'); 
function enviadoAtualizar(){
var dadosFormulario = $(\"#form-cntrato2\").serialize();

$.ajax({
  type: \"POST\",
  url: \"proc_pesq_user8.php\",
  data: dadosFormulario,
  success: function(resposta) {
      if(resposta == \"Erro\"){
     // alert('Este item já foi cadastrado!');
      }else{
      	
      			$(\".spanResult\").html(resposta);
      	
      }
      
  },
  error: function() {
   // echo 'correu mal, agir em conformidade';
  }
});
}
function enviadoCancelar(){
$('#cntrato').removeClass('formulario_dos_itens');
$('#cntrato').addClass('formulario_dos_itens_visible');
$('#cntrato2').removeClass('formulario_dos_itens_visible');
$('#cntrato2').addClass('formulario_dos_itens');
	$(\".spanResult\").html('');
}
   </script>
   <div align=\"center\">
  <div  class=\"formulario_dos_itens_visible\" style=\"width:100%;margin-left:50%;\"id=\"cntrato2\">
	    <div class=\"spanResult2\"></div>
	<form method=\"POST\" id=\"form-cntrato2\" action=\"\">
    		
    		    	<h3>Editando</h3>





	<div style=\"float:left;width:100%;text-align:left;\">
        	<div style=\"float:left;width:200px;text-align:left;\">
        	<label>Número do contrato</label><br>
       
       	    <input style=\"width:200px;position:;\" type=\"text\"readonly=\"readonly\" id=\"Contrato\" name=\"Contrato\" value='".$row_user['Contrato']."'>
		   </div>
		   
		   <div style=\"float:left;width:402px;margin-left:10px;text-align:left;\">
		   <label>Digite o nome do cliente</label><br>
		    <input style=\"width:420px;\"type=\"text\" id=\"NomeCliente\"name=\"NomeCliente\" value='".$row_user['Nome_Cliente']."'><br><br>
    	   </div>
    </div>	   
    
    <div style=\"float:left;width:100%;text-align:left;\">
    	   	<div style=\"float:left;width:480px;text-align:left;\">
    	   <label style=\"text-align:left;\"> Endereço</label><br>
		    <input style=\"width:480px;\"type=\"text\" id=\"Endereco\"name=\"Endereco\" value='".$row_user['Endereco']."'><br><br>
			</div>
			
			<div style=\"float:left;width:140px;margin-left:10px;text-align:left;\">
			<label style=\"text-align:left;\">Número</label><br>
		    <input style=\"width:140px;\"type=\"text\" id=\"Numero_endereco\"name=\"Numero_endereco\" value='".$row_user['Numero_endereco']."'><br><br>
	       </div>
	</div>
	<div style=\"float:left;width:100%;text-align:left;\">
	    
	    	<div style=\"float:left;width:360px;text-align:left;\">
	       	<label style=\"text-align:left;\"> Cidade</label><br>
		    <input style=\"width:360px;\" type=\"text\" id=\"Cidade\"name=\"Cidade\" value='".$row_user['Cidade']."'><br><br>
		    </div>
		
			<div style=\"float:left;width:50px;margin-left:10px;text-align:left;\">
			<label style=\"text-align:left;\">Estado </label><br>
		    <input style=\"width:50px;\"type=\"text\" id=\"Estado\"name=\"Estado\" value='".$row_user['Estado']."'><br><br>
			</div> 
			
			<div style=\"float:left;width:200px;margin-left:10px;text-align:left;\">
			<label style=\"text-align:left;\">Cep</label><br>
		    <input style=\"width:200px;\"type=\"text\" id=\"Cep\"name=\"Cep\" value='".$row_user['Cep']."'><br><br>
		    </div>
   </div> 	    
		    
		 
		<!--
Contrato
NomeCliente
Endereco
Numero_endereco
Cidade
Estado
Cep
-->		 
            <input type=\"hidden\" class=\"formulario_dos_itens\" id=\"id\"name=\"id\">
          
		
		    

</form>
<button class=\" botao\"id=\"btn_enviar_cancelar\" type=\"\" onclick=\"enviadoCancelar()\"value=\"\">Cancelar</button>
<button class=\" botao\"id=\"btn_enviar_contrato1\" type=\"\" onclick=\"enviadoAtualizar()\"value=\"\">Atualizar</button><br><br>

	</div>
	</div>
	";
	
    }
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";

     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
    /*    
	while($row_user = mysqli_fetch_assoc($resultado_user)){
	


	  echo "<table  style='border-bottom:1pt solid black;width:100%;'>";
echo "<tr>";
echo "<th width='5%'></th> ";
echo "<th width='26%'></th> ";
echo "<th width='25%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='24%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='10%'></th> ";
echo "</tr> ";

   echo "<tr>";
   
	   	echo "<td width='5%'><p style='text-align:center;'> ".$row_user['Contrato']."</p></td>";
	   	echo "<td width='26%'><p style='text-align:center;'>".$row_user['Nome_Cliente']."</p></td>";
	   	echo "<td width='25%'><p style='text-align:center;'>".$row_user['Endereco']."</p></td>";
	   	echo "<td width='5%'><p style='text-align:left;'>".$row_user['Numero_endereco']."</p></td>";
	   	echo "<td width='24%'><p style='text-align:center;'>".$row_user['Cidade']."</p></td>";
	   echo "<td width='5%'><p style='text-align:left;'>".$row_user['Estado']."</p></td>";
	   echo "<td width='10%'><p style='text-align:center;'>".$row_user['Cep']."</p></td>";
	   
	   	echo "</tr>";
	echo "</table>";
	}
*/
}else{

 /*
	$result_usuario = "INSERT INTO Controle_cliente_matriz (Contrato, Nome_Cliente, Endereco, Numero_endereco, Cidade, Estado, Cep) VALUES ('$Contrato','$NomeCliente','$Endereco','$Numero_endereco','$Cidade','$Estado','$Cep')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
	if($resultado_usuario){
	    /*	Contrato,NomeCliente,Endereco,Numero_endereco,Cidade,Estado,Cep
	    	
$result_user54 = "SELECT * FROM Controle_cliente_matriz  WHERE Contrato = '$Contrato'";

// WHERE contrato = '$contrato' 
$resultado_user54 = mysqli_query($conn, $result_user54);

if(($resultado_user54) AND ($resultado_user54->num_rows != 0 )){
    //	echo "<div>Código do produto - Artigo    - Estoque ".$row_user['estoque']."</div>";
//echo "<tr>";

     //      <td width="50%">Maçã</td>
       //     <td>Alface</td>
         //   <td>Arroz</td>
        //</tr>
        
	while($row_user54 = mysqli_fetch_assoc($resultado_user54)){
	
	
	  echo "<table  style='border-bottom:1pt solid black;width:100%;'>";
echo "<tr>";
echo "<th width='5%'></th> ";
echo "<th width='26%'></th> ";
echo "<th width='25%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='24%'></th> ";
echo "<th width='5%'></th> ";
echo "<th width='10%'></th> ";
echo "</tr> ";

   echo "<tr>";
   
	   	echo "<td width='5%'><p style='text-align:center;'> ".$row_user['Contrato']."</p></td>";
	   	echo "<td width='26%'><p style='text-align:center;'>".$row_user['Nome_Cliente']."</p></td>";
	   	echo "<td width='25%'><p style='text-align:center;'>".$row_user['Endereco']."</p></td>";
	   	echo "<td width='5%'><p style='text-align:left;'>".$row_user['Numero_endereco']."</p></td>";
	   	echo "<td width='24%'><p style='text-align:center;'>".$row_user['Cidade']."</p></td>";
	   echo "<td width='5%'><p style='text-align:left;'>".$row_user['Estado']."</p></td>";
	   echo "<td width='10%'><p style='text-align:center;'>".$row_user['Cep']."</p></td>";
	   
	   	echo "</tr>";
	echo "</table>";
	}

}else{
	echo "Nenhum cliente encontrado ...";
}


//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

	}else{
	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

	}
	*/
}


//	    echo "<p style='color: green;'>Carregado os dados com sucesso!</p>";

//	}else{
//	    "<p style='color: green;'>Houve um erro ao carregar!</p>";

//	}
	
	
	?>