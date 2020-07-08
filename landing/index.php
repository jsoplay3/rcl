<?php
  session_start();
?>

<!-- Aplicativo desarrollador por Raptor FullStack
Ingenieros de desarrollo:
María Fernanda Orozco
Juan Sebastián Ossa
juansebastianossadominguez@gmail.com
3053246739
 -->

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Select 2 -->
  <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <link  rel="icon"   href="images/IcoRcl.png" type="img/IcoRcl.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rionegro Compra Local</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/fontawesome-free/css/font-awesome.min.css">
  
  

</head>
<script>
  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function() {
      $('.searchSelect2').select2(
        {
          placeholder: "Buscar una empresa o negocio",
          allowClear: true,
          // minimumInputLength: 3,
          // maximumInputLength: 20
        }
      );
  });
</script>

<body>
  <?php
    require_once('../controller/EmpresaControlador.php');
    $empresa = new EmpresaControlador();
  ?>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <div class="containerHeader">
        <div class="containerLogo">
        <div class="logo">
            <a href="index.php"><img src="img/logoRcl.svg" height="60px"/></a>
          </div>
          <div class="logo">
            <a href="https://www.rionegro.gov.co/" target="_blank"><img src="img/LogoAlcaldia-01.svg" height="60px"/></a>
          </div>
        </div>
        <div class="containerMenu">
          <div class="btnMenu">
            <a href="https://docs.google.com/forms/d/1fxN0ZdjTab2kzPGjAYmITezZR3rUuwP0HHKuK7Xs64c/edit" target="_blank" class="btn btn-primary" >Registrar Empresa</a>
          </div>
          <div class="btnMenu">
          <?php
            if (!isset ($_SESSION['uxt_codUsuario'])){
              echo '<a href="../views/login.php" class="btn btn-primary" >Iniciar Sesión</a>';
            }
            else{
              echo '<a href="../views/login.php" class="btn btn-primary" >Administrar Empresas</a>';
            }
          ?>
          </div>
        </div>
      </div>
      
    </div>
  </nav>
  

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
    
      <div class="row">
        
      <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form action="index.php" method="post">
            <div class="form-row">



              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <div class="form-group">
                  <select class="form-control form-control-lg searchSelect2" name="nameCom">
                  <option></option>
                  <?php
                    $emp = $empresa->consultarEmpresa();
                    foreach ($emp as $key) {
                      echo "<option>".$key['NAME_COMPANY']."</option>";
                    }
                  ?>
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" name="buscarEmp" value="Buscar" class="btn btn-block btn-lg btn-primary">Buscar...</button>
              </div>
            </div>
          </form>

          <?php
              if(isset($_POST['buscarEmp']) == 'Buscar'){
                $nombre = $_POST['nameCom'];
                $filtCom = $empresa->consultarEmpresaLikeLanding($nombre);
              } else {
                $nombre = "";
                $filtCom = $empresa->consultarEmpresaLikeLanding($nombre);
              }
          ?>
  </div>
        
      </div>
    </div>
    
  </header>
  
  <section class="features-icons bg-light text-center">
  <div class="row">
    <div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Alimentos</a></li>
    <li><a data-toggle="tab" href="#menu2">Ciudado Personal</a></li>
    <li><a data-toggle="tab" href="#menu3">Productos Hogar</a></li>
    <li><a data-toggle="tab" href="#menu3">Tecnología</a></li>
    <li><a data-toggle="tab" href="#menu3">Artesanales</a></li>
    <li><a data-toggle="tab" href="#menu3">Entretenimiento</a></li>
    <li><a data-toggle="tab" href="#menu3">Cultira</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
  </div>
