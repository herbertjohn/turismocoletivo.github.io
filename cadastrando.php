<?php
session_start();

$host = "localhost";
$user = "john";
$pass = "herbert";
$banco = "cadastro";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

 ?>
<?php 
$id = $_POST['id'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$repitaasenha = $_POST['repitaasenha'];
$sql = mysqli_query("INSERT INTO cadastro(nome, email, senha, repitaasenha) VALUES('$nome', '$email', '$senha', '$repitaasenha')");
 
 ?>
