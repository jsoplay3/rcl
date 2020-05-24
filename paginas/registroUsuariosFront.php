<!DOCTYPE html>
<html lang="en">


<?php
  require_once("../modulos/head.php");
?>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--Barra Navegación Superior-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Logo y Nombre Software-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">Nifty</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--Fin Logo y Nombre Software-->


                <!--Menú de Navegación Lateral Derecho-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Inicio Botón de Menú de Navegación-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Inicio Botón de Menú de Navegación-->



                        <!--Barra de Búsqueda-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li>
                            <div class="custom-search-form">
                                <label class="btn btn-trans" for="search-input" data-toggle="collapse" data-target="#nav-searchbox">
                                    <i class="demo-pli-magnifi-glass"></i>
                                </label>
                                <form>
                                    <div class="search-container collapse" id="nav-searchbox">
                                        <input id="search-input" type="text" class="form-control" placeholder="Type for search...">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Fin Barra de Búsqueda-->

                    </ul>
                    <ul class="nav navbar-top-links">


                        <!--Menú Desplegable-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="mega-dropdown">
                            <a href="#" class="mega-dropdown-toggle">
                                <i class="demo-pli-layout-grid"></i>
                            </a>
                            <div class="dropdown-menu mega-dropdown-menu">
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">

                                        <!--Menú Lista Páginas Recientes-->
                                        <ul class="list-unstyled">
                									        <li class="dropdown-header"><i class="demo-pli-file icon-lg icon-fw"></i> Páginas Recientes</li>
                									        <li><a href="#">Profile</a></li>
                									        <li><a href="#">Search Result</a></li>
                									        <li><a href="#">FAQ</a></li>
                									        <li><a href="#">Sreen Lock</a></li>
                									        <li><a href="#">Maintenance</a></li>
                									        <li><a href="#">Invoice</a></li>
                									        <li><a href="#" class="disabled">Disabled</a></li>
                                        </ul>
                                        <!-- Fin Menú Lista Páginas Recientes -->
                                    </div>
                                    <div class="col-sm-4 col-md-3">

                                        <!--Menú Lista Mail-->
                                        <ul class="list-unstyled">
                									        <li class="dropdown-header"><i class="demo-pli-mail icon-lg icon-fw"></i> Mailbox</li>
                									        <li><a href="#"><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                									        <li><a href="#">Read Message</a></li>
                									        <li><a href="#">Compose</a></li>
                									        <li><a href="#">Template</a></li>
                                        </ul>
                                        <p class="pad-top text-main text-sm text-uppercase text-bold"><i class="icon-lg demo-pli-calendar-4 icon-fw"></i>News</p>
                                        <p class="pad-top mar-top bord-top text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                        <!-- Fin Menú Lista Mail -->
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <!--Menú Lista Íconos-->
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <span class="badge badge-success pull-right">90%</span>
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Data Backup</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-support icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Support</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-computer-secure icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Security</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media mar-btm">
                                                    <div class="media-left">
                                                        <i class="demo-pli-map-2 icon-2x"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-semibold text-main mar-no">Location</p>
                                                        <small class="text-muted">This is the item description</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Fin Menú Lista Íconos -->
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <!-- Menú Galería -->
                                        <p class="dropdown-header"><i class="demo-pli-file-jpg icon-lg icon-fw"></i> Gallery</p>
                                        <div class="row img-gallery">
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-1.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-3.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-2.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-4.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-6.jpg" alt="thumbs">
                                            </div>
                                            <div class="col-xs-4">
                                                <img class="img-responsive" src="img/thumbs/img-5.jpg" alt="thumbs">
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-block btn-primary">Browse Gallery</a>
                                        <!-- Fin Menú Galería -->
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--Menú Desplegable-->










                    </ul>
                </div>
                <!--================================-->
                <!--Fin Menú de Navegación Lateral Derecho-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--Contenedor Principal-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                    <!--Título de la Página-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Form Wizard</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--Fin Título de la Página-->


                    <!--Indicador de Navegación-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
            					<li><a href="#"><i class="demo-pli-home"></i></a></li>
            					<li><a href="#">Forms</a></li>
            					<li class="active">Form Wizard</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--Fin Indicador de Navegación-->

                </div>


                <!--Contenido de la Página-->
                <!--===================================================-->
                <div id="page-content">
					<div class="row">
					    <div class="col-lg-12">
					        <hr class="new-section-sm bord-no">
					        <h4 class="text-main pad-btm bord-btm">Registro de Usuarios</h4>
					        <div class="panel">

					            <!-- Classic Form Wizard -->
					            <!--===================================================-->
					            <div id="demo-cls-wz">

					                <!--Nav-->
					                <ul class="wz-nav-off wz-icon-inline">
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab1">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-information icon-lg"></i></span> Cuenta
					                        </a>
					                    </li>
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab2">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-male icon-lg"></i></span> Perfil
					                        </a>
					                    </li>
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab3">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-home icon-lg"></i></span> Dirección
					                        </a>
					                    </li>
					                    <li class="col-xs-3 bg-mint">
					                        <a data-toggle="tab" href="#demo-cls-tab4">
					                            <span class="icon-wrap icon-wrap-xs"><i class="demo-pli-medal-2 icon-lg"></i></span> Fin
					                        </a>
					                    </li>
					                </ul>

					                <!--Progress bar-->
					                <div class="progress progress-xs progress-striped active">
					                    <div class="progress-bar progress-bar-dark"></div>
					                </div>


					                <!--Form-->
					                <form class="form-horizontal mar-top">
					                    <div class="panel-body">
					                        <div class="tab-content">

					                            <!--First tab-->
					                            <div id="demo-cls-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Nombre de Usuario</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" class="form-control" name="Nombre Usuario" placeholder="Username">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Correo Electrónico</label>
					                                    <div class="col-lg-7">
					                                        <input type="email" class="form-control" name="Correo Electrónico" placeholder="Email">
					                                    </div>
					                                </div>
                                          <div class="form-group">
					                                    <label class="col-lg-3 control-label">Correo Electrónico</label>
					                                    <div class="col-lg-7">
					                                        <input type="password" class="form-control" name="Contrasenia" placeholder="Contraseña">
					                                    </div>
					                                </div>
					                            </div>

					                            <!--Second tab-->
					                            <div id="demo-cls-tab2" class="tab-pane fade">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Tipo de Documento</label>
                                            <div class="col-lg-7">

                                                <select name="tipoDocumento" class="form-control">
                                                    <option></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Documento</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Documento" name="Documento" class="form-control">
                                            </div>
                                        </div>
                                          <div class="form-group">
					                                    <label class="col-lg-3 control-label">Nombres</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Nombres" name="Nombres" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Apellidos</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Apellidos" name="Apellidos" class="form-control">
					                                    </div>
					                                </div>
                                          <div class="form-group">
					                                    <label class="col-lg-3 control-label">Género</label>
					                                    <div class="col-lg-7">
					                                        <input type="radio" placeholder="Apellidos" name="genero" class="form-control"><label>Masculino</label>
                                                  <input type="radio" placeholder="Apellidos" name="genero" class="form-control"><label>Femenino</label>
                                                  <input type="radio" placeholder="Apellidos" name="genero" class="form-control"><label>Otro</label>
					                                    </div>
					                                </div>
                                          <div class="form-group">
					                                    <label class="col-lg-3 control-label">Fecha de Nacimiento</label>
					                                    <div class="col-lg-7">
					                                        <input type="date" name="Apellidos" class="form-control">
					                                    </div>
					                                </div>

					                            </div>

					                            <!--Third tab-->
					                            <div id="demo-cls-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Dirección</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Dirección" name="Dirección" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Ciudad</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Ciudad" name="Ciudad" class="form-control">
					                                    </div>
					                                </div>
                                          <div class="form-group">
					                                    <label class="col-lg-3 control-label">Teléfono/Celular</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Teléfono" name="telefono" class="form-control">
					                                    </div>
					                                </div>
					                            </div>

					                            <!--Fourth tab-->
					                            <div id="demo-cls-tab4" class="tab-pane mar-btm">
					                                <h4>Gracias.</h4>
					                                <p>El usuario ha sido registrado con éxito</p>
					                            </div>
					                        </div>
					                    </div>


					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-mint">Anterior</button>
					                            <button type="button" class="next btn btn-mint">Siguiente</button>
					                            <button type="button" class="finish btn btn-mint" disabled>Fin</button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					            <!--===================================================-->
					            <!-- End Classic Form Wizard -->

					        </div>
					    </div>
					    <div class="col-lg-6">

					    </div>
					</div>
					<div class="row">

					    <div class="col-lg-6">

					        <hr class="new-section-sm bord-no">
					        <h4 class="text-main pad-btm bord-btm">With Validation</h4>
					        <div class="panel">

					            <!-- Form wizard with Validation -->
					            <!--===================================================-->
					            <div id="demo-bv-wz">
					                <div class="wz-heading pad-top">

					                    <!--Nav-->
					                    <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab1">
					                                <span class="text-danger"><i class="demo-pli-information icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Account</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab2">
					                                <span class="text-warning"><i class="demo-pli-male icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Profile</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab3">
					                                <span class="text-info"><i class="demo-pli-home icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Address</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab4">
					                                <span class="text-success"><i class="demo-pli-medal-2 icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Finish</p>
					                            </a>
					                        </li>
					                    </ul>
					                </div>

					                <!--progress bar-->
					                <div class="progress progress-xs">
					                    <div class="progress-bar progress-bar-primary"></div>
					                </div>


					                <!--Form-->
					                <form id="demo-bv-wz-form" class="form-horizontal">
					                    <div class="panel-body">
					                        <div class="tab-content">

					                            <!--First tab-->
					                            <div id="demo-bv-tab1" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Nombre de Usuario</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" class="form-control" name="username" placeholder="Username">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Email address</label>
					                                    <div class="col-lg-7">
					                                        <input type="email" class="form-control" name="email" placeholder="Email">
					                                    </div>
					                                </div>
					                            </div>

					                            <!--Second tab-->
					                            <div id="demo-bv-tab2" class="tab-pane fade">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">First name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="First name" name="firstName" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Last name</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Last name" name="lastName" class="form-control">
					                                    </div>
					                                </div>
					                            </div>

					                            <!--Third tab-->
					                            <div id="demo-bv-tab3" class="tab-pane">
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Phone Number</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
					                                    </div>
					                                </div>
					                                <div class="form-group">
					                                    <label class="col-lg-3 control-label">Address</label>
					                                    <div class="col-lg-7">
					                                        <input type="text" placeholder="Phone number" name="address" class="form-control">
					                                    </div>
					                                </div>
					                            </div>

					                            <!--Fourth tab-->
					                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Thank you</h4>
					                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
					                            </div>
					                        </div>
					                    </div>

					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-primary">Previous</button>
					                            <button type="button" class="next btn btn-primary">Next</button>
					                            <button type="button" class="finish btn btn-warning" disabled>Finish</button>
					                        </div>
					                    </div>
					                </form>
					            </div>
					            <!--===================================================-->
					            <!-- End Form wizard with Validation -->

					        </div>
					    </div>
					</div>



                </div>
                <!--===================================================-->
                <!--Fin Contenido de la Página-->

            </div>
            <!--===================================================-->
            <!--Fin Contenedor Principal-->



            <!--Menú Lateral Izquierdo-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Pestañas de Navegación-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <!-- Ícono Contactos-->
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                <!-- Fin Ícono Contactos-->
                                <!-- Ícono Reportes-->
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                    </a>
                                </li>
                                <!-- Fin Ícono Reportes-->
                                <!-- Ícono Configuración-->
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                                <!-- Fin Ícono Configuración-->
                            </ul>
                            <!--================================-->
                            <!--Fin Pestañas de Navegación-->



                            <!-- Contenido de las Pestañas -->
                            <!--================================-->
                            <div class="tab-content">

                                <!--Pestaña Contactos -->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-warning">3</span> Family
                                    </p>

                                    <!--Familiares-->
                                    <div class="list-group bg-trans">
              							            <a href="#" class="list-group-item">
              							                <div class="media-left pos-rel">
              							                    <img class="img-circle img-xs" src="img/profile-photos/2.png" alt="Profile Picture">
              												<i class="badge badge-success badge-stat badge-icon pull-left"></i>
              							                </div>
              							                <div class="media-body">
              							                    <p class="mar-no text-main">Stephen Tran</p>
              							                    <small class="text-muteds">Availabe</small>
              							                </div>
              							            </a>
              							            <a href="#" class="list-group-item">
              							                <div class="media-left pos-rel">
              							                    <img class="img-circle img-xs" src="img/profile-photos/7.png" alt="Profile Picture">
              							                </div>
              							                <div class="media-body">
              							                    <p class="mar-no text-main">Brittany Meyer</p>
              							                    <small class="text-muteds">I think so</small>
              							                </div>
              							            </a>
              							            <a href="#" class="list-group-item">
              							                <div class="media-left pos-rel">
              							                    <img class="img-circle img-xs" src="img/profile-photos/1.png" alt="Profile Picture">
              												<i class="badge badge-info badge-stat badge-icon pull-left"></i>
              							                </div>
              							                <div class="media-body">
              							                    <p class="mar-no text-main">Jack George</p>
              							                    <small class="text-muteds">Last Seen 2 hours ago</small>
              							                </div>
              							            </a>
              							            <a href="#" class="list-group-item">
              							                <div class="media-left pos-rel">
              							                    <img class="img-circle img-xs" src="img/profile-photos/4.png" alt="Profile Picture">
              							                </div>
              							                <div class="media-body">
              							                    <p class="mar-no text-main">Donald Brown</p>
              							                    <small class="text-muteds">Lorem ipsum dolor sit amet.</small>
              							                </div>
              							            </a>
              							            <a href="#" class="list-group-item">
              							                <div class="media-left pos-rel">
              							                    <img class="img-circle img-xs" src="img/profile-photos/8.png" alt="Profile Picture">
              												<i class="badge badge-warning badge-stat badge-icon pull-left"></i>
              							                </div>
              							                <div class="media-body">
              							                    <p class="mar-no text-main">Betty Murphy</p>
              							                    <small class="text-muteds">Idle</small>
              							                </div>
              							            </a>
              							            <a href="#" class="list-group-item">
              							                <div class="media-left pos-rel">
              							                    <img class="img-circle img-xs" src="img/profile-photos/9.png" alt="Profile Picture">
              												<i class="badge badge-danger badge-stat badge-icon pull-left"></i>
              							                </div>
              							                <div class="media-body">
              							                    <p class="mar-no text-main">Samantha Reid</p>
              							                    <small class="text-muteds">Offline</small>
              							                </div>
              							            </a>
                                    </div>
                                    <!-- Fin Familiares -->

                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">
                                        <span class="pull-right badge badge-success">Offline</span> Friends
                                    </p>

                                    <!--Trabajo-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-purple badge-icon badge-fw pull-left"></span> Joey K. Greyson
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-info badge-icon badge-fw pull-left"></span> Andrea Branden
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-success badge-icon badge-fw pull-left"></span> Johny Juan
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <span class="badge badge-danger badge-icon badge-fw pull-left"></span> Susan Sun
                                        </a>
                                    </div>
                                    <!--Fin Trabajo-->
                                    <!-- Noticias -->
                                    <hr>
                                    <p class="pad-all text-main text-sm text-uppercase text-bold">News</p>

                                    <div class="pad-hor">
                                        <p>Lorem ipsum dolor sit amet, consectetuer
                                            <a data-title="45%" class="add-tooltip text-semibold text-main" href="#">adipiscing elit</a>, sed diam nonummy nibh. Lorem ipsum dolor sit amet.
                                        </p>
                                        <small><em>Last Update : Des 12, 2014</em></small>
                                    </div>
                                    <!-- Noticias -->


                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Fin Pestaña Contactos -->


                                <!--Pestaña Reportes-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">

                                    <!--Ventas Mensuales-->
                                    <div class="pad-all">
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                        <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due On</span>
                                        <p class="text-sm">August 17, 2018</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>
                                    <!--Fin Ventas Mensuales-->


                                    <hr>

                                    <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                    <!--Menú Simple-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>
                                    <!--Fin Menú Simple-->


                                    <hr>
                                    <!-- Ícono de Soporte-->
                                    <div class="text-center">
                                        <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                        <small><em>We are here 24/7</em></small>
                                    </div>
                                    <!-- Fin Ícono de Soporte-->
                                </div>
                                <!--Fin Pestaña Reportes-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Pestaña Configuración-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <ul class="list-group bg-trans">
                                        <li class="pad-top list-header">
                                            <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                                <label for="demo-switch-1"></label>
                                            </div>
                                            <p class="mar-no text-main">Show my personal status</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                                <label for="demo-switch-2"></label>
                                            </div>
                                            <p class="mar-no text-main">Show offline contact</p>
                                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                                <label for="demo-switch-3"></label>
                                            </div>
                                            <p class="mar-no text-main">Invisible mode </p>
                                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                        </li>
                                    </ul>


                                    <hr>

                                    <ul class="list-group pad-btm bg-trans">
                                        <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                                <label for="demo-switch-4"></label>
                                            </div>
                                            Online status
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                                <label for="demo-switch-5"></label>
                                            </div>
                                            Show offline contact
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                                <label for="demo-switch-6"></label>
                                            </div>
                                            Show my device icon
                                        </li>
                                    </ul>



                                    <hr>

                                    <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                    <div class="pad-all">
                                        <p class="text-main">Upgrade Progress</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                        </div>
                                        <small>15% Completed</small>
                                    </div>
                                    <div class="pad-hor">
                                        <p class="text-main">Database</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                        </div>
                                        <small>17/23 Database</small>
                                    </div>

                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Fin Pestaña Configuración-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->


            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">


                    <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                    <!--It will only appear on small screen devices.-->
                    <!--================================
                    <div class="mainnav-brand">
                        <a href="index.html" class="brand">
                            <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">Nifty</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>
                    -->



                    <!--Menu Izquierdo-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Perfil de Usuario-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="img/profile-photos/1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Juan Ossa</p>
                                            <span class="mnp-desc">juan.ossa@gmail.com</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Help
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>
                                <!--Fin Perfil de Usuario-->

                                <!--Botones de Acceso Rápido-->
                                <!--================================-->
                                <div id="mainnav-shortcut" class="hidden">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--Fin Botones de Acceso Rápido-->


                                <ul id="mainnav-menu" class="list-group">

						            <!--Category name-->
						            <li class="list-header">Navigation</li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-home"></i>
						                    <span class="menu-title">Dashboard</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="index.html">Dashboard 1</a></li>
											<li><a href="dashboard-2.html">Dashboard 2</a></li>
											<li><a href="dashboard-3.html">Dashboard 3</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-split-vertical-2"></i>
						                    <span class="menu-title">Layouts</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
											<li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
											<li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
											<li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
											<li class="list-divider"></li>
											<li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
											<li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
											<li><a href="layouts-aside-dark-theme.html">Dark version of aside</a></li>
											<li class="list-divider"></li>
											<li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
											<li><a href="layouts-fixed-footer.html">Fixed Footer</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="widgets.html">
						                    <i class="demo-pli-gear"></i>
						                    <span class="menu-title">
												Widgets
												<span class="pull-right badge badge-warning">24</span>
											</span>
						                </a>
						            </li>

						            <li class="list-divider"></li>

						            <!--Category name-->
						            <li class="list-header">Components</li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-boot-2"></i>
						                    <span class="menu-title">UI Elements</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="ui-buttons.html">Buttons</a></li>
											<li><a href="ui-panels.html">Panels</a></li>
											<li><a href="ui-modals.html">Modals</a></li>
											<li><a href="ui-progress-bars.html">Progress bars</a></li>
											<li><a href="ui-components.html">Components</a></li>
											<li><a href="ui-typography.html">Typography</a></li>
											<li><a href="ui-list-group.html">List Group</a></li>
											<li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
											<li><a href="ui-alerts-tooltips.html">Alerts &amp; Tooltips</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li class="active-sub">
						                <a href="#">
						                    <i class="demo-pli-pen-5"></i>
						                    <span class="menu-title">Forms</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse in">
						                    <li><a href="forms-general.html">General</a></li>
											<li><a href="forms-components.html">Advanced Components</a></li>
											<li><a href="forms-validation.html">Validation</a></li>
											<li class="active-link"><a href="forms-wizard.html">Wizard</a></li>
											<li><a href="forms-file-upload.html">File Upload</a></li>
											<li><a href="forms-text-editor.html">Text Editor</a></li>
											<li><a href="forms-markdown.html">Markdown</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-receipt-4"></i>
						                    <span class="menu-title">Tables</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="tables-static.html">Static Tables</a></li>
											<li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
											<li><a href="tables-datatable.html">Data Tables</a></li>
											<li><a href="tables-footable.html">Foo Tables</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-bar-chart"></i>
						                    <span class="menu-title">Charts</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="charts-morris-js.html">Morris JS</a></li>
											<li><a href="charts-flot-charts.html">Flot Charts</a></li>
											<li><a href="charts-easy-pie-charts.html">Easy Pie Charts</a></li>
											<li><a href="charts-sparklines.html">Sparklines</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-repair"></i>
						                    <span class="menu-title">Miscellaneous</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="misc-timeline.html">Timeline</a></li>
											<li><a href="misc-maps.html">Google Maps</a></li>
											<li><a href="xplugins-notifications.html">Notifications<span class="label label-purple pull-right">Improved</span></a></li>
											<li><a href="misc-nestable-list.html">Nestable List</a></li>
											<li><a href="misc-animate-css.html">CSS Animations</a></li>
											<li><a href="misc-css-loaders.html">CSS Loaders</a></li>
											<li><a href="misc-spinkit.html">Spinkit</a></li>
											<li><a href="misc-tree-view.html">Tree View</a></li>
											<li><a href="misc-clipboard.html">Clipboard</a></li>
											<li><a href="misc-x-editable.html">X-Editable</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-warning-window"></i>
						                    <span class="menu-title">Grid System</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="grid-bootstrap.html">Bootstrap Grid</a></li>
											<li><a href="grid-liquid-fixed.html">Liquid Fixed</a></li>
											<li><a href="grid-match-height.html">Match Height</a></li>
											<li><a href="grid-masonry.html">Masonry</a></li>

						                </ul>
						            </li>

						            <li class="list-divider"></li>

						            <!--Category name-->
						            <li class="list-header">More</li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-computer-secure"></i>
						                    <span class="menu-title">App Views</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="app-file-manager.html">File Manager</a></li>
											<li><a href="app-users.html">Users</a></li>
											<li><a href="app-users-2.html">Users 2</a></li>
											<li><a href="app-profile.html">Profile</a></li>
											<li><a href="app-calendar.html">Calendar</a></li>
											<li><a href="app-taskboard.html">Taskboard</a></li>
											<li><a href="app-chat.html">Chat</a></li>
											<li><a href="app-contact-us.html">Contact Us</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-speech-bubble-5"></i>
						                    <span class="menu-title">Blog Apps</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="blog.html">Blog</a></li>
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-list-2.html">Blog List 2</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
											<li class="list-divider"></li>
											<li><a href="blog-manage-posts.html">Manage Posts</a></li>
											<li><a href="blog-add-edit-post.html">Add Edit Post</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-mail"></i>
						                    <span class="menu-title">Email</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="mailbox.html">Inbox</a></li>
											<li><a href="mailbox-message.html">View Message</a></li>
											<li><a href="mailbox-compose.html">Compose Message</a></li>
											<li><a href="mailbox-templates.html">Email Templates</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-file-html"></i>
						                    <span class="menu-title">Other Pages</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="pages-blank.html">Blank Page</a></li>
											<li><a href="pages-invoice.html">Invoice</a></li>
											<li><a href="pages-search-results.html">Search Results</a></li>
											<li><a href="pages-faq.html">FAQ</a></li>
											<li><a href="pages-pricing.html">Pricing<span class="label label-success pull-right">New</span></a></li>
											<li class="list-divider"></li>
											<li><a href="pages-404-alt.html">Error 404 alt</a></li>
											<li><a href="pages-500-alt.html">Error 500 alt</a></li>
											<li class="list-divider"></li>
											<li><a href="pages-404.html">Error 404 </a></li>
											<li><a href="pages-500.html">Error 500</a></li>
											<li><a href="pages-maintenance.html">Maintenance</a></li>
											<li><a href="pages-login.html">Login</a></li>
											<li><a href="pages-register.html">Register</a></li>
											<li><a href="pages-password-reminder.html">Password Reminder</a></li>
											<li><a href="pages-lock-screen.html">Lock Screen</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-photo-2"></i>
						                    <span class="menu-title">Gallery</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="gallery-columns.html">Columns</a></li>
											<li><a href="gallery-justified.html">Justified</a></li>
											<li><a href="gallery-nested.html">Nested</a></li>
											<li><a href="gallery-grid.html">Grid</a></li>
											<li><a href="gallery-carousel.html">Carousel</a></li>
											<li class="list-divider"></li>
											<li><a href="gallery-slider.html">Slider</a></li>
											<li><a href="gallery-default-theme.html">Default Theme</a></li>
											<li><a href="gallery-compact-theme.html">Compact Theme</a></li>
											<li><a href="gallery-grid-theme.html">Grid Theme</a></li>

						                </ul>
						            </li>


                                    <!--Menu list item-->
                                    <li>
                                        <a href="#">
                                            <i class="demo-pli-tactic"></i>
                                            <span class="menu-title">Menu Level</span>
                                            <i class="arrow"></i>
                                        </a>

                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li><a href="#">Second Level Item</a></li>
                                            <li><a href="#">Second Level Item</a></li>
                                            <li><a href="#">Second Level Item</a></li>
                                            <li class="list-divider"></li>
                                            <li>
                                                <a href="#">Third Level<i class="arrow"></i></a>

                                                <!--Submenu-->
                                                <ul class="collapse">
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Third Level<i class="arrow"></i></a>

                                                <!--Submenu-->
                                                <ul class="collapse">
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li class="list-divider"></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                    <li><a href="#">Third Level Item</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>


						            <li class="list-divider"></li>

						            <!--Category name-->
						            <li class="list-header">Extras</li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-happy"></i>
						                    <span class="menu-title">Icons Pack</span>
											<i class="arrow"></i>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
											<li><a href="icons-themify.html">Themify</a></li>
											<li><a href="icons-font-awesome.html">Font Awesome</a></li>
											<li><a href="icons-flagicons.html">Flag Icon CSS</a></li>
											<li><a href="icons-weather-icons.html">Weather Icons</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-medal-2"></i>
						                    <span class="menu-title">
												PREMIUM ICONS
												<span class="label label-danger pull-right">BEST</span>
											</span>
						                </a>

						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="premium-line-icons.html">Line Icons Pack</a></li>
											<li><a href="premium-solid-icons.html">Solid Icons Pack</a></li>

						                </ul>
						            </li>

						            <!--Menu list item-->
						            <li>
						                <a href="helper-classes.html">
						                    <i class="demo-pli-inbox-full"></i>
						                    <span class="menu-title">Helper Classes</span>
						                </a>
						            </li>                                </ul>


                                <!--Widget-->
                                <!--================================-->
                                <div class="mainnav-widget">

                                    <!-- Show the button on collapsed navigation -->
                                    <div class="show-small">
                                        <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                            <i class="demo-pli-monitor-2"></i>
                                        </a>
                                    </div>

                                    <!-- Hide the content on collapsed navigation -->
                                    <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                        <ul class="list-group">
                                            <li class="list-header pad-no mar-ver">Server Status</li>
                                            <li class="mar-btm">
                                                <span class="label label-primary pull-right">15%</span>
                                                <p>CPU Usage</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                        <span class="sr-only">15%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mar-btm">
                                                <span class="label label-purple pull-right">75%</span>
                                                <p>Bandwidth</p>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                        <span class="sr-only">75%</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pad-ver"><a href="#" class="btn btn-success btn-bock">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--================================-->
                                <!--End widget-->

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--Fin Menu Izquierdo-->

                </div>
            </nav>
            <!--===================================================-->
            <!--Fin Menú de Navegación-->

        </div>






        <!-- Botón de Ir Arriba -->
        <!--===================================================-->
        <?php
          require_once("../modulos/botonIrArriba.php");
         ?>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- Fin Botón de Ir Arriba -->





    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="../js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="../js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="../js/nifty.min.js"></script>




    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="../js/demo/nifty-demo.min.js"></script>


    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src="../plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="../plugins/bootstrap-validator/bootstrapValidator.min.js"></script>


    <!--Form Wizard [ SAMPLE ]-->
    <script src="../js/demo/form-wizard.js"></script>




</body>
</html>
