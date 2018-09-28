<?php  

session_start();



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

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Deixe uma mensagem</h1>
              <p class="bcrumb"><a href="index.php">Início</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Contato</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pr-md-5">
            <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Nome</label>
                      <input type="text" id="name" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">Telefone</label>
                      <input type="text" id="phone" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Escreva uma mensagem</label>
                      <textarea name="message" id="message" class="form-control py-2" cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
          <div class="col-md-4">
            
            <div class="block-23">
              <h3 class="heading mb-5">Contato para informações</h3>
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Rua Frei Osvaldo, 66, centro, Chapada dos Guimarães, Mato Grosso/BR</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+55 65 9 8407-8063</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">contato@turismocoletivo.com.br</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">Aberto de Segunda a sexta das 08 as 18</span></li>
              </ul>
            </div>
          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->
    
    
    
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
