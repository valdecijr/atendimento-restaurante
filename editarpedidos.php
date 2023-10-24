<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edição de Pedido</title>
<link rel="icon"  href="logo.ico" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- Scripts de estilo da página-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/et-line-font.css">
	<link rel="stylesheet" href="../css/nivo-lightbox.css">
	<link rel="stylesheet" href="../css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/login.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <!-- Fim dos scripts de estilo da página-->
 
<script type="text/javascript">
function validaCampo()
{
if(document.cadastro.codcli.value=="")
	{
	alert("O Campo Codigo do Cliente é obrigatório!");
	return false;
	}
else
	if(document.cadastro.contrato.value=="")
	{
	alert("O Campo Contrato(s) negociados é obrigatório!");
	return false;
	}
else
	if(document.cadastro.vprincipal.value=="")
	{
	alert("O Campo Valor Principal é obrigatório!");
	return false;
	}
else
	if(document.cadastro.vproposta.value=="")
	{
	alert("O Campo Valor da Proposta é obrigatório!");
	return false;
	}
else
	if(document.cadastro.valcancado.value=="")
	{
	alert("O Campo Valor Alcançado é obrigatório!");
	return false;
	}
else
	if(document.cadastro.fatraso.value=="")
	{
	alert("O Campo Faixa de Atraso é obrigatório!");
	return false;
	}
else
	if(document.cadastro.dpagamento.value=="")
	{
	alert("O Campo Data de Pagamento é obrigatório!");
	return false;
	}
else
	if(document.cadastro.matraso.value=="")
	{
	alert("O Campo Motivo de Atraso é obrigatório!");
	return false;
	}
else
	if(document.cadastro.cob.value=="")
	{
	alert("O Campo Login do COB é obrigatório!");
	return false;
	}
else
	if(document.cadastro.status.value=="")
	{
	alert("O Campo Status é obrigatório!");
	return false;
	}	
else
return true;
}
<!-- Fim do JavaScript que validará os campos obrigatórios! -->
</script> 
</head>
<body>

<!-- Conectando ao banco de dados -->
 <?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	header('location:error.html');

	}
	
$id = $_GET['id'];
$connect = mysql_connect('127.0.0.1','root','');
$db = mysql_select_db('banco_lanchonetefeh');
$tt = mysql_query("SELECT * FROM pedidos_mesa where ID = '$id' ");
$row = mysql_fetch_assoc($tt);

?>
<!-- Conectando ao banco de dados -->



<div class="container">
<form id="cadastro" name="cadastro" method="post" action="updatepedido.php" onsubmit="return validaCampo(); return false;">
  <table width="625" border="0">
  
<tr>
<td>ID</td>
<td><input name="id" class="btn-default btn" type="text" id="id" size="30" maxlength="30" value="<?php echo $row['id'];  ?>" />
<br>
<br>
</tr>
<br>
      <td>OPÇÃO 1</td>
      <td><input name="xburger" class="btn-default btn" type="text" id="xburger" size="30" maxlength="30" value="<?php echo $row['xburger'];  ?>" />
	  <br>
	<br>
</tr>
<tr>
      <td>OPÇÃO 2</td>
      <td><input name="xsalada" class="btn-default btn" type="text" id="xsalada" size="30" maxlength="30" value="<?php echo $row['xsalada'];  ?>" />
	  <br>
	<br>
</tr>
	<br>
<tr>
      <td>BEBIDA 1</td>
      <td><input name="guarana" class="btn-default btn" type="text" id="guarana" size="30" maxlength="30" value="<?php echo $row['guarana'];  ?>" />
	  <br>
	<br>
</tr>
<tr>
      <td>BEBIDA 2</td>
      <td><input name="coca" class="btn-default btn" type="text" id="coca" maxlength="100" value="<?php echo $row['coca'];  ?>" />
	  <br>
	<br>
</tr>
	<br>
<tr>
      <td>MESA 01</td>
      <td><input name="mesa01" class="btn-default btn" type="text" id="mesa01" maxlength="100" value="<?php echo $row['mesa01'];  ?>" />
	  <br>
	<br>
</tr>
<tr>
	<td>MESA 02</td>
      <td><input name="mesa02" class="btn-default btn" type="text" id="mesa02" maxlength="100" value="<?php echo $row['mesa02'];  ?>" />
	  <br>
	<br>
</tr>
	<td>STATUS </td>
      <td><input name="status" class="btn-default btn" type="text" id="status" maxlength="100" value="<?php echo $row['status'];  ?>" />
	  <br>
	<br>
    </tr>
	<br>
	<br>
     <tr>
      <td colspan="2"><p>
	  
        <input name="cadastrar" class="btn-default btn" type="submit" id="cadastrar" value="Concluir minha Edição!" /> 
        <br>
		<center><a href="controlepedidos.php" class="btn btn-danger">Voltar!</a></center>
          <br>
     </tr>
  </table>
</form>
<!-- Campo para editar solicitacoes -->

<!-- Rodapé da página -->
	</div>
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<center><p>Copyright © Devlas | Sites e Sistemas Web</a></p></center>
               	<hr>
				
			</div>
		</div>
	</div>
</footer>
<!-- Fim do rodapé -->

 <!-- JavaScripts de estilo da página-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
 <!-- JavaScripts de estilo da página-->

</body>
</html>