<?php 
session_start();
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysql_connect('127.0.0.1','root','');
  $db = mysql_select_db('banco_lanchonetefeh');
    if (isset($entrar)) {
				
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("Erro ao conectar ao banco de dados!");
        if (mysql_num_rows($verifica)<=0){
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos ou Você não tem acesso');window.location.href='login.html';</script>";
          die();
        }else{
          $_SESSION['login'] = $login;
		  $_SESSION['senha'] = $senha;
		  header("Location:controlepedidos.php");
        }
    }
?>