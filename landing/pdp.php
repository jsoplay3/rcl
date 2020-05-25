<?php
  if($_POST['idCompany'] == ""){
		echo "<meta http-equiv='Refresh' content='0;url=index.php'>";
	} else {
	}

?>
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
  <link href="css/myStyle.css" type="text/css" rel="stylesheet">
</head>
<body>

<?php
      require_once('../controller/EmpresaControlador.php');
      $empresa = new EmpresaControlador();
      $emp = $empresa->consultarEmpresaPorId($_POST['idCompany']);
      foreach ($emp as $key) {
        $string = "src='https://www.facebook.com/plugins/page.php?href=".$key['FB_URL']."%2F%3Ffref%3Dts&amp;tabs=timeline&amp;width=376&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=533836100158507'"; 
        
?>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
    <img src="../landing/images/logoRcl.svg" height="60px"/>
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
        <h1 class="header center teal-text text-lighten-2"><?php echo $key['NAME_COMPANY'] ?></h1>
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
      
        <div class="col s12 m8 ">
            <div class="row">
              <div class="col s12 m6 ">
                <div class="pdpTitleCompany"><?php echo $key['NAME_COMPANY'] ?></div>
                <div class="pdpCategoryContainer">
                  <span class="pdpCategoryTitle">Categoría<?php echo $key['CATEGORY_COMPANY'] ?></span><span class="pdpCategoryDescription">Alimentos y Concentrados</span>
                </div>
                
                <p><?php echo $key['DESCRIPTION_COMPANY'] ?></p>
              </div>

              <div class="col s12 m6">
                <div class="pdpPanelInfoCompany">
                  
                  <h5 class="pdpTitleRedes">Información de la Empresa</h5>
                  <div class="itemInfoCompany"><i class="material-icons">contacts</i><span class="colorBlue">Contacto: </span><?php echo $key['CONTACT_COMPANY'] ?></div>
                  <div class="itemInfoCompany"><i class="material-icons">directions</i><span class="colorBlue"> Dirección: </span><?php echo $key['ADDRESS_COMPAMY'] ?></div>
                  <div class="itemInfoCompany"><i class="material-icons">local_phone</i><span class="colorBlue"> Teléfono Fijo: </span><?php echo $key['PHONE_COMPANY'] ?></div>
                  <div class="itemInfoCompany"><i class="material-icons">settings_cell</i><span class="colorBlue"> Celular: </span><?php echo $key['CEL_COMPANY'] ?></div>
                  <div class="itemInfoCompany"><i class="material-icons">email</i><span class="colorBlue"> Mail: </span><?php echo $key['MAIL_COMPANY'] ?></div>
                  <div class="itemInfoCompany"><i class="material-icons">explore</i><span class="colorBlue"> Página Web: </span><?php echo $key['WEB_URL'] ?></div>
                  
                </div>
                <div class="pdpPanelRedes">
                <h5 class="pdpTitleRedes">Nuestras Redes Sociales</h5>
                  <div class="redesContainer">
                    <a href="'.$key['FB_URL'].'" target="_blank" alt="Visita nuestro FaceBook"><img src="images/facebook.svg" height="40px"/></a>
                    <a href="'.$key['INS_URL'].'" target="_blank" alt="Visita nuestro Instagram"><img src="images/instagram.svg" height="40px"/></a>
                    <a href="'.$key['YT_URL'].'" target="_blank" alt="Visita nuestro canal en Youtube"><img src="images/youtube.svg" height="40px"/></a>
                    <a href="https://api.whatsapp.com/send?phone=+57'.$key['CEL_COMPANY'].'" target="_blank" alt="Visita nuestro Whatsap"><img src="images/whatsapp.svg" height="40px"/></a>
                  </div>
                </div>
              </div>

            </div>
            <div class="row">
                <span class="pdpTitleProduct">Descripción del Producto o Servicio</span>
                <p><?php echo $key['PRODUCT_DESCRIPTION'] ?></p>
            </div>
            <div class="row">
            
            </div>
        </div>

        <div class="col s12 m4">
        <iframe style="border: none; overflow: hidden;" <?php echo $string ?>  width="376" height="500" frameborder="0" scrolling="no"></iframe>
        </div>
      
        
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
<?php
      }
?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
