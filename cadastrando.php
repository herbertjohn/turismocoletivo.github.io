<?php
session_start();

$host = "localhost";
$user = "john";
$pass = "herbert";
$banco = "turismo-coletivo";
$conexao = mysql_connect($host, $user, $pass, $banco) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

 ?>
<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = mysqli_query("INSERT INTO cadastro(nome, email, senha) VALUES('$nome', '$email', '$senha')");
 
 ?>
