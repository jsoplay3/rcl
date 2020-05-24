<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard | Nifty - Admin Template</title>


    <?php
      require_once("../controller/UsuarioControlador.php");

      require_once("modulosTransversales/encabezado.php");
    ?>
    <!-- NECESARIOS PARA SELECT 2 -->
    <!--Chosen [ OPTIONAL ]-->
    <link href="../plugins/chosen/chosen.min.css" rel="stylesheet">
    <!-- FIN NECESARIOS PARA SELECT 2 -->



    <!-- NECESARIOS PARA TABLAS BOOTSTRAP -->
    <!--Bootstrap Table [ OPTIONAL ]-->
    <link href="../plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <!-- NECESARIOS PARA TABLAS BOOTSTRAP -->

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- FIN NECESARIOS PARA TABLAS BOOTSTRAP -->


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-sm page-fixedbar">

        <?php
          require_once("modulosTransversales/navbar.php");
        ?>

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Escritorio</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
					<li><a href="#"><i class="demo-pli-home"></i></a></li>
					<li class="active">Gestión de Usuarios</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>


                <?php
                  require_once("modulosTransversales/barraLateralIzquierdaUsuario.php");
                ?>

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">


                    <div class="row">
                      <!--Panel with Tabs-->
                      <!--===================================================-->
                      <div class="panel panel-primary">

                          <!--Panel heading-->
                          <div class="panel-heading">
                              <div class="panel-control">

                                  <!--Nav tabs-->
                                  <ul class="nav nav-tabs">
                                      <li class="active"><a data-toggle="tab" href="#demo-tabs-box-1">Consulta de Usuarios</a></li>
                                      <li><a data-toggle="tab" href="#demo-tabs-box-2">Registrar Usuarios</a></li>
                                      <li><button class="btn btn-default" data-panel="fullscreen">
                               <i class="icon-max demo-psi-maximize-3"></i>
                               <i class="icon-min demo-psi-minimize-3"></i>
                           </button></li>
                                      <button class="demo-panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#demo-panel-collapse-default"><i class="demo-psi-repeat-2"></i></button>
                                  </ul>

                              </div>
                              <h3 class="panel-title">Gestión de Usuarios</h3>
                          </div>

                          <!--Panel body-->
                          <div class="panel-body">

                              <!--Tabs content-->
                              <div class="tab-content">
                                  <div id="demo-tabs-box-1" class="tab-pane fade in active">
                                    <table data-toggle="table"
                                           data-url=""
                                           data-search="true"
                                           data-show-refresh="true"
                                           data-show-toggle="true"
                                           data-show-columns="true"
                                           data-sort-name="id"
                                           data-page-list="[5, 10, 20]"
                                           data-page-size="5"
                                           data-pagination="true" data-show-pagination-switch="true">
                                        <thead>
                                            <tr>
                                                <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Documento</th>
                                                <th data-field="name" data-sortable="true">Nombres/Apellidos</th>
                                                <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Ciudad Residencia</th>
                                                <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Teléfono</th>
                                                <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Mail</th>
                                                <th data-field="track" data-align="center" data-sortable="true" data-formatter="trackFormatter">Pago</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <?php
                                              $obj = new UsuarioControlador();
                                              $datos = $obj->consultarUsuario();
                                              echo "<tr>";
                                              foreach ($datos as $key) {
                                                echo "<td>".$key['usu_documento']."</td>";
                                                echo "<td>".$key['usu_nombres']. " " .$key['usu_apellidos'] ."</td>";
                                                echo "<td>".$key['usu_ciudadResidencia']."</td>";
                                                echo "<td>".$key['usu_celular']."</td>";
                                                echo "<td>".$key['usu_correoElectronico']."</td>";
                                                echo "<td></td>
                                                </tr>";
                                              }

                                              ?>

                                            </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                  <div id="demo-tabs-box-2" class="tab-pane fade">
                                    <form action="../validacionesBack/validaUsuarioBack.php" class="panel-body form-horizontal form-padding" onsubmit="return validacion()" method="post">
                                    <!-- FORMULARIO DE USUARIOS-->
                                    <div class="col-lg-4">
                                      <!--Text Input-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="tipoDocumentoSolicitado">Tipo de documento</label>
                                        <div class="col-md-9">
                                          <!-- Default choosen -->
                                          <!--===================================================-->
                                          <select data-placeholder="Seleccione un tipo" name="tipoDocumentoSolicitado" id="demo-chosen-select" tabindex="2" size="15">
                                            <?php
                                              //$obj = new UsuarioControlador();
                                              echo $obj->retornaOptionTipoDocumento();
                                            ?>

                                          </select>
                                        <!--===================================================-->
                                        <small class="help-block">Seleccione el tipo de documento</small>
                                        </div>
                                      </div>

                                      <!--Text Input-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="documentoSolicitado">Número de documento</label>
                                        <div class="col-md-9">
                                          <input type="text" id="documentoSolicitado" name="documentoSolicitado" class="form-control" placeholder="Documento" >
                                          <small class="help-block">Ingrese el número del documento</small>
                                        </div>
                                      </div>

                                      <!--Text Input-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="nombreSolicitado">Nombres</label>
                                        <div class="col-md-9">
                                          <input type="text" id="nombreSolicitado" name="nombreSolicitado" class="form-control" placeholder="Nombres" >
                                          <small class="help-block">Ingrese sus nombres completos</small>
                                        </div>
                                      </div>

                                      <!--Text Input-->
                                      <div class="form-group">
                                      <label class="col-md-3 control-label" for="apellidoSolicitado">Apellidos</label>
                                        <div class="col-md-9">
                                          <input type="text" id="apellidoSolicitado" name="apellidoSolicitado" class="form-control" placeholder="Apellidos" >
                                          <small class="help-block">Ingrese sus apellidos completos</small>
                                        </div>
                                      </div>


                                      <div class="form-group pad-ver">
                                      <label class="col-md-3 control-label">Género</label>
                                        <div class="col-md-9">
                                          <select data-placeholder="Seleccione un género" name="generoSolicitado" id="generoSolicitado" tabindex="" size="15">
                                            <?php
                                              //$obj = new UsuarioControlador();
                                              echo $obj->retornaOptionGenero();
                                            ?>
                                          </select>
                                          <!--===================================================-->
                                          <small class="help-block">Seleccione el tipo de género</small>
                                        </div>
                                      </div>




                                    </div>


                                    <div class="col-lg-4">

                                      <!--Text Input-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="fechaNacimientoSolicitado">Fecha de Nacimiento</label>
                                        <div class="col-md-9">
                                          <div id="demo-dp-component">
                                            <div class="input-group date">
                                              <input type="date" class="form-control" name="fechaNacimientoSolicitado">
                                              <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
                                            </div>
                                          <small class="text-muted">Seleccione su fecha de nacimiento</small>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group pad-ver">
                                      <label class="col-md-3 control-label">Tipo de Sangre</label>
                                        <div class="col-md-9">
                                          <select data-placeholder="Seleccione un tipo" name="tipoSangreSolicitado" id="tipoSangreSolicitado" tabindex="" size="15">
                                            <?php
                                              //$obj = new UsuarioControlador();
                                              echo $obj->retornaOptionTipoSangre();
                                            ?>
                                          </select>
                                          <!--===================================================-->
                                          <small class="help-block">Seleccione el tipo de sangre</small>
                                        </div>
                                      </div>





                                      <div class="form-group pad-ver">
                                      <label class="col-md-3 control-label">País de Residencia</label>
                                        <div class="col-md-9">
                                          <select data-placeholder="Seleccione un país" name="paisResidenciaSolicitado" id="paisResidenciaSolicitado" tabindex="" size="15">
                                            <?php
                                              //$obj = new UsuarioControlador();
                                              echo $obj->retornaOptionPais();
                                            ?>
                                          </select>
                                          <!--===================================================-->
                                          <small class="help-block">Seleccione el país de residencia</small>
                                        </div>
                                      </div>

                                      <div class="form-group pad-ver">
                                      <label class="col-md-3 control-label">Departamento / Estado de Residencia</label>
                                        <div class="col-md-9">
                                          <select data-placeholder="Seleccione un estado" name="estadoResidenciaSolicitado" id="estadoResidenciaSolicitado" tabindex="" size="15">
                                            <?php
                                              $obj = new UsuarioControlador();
                                              echo $obj->retornaOptionEstado();
                                            ?>
                                          </select>
                                          <!--===================================================-->
                                          <small class="help-block">Seleccione el Departamento o Estado de residencia</small>
                                        </div>
                                      </div>




                                    </div>


                                    <div class="col-lg-4">

                                      <div class="form-group pad-ver">
                                      <label class="col-md-3 control-label">Ciudad Residencia</label>
                                        <div class="col-md-9">
                                          <select data-placeholder="Seleccione una ciudad" name="ciudadResidenciaSocilitado" id="ciudadResidenciaSocilitado" tabindex="" size="15">
                                            <?php
                                              $obj = new UsuarioControlador();
                                              echo $obj->retornaOptionCiudad();
                                            ?>
                                          </select>
                                          <!--===================================================-->
                                          <small class="help-block">Seleccione ciudad de residencia</small>
                                        </div>
                                      </div>




                                      <!--Email Input-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="direccionResidenciaSolicitado">Dirección de Residencia</label>
                                        <div class="col-md-9">
                                          <input type="text" id="direccionResidenciaSolicitado" name="direccionResidenciaSolicitado" class="form-control" placeholder="Correo electrónico" >
                                          <small class="help-block">Por favor ingrese dirección</small>
                                        </div>
                                      </div>

                                      <!--Email Input-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="telefonoSolicitado">Teléfono</label>
                                        <div class="col-md-9">
                                          <input type="text" id="telefonoSolicitado" name="telefonoSolicitado" class="form-control" placeholder="Teléfono" >
                                          <small class="help-block">Por favor ingrese el teléfono</small>
                                        </div>
                                      </div>


                                      <!--Email Input-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="correoElectronicoSolicitado">Correo electrónico</label>
                                        <div class="col-md-9">
                                          <input type="mail" id="correoElectronicoSolicitado" name="correoElectronicoSolicitado" class="form-control" placeholder="Correo electrónico" >
                                          <small class="help-block">Por favor ingrese su correo electrónico</small>
                                        </div>
                                      </div>

                                      <!--Password-->
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="contraseniaSolicitado">Contraseña</label>
                                          <div class="col-md-9">
                                          <input type="password" id="contraseniaSolicitado" name="contraseniaSolicitado" class="form-control" placeholder="Contraseña" >
                                          <small class="help-block">Por favor ingrese su contraseña</small>
                                        </div>
                                      </div>

                                      </div>



                                      <div class="form-group">
                                        <input type="submit" name="enviarInformacion" class="btn btn-block btn-info" value="Registrar Usuario">
                                      </div>
                                    </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!--===================================================-->
                      <!--End of panel with tabs-->
                    </div>


          <div class="row">






                        <!-- TABLA USUARIOS-->

                        <!-- FIN TABLA USUARIOS-->



          </div>


                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->



            <?php
              require_once("modulosTransversales/menuLateralDerecho.php");
            ?>

            <?php
              require_once("modulosTransversales/menuLateralIzquierdo.php");
            ?>


        </div>



        <?php
          require_once("modulosTransversales/foot.php");
          require_once("modulosTransversales/botonIrArriba.php");
        ?>



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->





    <?php
      require_once("modulosTransversales/ScriptsFoot.php");
    ?>
    <!-- NECESARIOS PARA SELECT 2 -->
    <!--Chosen [ OPTIONAL ]-->
    <script src="../plugins/chosen/chosen.jquery.min.js"></script>

    <!--Form Component [ SAMPLE ]-->
    <script src="../js/demo/form-component.js"></script>



    <!-- NECESARIOS PARA TABLA BOOTSTRAP -->
    <!--Bootstrap Table Sample [ SAMPLE ]-->
    <script src="../js/demo/tables-bs-table.js"></script>

    <!--Bootstrap Table [ OPTIONAL ]-->
    <script src="../plugins/bootstrap-table/bootstrap-table.min.js"></script>









</body>
</html>
