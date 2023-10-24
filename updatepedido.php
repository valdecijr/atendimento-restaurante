<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Atualização de Pedido</title>
</head>

<body>
<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$id = $_POST["id"]; //atribuição do campo "id" vindo do formulário para variavel	
$xburger = $_POST ["xburger"];
$xsalada = $_POST ["xsalada"];
$guarana = $_POST ["guarana"];
$coca = $_POST ["coca"];
$mesa01 = $_POST ["mesa01"];
$mesa02 = $_POST ["mesa02"];
$status = $_POST ["status"];
//Gravando no banco de dados !

//conectando com o localhost - mysql
$conexao = mysql_connect('127.0.0.1','root','');
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("banco_lanchonetefeh",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());



$query = "UPDATE `pedidos_mesa` SET `xburger` = '$xburger',
`xsalada` = '$xsalada',
`guarana` = '$guarana',
`coca` = '$coca',
`mesa01` = '$mesa01',
`mesa02` = '$mesa02',
`status` = '$status' WHERE `id` = '$id' LIMIT 1 ;";
 

mysql_query($query,$conexao);

echo "<script language='javascript' type='text/javascript'>alert('Status do pedido atualizado com sucesso!');window.location.href='controlepedidos.php'</script>";
?> 
</body>
</html>
