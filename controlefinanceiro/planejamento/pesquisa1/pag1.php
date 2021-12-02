<!DOCTYPE html>

<html>
    <head>
        <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    </head>
<title>Aula - Loja</title>
<body>

    <div id="divObj" style="position:fixed; top:50px; left:100px; width: 250px; height: 200px; z-index:1">
    <select id="select" onchange="cliente(this.value)">
        <option value="0">Selecione uma opção</option>
        <option value="Rogério">Rogério</option>
        <option value="Daiane">Daiane</option>
    </select>

<p>clique no produto que deseja</p>
<button onclick="enviar(1)" style="width:70px; margin-top: 15px">Arroz</button>
<button onclick="enviar(2)" style="width:70px; margin-top: 15px">Feijão</button>
<button onclick="enviar(3)" style="width:70px; margin-top: 15px">Macarrão</button><br>
<button onclick="enviar(4)" style="width:70px; margin-top: 15px">Batata</button>
<button onclick="enviar(5)" style="width:70px; margin-top: 15px">Tomate</button>
<button onclick="enviar(6)" style="width:70px; margin-top: 15px">Carne</button>
<br><br>
</div>

<div id="divRes" style="position:fixed; top:200px; left:100px; width: 250px; height:300px; z-index: 1; background-color: #cecece; 
                 overflow: auto; padding: 20px">
    
</div>

<script>
   
   function cliente(c) {
       $.post("query.php", {user:c}, function(x) { $("#divRes").html(x); } );
   }
   
   function enviar(n) {
             var user = document.getElementById("select").value;
             if (user === "0") { alert('Selecione um usuário válido'); exit; };
             $.post("query.php", { busca:n, user:user }, function(x) { $("#divRes").html(x); } ); //fechando o post        
   }
</script>

</body>
</html>
