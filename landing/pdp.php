<?php
  session_start();
  if($_POST['idCompany'] == ""){
		echo "<meta http-equiv='Refresh' content='0;url=index.php'>";
	} else {
	}

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
  <link href="css/landing-pagePdp.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/fontawesome-free/css/font-awesome.min.css">

</head>


<body>
  <?php
        require_once('../controller/EmpresaControlador.php');
        $empresa = new EmpresaControlador();
        $emp = $empresa->consultarEmpresaPorId($_POST['idCompany']);
        foreach ($emp as $key) {
          $string = "src='https://www.facebook.com/plugins/page.php?href=".$key['FB_URL']."%2F%3Ffref%3Dts&amp;tabs=timeline&amp;width=500&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=533836100158507'"; 
          $stringLogo = 'src="../utils/img_logo_coompanies/'.$key['LOGO_URL'].'"';
          $stringFB= 'href="'.$key['FB_URL'].'"';
          $stringINS='href="'.$key['INS_URL'].'"';
          $stringYT='href="'.$key['YT_URL'].'"';
          $stringWS='href="https://wa.me/57'.$key['CEL_COMPANY'].'/?text=Hola estoy interesad@ en contactarme con ustedes"';
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
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5"><?php echo $key['NAME_COMPANY'] ?></h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-exchange fa-lg blue m-auto blue"></i>
            </div>
            <h3>Envío a Domicilio</h3>
            <p class="lead mb-0">Compra lo que deseas y te lo llevamos a casa</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fa fa-exclamation-triangle fa-lg blue m-auto"></i>
            </div>
            <h3>Normativa de Bioseguridad</h3>
            <p class="lead mb-0">Tu compra con protocolos de bioseguridad</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <i class="fa fa-handshake-o fa-lg blue m-auto"></i>
            </div>
            <h3>Compra Local</h3>
            <p class="lead mb-0">Comprando apoyas los negocios locales</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 class="blue"><?php echo $key['NAME_COMPANY'] ?></h2>
          <p class="mb-2 blue"><i class="fa fa-bookmark-o fa-lg blue" aria-hidden="true"></i> <?php echo $key['CATEGORY']?></p>
          <p class="lead mb-0"><?php echo $key['DESCRIPTION_COMPANY'] ?></p>
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 class="blue">Nuestros Productos y Servicios</h2>
          <p class="lead mb-0 blueWhite"><?php echo $key['PRODUCT_DESCRIPTION'] ?></p>
          
        </div>
      </div>
      <div class="row no-gutters bg-light">
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 class="blue">Información de la Empresa</h2>
                  <p><i class="fa fa-user-o fa-lg blue"> </i><b> Contacto: </b><?php echo $key['CONTACT_COMPANY'] ?></p>
                  <p><i class="fa fa-map-marker fa-lg blue"> </i> <b>Dirección: </b><?php echo $key['ADDRESS_COMPAMY'] ?></p>
                  <p><i class="fa fa-phone fa-lg blue"> </i> <b>Teléfono Fijo: </b><?php echo $key['PHONE_COMPANY'] ?></p>
                  <p><i class="fa fa-mobile fa-lg blue"> </i> <b>Celular: </b><?php echo $key['CEL_COMPANY'] ?></p>
                  <p><i class="fa fa-envelope-o fa-lg blue"> </i> <b>Mail: </b><?php echo $key['MAIL_COMPANY'] ?></p>
                  <p><i class="fa fa-globe fa-lg blue"> </i> <b>Página Web: </b><?php echo $key['WEB_URL'] ?></p>  
          </div>

          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            
            <h2 class="blue">Nuestras Redes Sociales</h2>
              <div class="row redesContainer">
                    <a <?php echo $stringFB ?>  target="_blank" alt="Visita nuestro FaceBook"><img src="img/facebook.svg" height="40px"/></a>
                    <a <?php echo $stringINS ?> target="_blank" alt="Visita nuestro Instagram"><img src="img/instagram.svg" height="40px"/></a>
                    <a <?php echo $stringYT ?> target="_blank" alt="Visita nuestro canal en Youtube"><img src="img/youtube.svg" height="40px"/></a>
                    <a <?php echo $stringWS ?> target="_blank" alt="Visita nuestro Whatsap"><img src="img/whatsapp.svg" height="40px"/></a>
              </div>
          </div>
      
      </div>

      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2 class="blue">Ubicanos</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31734.753234521744!2d-75.37188653790739!3d6.151620907298328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e469f0f10c26bc9%3A0x76297df352b016c6!2sRionegro%2C%20Antioquia%2C%20Colombia!5e0!3m2!1ses!2sus!4v1591167985491!5m2!1ses!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
          </div>

          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            
            <h2></h2>
              <iframe style="border: none; overflow: hidden;" <?php echo $string ?>  width="100%" height="500" frameborder="0" scrolling="no"></iframe>
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
  <?php
      }
?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
