<?php 
// RECEBENDO OS DADOS PREENCHIDOS !
$id	= $_POST ["id"];
$xburger	= $_POST ["xburger"];
$xsalada	= $_POST ["xsalada"];	
$guarana	= $_POST ["guarana"];
$coca	= $_POST ["coca"];
$mesa01	= $_POST ["mesa01"];
$mesa02	= $_POST ["mesa02"];
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect('127.0.0.1','root','');
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("banco_lanchonetefeh",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
$teste = "SELECT * FROM pedidos_mesa WHERE xburger = '$xburger'";
if($teste == $servico){
        echo"<script language='javascript' type='text/javascript'>alert('Esse Serviço já foi cadastrado!   Fale com Seu supervisor se tiver alguma duvida sobre isso!');window.location.href='boleto.html';</script>";
        die();
      }
	  else{

$query = "INSERT INTO `pedidos_mesa` ( `id` , `xburger`, `xsalada`, `guarana`, `coca`, `mesa01`, `mesa02`  )
VALUES (NULL , '$xburger', '$xsalada', '$guarana', '$coca', '$mesa01', '$mesa02'
);";


		}
mysql_query($query,$conexao);

echo "<script language='javascript' type='text/javascript'>alert('Pedido cadastrado com sucesso :)');window.location.href='indexsucesso.html'</script>";
?> 
</body>
</html>
