<?php
session_start();
ob_start();
$btncadastro = filter_input(IMPUT_POST, 'btncadastro', FILTER_SANITIZE_STRING);
if($btncadastro){
  include_once 'cadastrando.php';
  $dados = filter_imput_array(IMPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
  $dados['senha'] = password_hash ($dados['senha'], PASSWORD_DEFAULT);

  $result_uruario = "INSERT INTO cadastro (nome, email, senha) VALUES (
                  '" .$dado['nome']. "',
                  '" .$dado['email']. "',
                  '" .$dado['senha']. "',
                  


                  )";

  $resultado_usuario = mysqli_query($conexao, $result_uruario);

}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Turismo Coletivo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
  <script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
  </head>
  <body>
    
   <?php include("cabecalio.php"); ?>
    <!-- END header -->

   <br><br>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">
              <h2 class="mb-5">Cadastre-se e garanta sua vaga</h2>
              <form method="post" action="">
                  
                  <div class="row">
                    <div class="col-md-12">
                      <label for="name">ID</label>
                      <input type="text" name="nome" id="nome" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Email</label>
                      <input type="text" name="email" id="email" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="name">Senha</label>
                      <input type="password" name="senha" id="senha" class="form-control py-2 ">
                    </div>
                  </div>
                 
                  
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="btncadastro" value="Cadastro" class="btn btn-primary px-5 py-2">
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
   
    
         <?php include("rodape.php"); ?>

    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>
  <script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    </script>
  </body>
</html>