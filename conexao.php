<?php  

session_start();



?>
<?php
$servidor = "localhost";
$usuario = "john";
$senha = "herbert";
$dbname = "cadastro";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>