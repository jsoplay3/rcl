<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <?php
    require_once('../controller/EmpresaControlador.php');
  ?>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Rionegro Compra Local</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Inicio</a></li>
        <li><a href="../views/login.php">Registrar Empresa</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Rionegro Compra Local</h1>
        <div class="row center">
          <h5 class="header col s12 light">Inscríbete tu negocio en nuestro sistema para aumentar tus ventas a </h5>
        </div>
        <div class="row center">
          <a href="../views/login.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Inscribir Empresa</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/banner_rionegro1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
      <?php
      $empresa = new EmpresaControlador();
      $emp = $empresa->consultarEmpresaPorId();
      foreach ($emp as $key) {
      echo '
        <div class="col s12 m4">
          <div class="card ">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../utils/img_logo_coompanies/'.$key['LOGO_URL'].'">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">'.$key['NAME_COMPANY'].'<i class="material-icons right">more_vert</i></span>
              <p><span>Página Web: </span><a href="'.$key['WEB_URL'].'" target="_blank">'.$key['WEB_URL'].'</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">'.$key['NAME_COMPANY'].'<i class="material-icons right">close</i></span>
              <p>'.$key['DESCRIPTION_COMPANY'].'</p>
              <span class="card-title grey-text text-darken-4">Poroductos</span>
              <p>'.$key['PRODUCT_DESCRIPTION'].'</p>
            </div>
            <div class="card-action">
              <a href="'.$key['FB_URL'].'" target="_blank">Facebook</a>
              <a href="'.$key['INS_URL'].'" target="_blank">Instagram</a>
              <a href="'.$key['YT_URL'].'" target="_blank">Youtube</a>
            </div>
          </div>
        </div>
        ';
      }
      ?>
        
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Endendemos que estar contigo es brindarte herramientas para tu negocio</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/banner_igleasia.jpeg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Rionegro es un municipio de Colombia, ubicado en el departamento de Antioquia. Se encuentra en el valle de San Nicolás o también llamado Altiplano del Oriente, en la subregión Oriente, siendo la población más grande, así como la que concentra el movimiento económico de la subregión. Su nombre oficial es Ciudad Santiago de Arma de Rionegro.1​ Limita al norte con los municipios de Guarne y San Vicente, por el este con los municipios de Marinilla y El Carmen de Viboral, por el sur con el municipio de La Ceja, y por el oeste con los municipios de El Retiro, Envigado y Medellín </p>
        </div>
      </div>

    </div>
  </div>


  

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Rionegro Compra Local</h5>
          <p class="grey-text text-lighten-4">Rionegro compra local es una iniciativa de la Secretaria de Desarrollo Economico, a través de la subsecretaria de Ciencia Tecnología e Innovación para el apalancamiento de negocios RIonegreros en la red.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Alidados</h5>
          <ul>
            <li><a class="white-text" href="#!">Alcaldía de Rionegro</a></li>
            <li><a class="white-text" href="#!">Cámara de Comercio</a></li>
            <li><a class="white-text" href="#!">TecnoParque</a></li>
            <li><a class="white-text" href="#!">Masora</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contacto</h5>
          <ul>
            <li>Secretaría de Desarrollo Económico</li>
            <li>Tels. 555-55-55</li>
            <li>Url: http://www.google.com</li>
            <li>Correo: admin@rionegro.gov.co</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Desarrollado por:  <a class="brown-text text-lighten-3" href="#">Raptor - FullStack</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
