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

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">
  
            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4">Encontre o passeio que combina com você!</h2>
                <form action="" method="post" class="d-block d-lg-flex mb-4">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Palavra-Chave..."></div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" class="form-control" id="">
                        <option value="" selected>Modalidade</option>
                        <option value="">Ecoturismo </option>
                        <option value="">Experiência</option>
                        <option value="">Turismo Esportivo</option>
                        <option value="">Turismo de Natureza</option>
                      </select>
                    </div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Ecossistema</option>
                        <option value="">Amazonia</option>
                        <option value="">Cerrado</option>
                        <option value="">Pantanal</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Pesquisar">  
                </form>
                <p class="text-center mb-5">Várias aventuras te esperam!</p>
                <p class="text-center"><a href="Calendario.php" class="btn py-3 px-5">Calendário</a></p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/descriçãotc.jpg" alt="Reportagem TVU UFMT" class="img-fluid">
                <a href="https://www.youtube.com/watch?v=JdWAMDP7L9Y" class="play-button popup-vimeo"><span class="ion-ios-play"></span></a>

                <!-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> -->

              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Bem vindo ao  Turismo Coletivo</h2>
              </div>
              <div class="text mb-5">
                <p>O Turismo Coletivo é uma plataforma digital para compartilhamento de   roteiros turísticos e culturais, que visa facilitar o acesso às   informações sobre guias, agências, roteiros e eventos culturais,   valorizando o ser humano e respeitando o meio ambiente, para que assim   façamos destinos conscientes com o mínimo de impacto ambientais. </p>
              </div>
              <p><a href="Sobre.php" class="btn btn-primary reverse py-2 px-4">Ler mais</a></p>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->

    <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-book"></span></div>
              <div class="media-body">
                <h3 class="heading"><a href="ecoturismo.php">Ecoturismo</a></h3>
                <p>Turismo que respeita e preserva o equilíbrio do meio, fomentando a educação ambiental.</p>
                <p><a href="ecoturismo.php" class="more">Ler mais <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-student"></span></div>
              <div class="media-body">
                <h3 class="heading"><a href="esportivo.php">Esportivo</a></h3>
                <p>Programas e atividades com fins específicos de promover a prática de esportes por amadores ou profissionais, sendo uma atividade tradicional no tempo livre e de férias.</p>
                <p><a href="esportivo.php" class="more">Ler mais <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
              <div class="media-body">
                <h3 class="heading"><a href="experiencia.php">Experiência</a></h3>
                <p>Vivenciar as tradições da região aliar sensações e experiências históricas, culturais e gastronômicas com atividades específicas de cada região.</p>
                <p><a href="experiencia.php" class="more">Ler mais <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-professor"></span></div>
              <div class="media-body">
                <h3 class="heading"><a href="natureza.php">Natureza</a></h3>
               <p>Turismo que se desenvolve em áreas naturais relativamente virgens, com o objectivo específico de admirar, estudar, desfrutar da viagem, das plantas e animais, assim como das marcas culturais do passado e do presente das ditas zonas.</p>
                <p><a href="natureza.php" class="more">Ler mais <span class="ion-arrow-right-c"></span></a></p>
               </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- END section --><!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Próximos destinos</h2>
            <p>Programe seus passeios, compartilhe roteiros, economize tempo, dinheiro e conheça novas pessoas para a próxima aventura</p>
            <p><a href="Calendario.php" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Calendário</a></p>
          </div>
        </div>
      </div>


      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/águas do cerrado.jpg" alt="aguas do cerrado" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="destinos\aguas-do-cerrado.php">Circuito de cachoeiras Águas do Cerrado</a></h2>
                  <p class="mb-4">Trilha de fácil acesso pelo exuberante cerrado, totalizando 7km e meio ida e volta passando pelo pocinho do amor, por 5 Cachoeiras para banho e mais duas para contemplação. A maior chega a medir aproximadamente 30m de queda livre.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>22/07</span>
                    </div>
                    <div class="price text-right"><span>R$ 60,00</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/caminho das águas.jpg" alt="circuito de cachoeiras caminho das águas" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="destinos\caminho-das-aguas.php">Circuito de Cachoeiras Caminho das Águas</a></h2>
                  <p class="mb-4">De nível moderado, com alguns trechos em desnível, totaliza 7km ida e volta, passa pelas cachoeiras "Andorinha", "Prainha", "Degrau", "Pulo", "Sete de Setembro" e ainda pela Casa de Pedras, uma gruta histórica. Quem não conhece vale muito a pena conhecer e quem já conhece, vale a pena ver de novo.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>22/07</span>
                    </div>
                    <div class="price text-right"><span>R$ 60,00</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/vale do rio claro.jpg" alt="Vale do Rio Claro" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="vale-do-rio-claro.php">Vale do Rio Claro - Crista do Galo e poço das Antas</a></h2>
                <p class="mb-4">Trilha leve em torno de 8km ida e volta pelo Cerrado até uma elevação no vale que abriga a formação rochosa esculpida pela ação do tempo que lembra a crista de um galo. De lá é possível uma visualização 360° dos paredões areníticos, morrarias e veredas. Depois iremos até a nascente do Rio Claro para um gostoso banho nas águas límpidas com peixinhos.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>28/07</span>
                  </div>
                  <div class="price text-right"><span>R$ 80,00</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Morro de São Jerônimo</a></h2>
                <p class="mb-4">É uma caminhada que exige um pouco, mas é muito mágica! Visual maravilhoso durante todo o trajeto e muita adrenalina. A trilha perfaz um total de 14km ida e volta. Destes, há um percurso de 300 metros do que chamamos "escalaminhada" pois não requer uso de equipamentos para escalada. Durante a subida, há dois momentos que exigem mais, mas são transpostos com tranquilidade.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>29/07</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">R$ 20,00</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/vale da lua.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Vale da lua</a></h2>
                  <p class="mb-4">O belíssimo canyon no rio Jauquara nos aguarda com todo o seu encanto e com a segurança de sempre da nossa equipe. Trilha leve com muita água, vales, rochas e uma riquíssima flora. O trajeto de carro é de 150 km a partir de Cuiabá, sendo 38 de estrada de terra em boas condições.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>15/07</span>
                    </div>
                    <div class="price text-right"><span>R$ 100,00</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/vale do rio claro.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Crista do Galo e poço da Anta</a></h2>
                  <p class="mb-4">Trilha leve em torno de 8km ida e volta pelo Cerrado até uma elevação no vale que abriga a formação rochosa esculpida pela ação do tempo que lembra a crista de um galo. De lá é possível uma visualização 360° dos paredões areníticos, morrarias e veredas. Depois iremos até a nascente do Rio Claro para um gostoso banho nas águas límpidas com peixinhos.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>01/07</span>
                    </div>
                    <div class="price text-right"><span>R$ 80,00</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/descriçãotc.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="destinos\cidade-de-pedra.php">Cidade de pedras</a></h2>
                <p class="mb-4">O percurso totaliza 2km ida e volta da mais pura beleza. O acesso de 10km até o início da trilha precisa ser de carro traçado já incluso no valor. Para viabilidade do passeio será necessário um grupo com no mínimo 5 pessoas e no máximo 12.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>26/07</span>
                  </div>
                  <div class="price text-right"><span>R$ 150,00</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="destinos\Sitio-Arqueologico-Santa-Elina.php">Sítio Arqueológico Santa Elina - Jangada</a></h2>
                <p class="mb-4">Depois da Serra da Capivara, no Piauí, o Santa Elina é segundo mais antigo em vestígios de humanos. Nele foram encontrados cerca de 25 mil objetos que indicam a presença humana.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>27/06</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      
    </div>
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
