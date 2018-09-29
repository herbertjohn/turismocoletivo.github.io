<?php
session_start();
?>
<?php
$servidor = "localhost";
$usuario = "john";
$senha = "herbert";
$dbname = "turismo-coletivo";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conn) {
	die("Falha na conexao: " . mysqli_connect_error());
	}else{

		echo "Conexao realizada com sucesso";
	}

$nomedopasseio = $_POST['nomedopasseio'];
$descricao = $_POST['descricao'];
$fotodopasseio = $_POST['fotodopasseio'];

$sql = mysqli_master_query("INSERT INTO cadastro-de-passeio(nomedopasseio, descricao, fotodopasseio) VALUES('$nomedopasseio', '$descricao', '$fotodopasseio')");

include_once("conexao.php");
$arquivo = $_FILES['arquivo']['name'];

//Pasta onde o arquivo vai ser salvo
$_UP['pasta'] = 'images/upload/';

//tamanho maximo da imagem 
$_UP['tamanho'] = 1024*1024*100; //5mb


//tamanho maximo da imagem 
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');

//tamanho maximo da imagem 
$_UP['renomeia'] = 'false';



//array com os tipos de erros de upload do php
	
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'Arquivo no upload é maior que o limite do php';
$_UP['erros'][2] = 'o arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'o upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'não foi feito o upload do arquivo';
//verifica se houve algum erro com o upload. se sim, exibe a mensagem do erro
	if($_FILES['arquivo']['error'] != 0){
		die("Não foi possivel fazer o upload, erro: <br />". $UP['erros'][$_FILES['arquivo']['error']]);
		 //Para a execução do script
	}

//faz a veriicação da extesão do arquivo
	$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
	if (array_search($extensao, $_UP['extensoes'])=== false) {
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/turismocoletivo.github.io/cadastrodepasseios.php'>
		<script type=\"text/javascript\">
			alert(\"A imagem não foi cadastrada, extensão invalida.\");
		";
	}

?>