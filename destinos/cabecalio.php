<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="../favicon.ico">


	<title></title>
</head>
<body>
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="../index.php"><img src="../images/logo com nome.png" width="300" height="45" alt="Turismo Coletivo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                <a class="nav-link active" href="../destinos.php">Destinos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../Calendario.php">Calendário</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="../pacotes.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacotes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="../chapadadosguimaraes.php">Chapada dos Guimarães</a>
                  <a class="dropdown-item" href="../nobres.php">Nobres</a>
                  <a class="dropdown-item" href="../pantanal.php">Pantanal</a>
                  <a class="dropdown-item" href="../reservadocabacal.php">Reserva do Cabaçal</a>
                  <a class="dropdown-item" href="../camponovodoparecis.php">Campo Novo do Parecis</a>
                                    
                </div>

              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="../ecoturismo.php">Ecoturismo</a>
                  <a class="dropdown-item" href="../experiencia.php">Experiência</a>
                  <a class="dropdown-item" href="../esportivo.php">Esportivo</a>
                  <a class="dropdown-item" href="../aventura.php">Aventura</a>
                  <a class="dropdown-item" href="../natureza.php">Natureza</a>
                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="../blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Sobre.php">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Contato.php">Contato</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="../login.php">Log in</a> / <a href="../cadastro.php">Cadastro</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>

</body>
</html>