<?php 
	session_start();
	if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
		$usuario = mysql_real_escape_string($conn, $_POST['email']); //escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysql_real_escape_string($conn, $_POST['senha']);
		$senha = md5 ($senha);

		$sql = "SELECT * FRON usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$resultado = mysql_fetch_assoc($result);

		if (empty($resultado)){
			$_SESSION['loginErro'] = "Usuário ou senha inválido";
			header("Location: login.php");
			
				
			


		} elseif(isset($resultado)){

			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			header("Location: dashboard\index.html");

			
		}
		
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login.php");

	}

 ?>