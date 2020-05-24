<!DOCTYPE html>
<html lang="en">

    <?php
      require_once("../modulos/head.php");
    ?>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">

		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img" style="background-image: url(../img/bg-img-3.jpg)"></div>


		<!-- FormularioLogin -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Ingreso al Sistema</h1>
		                <p>Ingrese con su cuenta</p>
                    <p>El cambio está en ti</p>
		            </div>
		            <form action="index.html">
		                <div class="form-group">
		                    <input type="text" class="form-control" placeholder="Nombre de usuario" autofocus>
		                </div>
		                <div class="form-group">
		                    <input type="password" class="form-control" placeholder="Contraseña">
		                </div>
		                <div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">Recordarme</label>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Ingresar</button>
		            </form>
		        </div>

		        <div class="pad-all">
		            <a href="#" class="btn-link mar-rgt">Olvido la contraseña?</a>
		            <a href="#" class="btn-link mar-lft">Crear una cuenta nueva</a>

		            <div class="media pad-top bord-top">
		                <div class="pull-right">
		                    <a href="#" class="pad-rgt"><i class="psi-facebook icon-lg text-primary"></i></a>
		                    <a href="#" class="pad-rgt"><i class="psi-twitter icon-lg text-info"></i></a>
		                    <a href="#" class="pad-rgt"><i class="psi-google-plus icon-lg text-danger"></i></a>
		                </div>
		                <div class="media-body text-left text-bold text-main">
		                    Ingresar con
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- Fin FormularioLogin -->


    </body>
</html>