</div>
    </div>
            </div>
  </section>
  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        
      <?php

        if(isset($filtCom) == ""){
      
          $emp = $empresa->consultarEmpresa();
          foreach ($emp as $key) {
          echo '

            <div class="col-lg-4 pb-4">
              
              <!-- Card -->
                <div class="card booking-card">

                  <!-- Card image -->
                  <div class="view overlay">
                    <img class="card-img-top" src="../utils/img_logo_coompanies/'.$key['LOGO_URL'].'" alt="Card image cap">
                    <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>

                  <!-- Card content -->
                  <div class="card-body">

                    <!-- Title -->
                    <div class="containerEllipsis">
                      <h4 class="card-title font-weight-bold blue"><a>'.$key['NAME_COMPANY'].'</a></h4>
                    </div>
                    <!-- Data -->
                    <ul class="list-unstyled list-inline rating mb-0">
                      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"> </i></li>
                      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"></i></li>
                      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"></i></li>
                      <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"></i></li>
                      <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text yellow"></i></li>
                      <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                    </ul>
                    <div class="blue containerEllipsis">
                      <p class="mb-2"><i class="fa fa-bookmark-o fa-lg blue" aria-hidden="true"></i> '.$key['CATEGORY_COMPANY'].'</p>
                    </div>
                      <!-- Text -->
                    <div class="containerDescription">
                    <p class="card-text">'.$key['DESCRIPTION_COMPANY'].'</p>
                    </div>
                    
                    <hr class="my-4">
                    <p class="lead blue"><strong>Siguenos en nuestras redes</strong></p>
                    <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
                      <li class="list-inline-item mr-0">
                        <a href="https://wa.me/57'.$key['CEL_COMPANY'].'/?text=Hola estoy interesad@ en contactarme con ustedes" target="_blank" alt="Escribenos a nuestro Whatsap">
                          <i class="fa fa-whatsapp fa-lg text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Escribenos a nuestro Whatsap"></i>
                        </a>
                      </li>
                      <li class="list-inline-item mr-0">
                        <a href="'.$key['FB_URL'].'" target="_blank" alt="Visita nuestro FaceBook">
                          <i class="fa fa-facebook fa-lg text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="Visita nuestro FaceBook"></i>
                        </a>
                      </li>
                      <li class="list-inline-item mr-0">
                        <a href="'.$key['INS_URL'].'" target="_blank" alt="Visita nuestro Instagram">
                          <i class="fa fa-instagram fa-lg text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="Visita nuestro Instagram"></i>
                        </a>
                      </li>
                      <li class="list-inline-item mr-0">
                        <a href="'.$key['YT_URL'].'" target="_blank" alt="Visita nuestro canal en Youtube">  
                          <i class="fa fa-youtube-play fa-lg text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="Visita nuestro canal en Youtube"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- Button -->
                    <form action="pdp.php" method="post">
                      <input type="hidden" value="'.$key['ID'].'" name="idCompany"/>
                      <input type="submit" class="btn btn-outline-secondary btn-lg btn-block deep-purple-text p-2 m-2 mx-0 mb-0 mt-3" value="Ver toda la información">
                    </form>
                    

                  </div>

                </div>
                <!-- Card -->



            </div>
            ';
          }
        } else {
          foreach ($filtCom as $key) {
            echo '
  
              <div class="col-lg-4 pb-4">
                
                <!-- Card -->
                  <div class="card booking-card">
  
                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top" src="../utils/img_logo_coompanies/'.$key['LOGO_URL'].'" alt="Card image cap">
                      <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
  
                    <!-- Card content -->
                    <div class="card-body">
  
                      <!-- Title -->
                      <div class="containerEllipsis">
                        <h4 class="card-title font-weight-bold"><a>'.$key['NAME_COMPANY'].'</a></h4>
                      </div>
                      <!-- Data -->
                      <ul class="list-unstyled list-inline rating mb-0">
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"> </i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"></i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"></i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text yellow"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text yellow"></i></li>
                        <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                      </ul>
                      <div class="blue containerEllipsis">
                        <p class="mb-2"><i class="fa fa-bookmark-o fa-lg blue" aria-hidden="true"></i> '.$key['CATEGORY_COMPANY'].'</p>
                      </div>
                        <!-- Text -->
                      <div class="containerDescription">
                      <p class="card-text">'.$key['DESCRIPTION_COMPANY'].'</p>
                      </div>
                      
                      <hr class="my-4">
                      <p class="lead blue"><strong>Siguenos en nuestras redes</strong></p>
                      <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
                        <li class="list-inline-item mr-0">
                          <a href="https://api.whatsapp.com/send?phone=+57'.$key['CEL_COMPANY'].'" target="_blank" alt="Escribenos a nuestro Whatsap">
                            <i class="fa fa-whatsapp fa-lg text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Escribenos a nuestro Whatsap"></i>
                          </a>
                        </li>
                        <li class="list-inline-item mr-0">
                          <a href="'.$key['FB_URL'].'" target="_blank" alt="Visita nuestro FaceBook">
                            <i class="fa fa-facebook fa-lg text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="Visita nuestro FaceBook"></i>
                          </a>
                        </li>
                        <li class="list-inline-item mr-0">
                          <a href="'.$key['INS_URL'].'" target="_blank" alt="Visita nuestro Instagram">
                            <i class="fa fa-instagram fa-lg text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="Visita nuestro Instagram"></i>
                          </a>
                        </li>
                        <li class="list-inline-item mr-0">
                          <a href="'.$key['YT_URL'].'" target="_blank" alt="Visita nuestro canal en Youtube">  
                            <i class="fa fa-youtube-play fa-lg text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="Visita nuestro canal en Youtube"></i>
                          </a>
                        </li>
                      </ul>
                      <!-- Button -->
                      <form action="pdp.php" method="post">
                        <input type="hidden" value="'.$key['ID'].'" name="idCompany"/>
                        <input type="submit" class="btn btn-outline-secondary btn-lg btn-block deep-purple-text p-2 m-2 mx-0 mb-0 mt-3" value="Ver toda la información">
                      </form>
                      
  
                    </div>
  
                  </div>
                  <!-- Card -->
  
  
  
              </div>
              ';
            }
        } 
      ?>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/banner_comercio.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Rionegro Compra Local</h2>
          <p class="lead mb-0">Rionegro es un municipio de Colombia, ubicado en el departamento de Antioquia. Se encuentra en el valle de San Nicolás o también llamado Altiplano del Oriente, en la subregión Oriente, siendo la población más grande, así como la que concentra el movimiento económico de la subregión. Su nombre oficial es Ciudad Santiago de Arma de Rionegro. Limita al norte con los municipios de Guarne y San Vicente, por el este con los municipios de Marinilla y El Carmen de Viboral, por el sur con el municipio de La Ceja, y por el oeste con los municipios de El Retiro, Envigado y Medellín</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/banner_igleasia.jpeg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Registra tu Negocio</h2>
          <p class="lead mb-0">Endendemos que estar contigo es brindarte herramientas para tu negocio, por eso hemos creado esta plataforma para que promociones tus productos y servicios para que la gente te conozca y puedas aumentar tus ventas</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/banner_rionegro1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Proyecto de la Secretaría de Desarrollo Económico</h2>
          <p class="lead mb-0">Rionegro compra local es una iniciativa de la Secretaría de Desarrollo Económico, a través de la subsecretaria de Ciencia Tecnología e Innovación para el apalancamiento de negocios Rionegreros en la red.</p>
        </div>
      </div>
    </div>
  </section>

  

  

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            
            <li class="list-inline-item blue">
                  <div class="containerLogo">
                  <div class="logo">
            <a href="index.php"><img src="img/logoRcl.svg" height="60px"/></a>
          </div>
          <div class="logo">
            <a href="https://www.rionegro.gov.co/" target="_blank"><img src="img/LogoAlcaldia-01.svg" height="60px"/></a>
          </div>
                </div>
            </li>
            <li class="list-inline-item">&sdot;</li>
            
            
            
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Todos los Derechos Reservados - Citelligence</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://www.facebook.com/citelligence" target="_blank">
                <i class="fab fa-facebook fa-2x fa-fw blue"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="https://www.instagram.com/citelligence/?hl=es-la">
                <i class="fab fa-twitter-square fa-2x fa-fw blue"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://twitter.com/citelligence?lang=es" target="_blank">
                <i class="fab fa-instagram fa-2x fa-fw blue"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>