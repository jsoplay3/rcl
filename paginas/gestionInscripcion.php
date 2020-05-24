<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Gestió Inscripciones | Imer</title>


  <?php
  require_once("../controller/UsuarioControlador.php");

  require_once("../controller/InscripcionControlador.php");
  require_once("../controller/CarreraControlador.php");

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
                    <li class="active"><a data-toggle="tab" href="#demo-tabs-box-1">Consulta de Inscripciones</a></li>
                    <li><a data-toggle="tab" href="#demo-tabs-box-2">Registrar Inscripción</a></li>
                    <li><a target="_blank" href="https://imer.gov.co/sitio/aplicativoinscripcion/paginas/ExportaInscripcion.php">Exportar Inscritos</a></li>
                    <li><button class="btn btn-default" data-panel="fullscreen">
                      <i class="icon-max demo-psi-maximize-3"></i>
                      <i class="icon-min demo-psi-minimize-3"></i>
                    </button></li>
                    <button class="demo-panel-ref-btn btn btn-default" data-toggle="panel-overlay" data-target="#demo-panel-collapse-default"><i class="demo-psi-repeat-2"></i></button>
                  </ul>

                </div>
                <h3 class="panel-title">Gestión de Inscripciones</h3>
              </div>

              <!--Panel body-->
              <div class="panel-body">

                <!--Tabs content-->
                <div class="tab-content">
                  <div id="demo-tabs-box-1" class="tab-pane fade in active">
                    <table data-toggle="table"
                    data-url=""
                    data-search="true"
                    data-show-refresh="false"
                    data-show-toggle="true"
                    data-show-columns="true"
                    data-sort-name="id"
                    data-page-list="[5, 10, 20]"
                    data-page-size="20"
                    data-pagination="true" data-show-pagination-switch="true">
                    <thead>
                      <tr>
                        <th data-field="id" data-sortable="true" >Fecha/Registro</th>
                        <th data-sortable="true">Documento</th>
                        <th data-sortable="true">Nombres/Apellidos</th>
                        <th data-sortable="true">Fecha Nacimiento</th>
                        <th data-sortable="true">Teléfono</th>
                        <th data-sortable="true">Correo</th>
                        <th data-sortable="true">País Origen</th>
                        <th data-sortable="true">Ciudad Residencia</th>
                        <th data-sortable="true">Tipo Sangre</th>
                        <th data-sortable="true">EPS</th>
                        <th data-sortable="true">Talla</th>
                        <th data-sortable="true">Distancia</th>
                        <th data-sortable="true">Categoria</th>
                        <th data-sortable="true">Equipo</th>
                        <th data-sortable="true">Contacto Emergencia</th>
                        <th data-sortable="true">Teléfono Contacto</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      $obj = new InscripcionControlador();
                      $datIns = $obj->consultarInscripcion();

                      foreach ($datIns as $key) {
                        echo "<tr>
                        <td>".$key['fecha_insc']."</td>
                        <td>".$key['doc_usuario']."</td>
                        <td>".$key['usuario']."</td>
                        <td>".$key['fecha']."</td>
                        <td>".$key['telefono']."</td>
                        <td>".$key['mail']."</td>
                        <td>".$key['pais']."</td>
                        <td>".$key['ciudad']."</td>
                        <td>".$key['sangre']."</td>
                        <td>".$key['eps']."</td>
                        <td>".$key['talla']."</td>
                        <td>".$key['distancia']."</td>
                        <td>".$key['categoria']."</td>
                        <td>".$key['equipo']."</td>
                        <td>".$key['contacto']."</td>
                        <td>".$key['telcontacto']."</td>
                        </tr>";
                      }
                      ?>

                    </tbody>
                  </table>
                </div>
                <div id="demo-tabs-box-2" class="tab-pane fade">

                  <form action="../validacionesBack/validaInscripcionBack.php" class="panel-body form-horizontal form-padding" onsubmit="return validacion()" method="post">
                    <!-- FORMULARIO DE USUARIOS-->

                    <div class="col-lg-4">

                      <!--Text Input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="carreraSolicitada">Carrera</label>
                        <div class="col-md-9">
                          <!-- Default choosen -->
                          <!--===================================================-->
                          <select data-placeholder="Seleccione un tipo" name="carreraSolicitada" id="carreraSolicitada" tabindex="2" size="15">

                            <?php
                            $car = new CarreraControlador();
                            echo $car->retornaOptionCarrera();
                            ?>

                          </select>
                          <!--===================================================-->
                          <small class="help-block">Seleccione una carrera</small>
                        </div>
                      </div>

                      <!--Text Input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="carreraSolicitada">Usuario</label>
                        <div class="col-md-9">
                          <!-- Default choosen -->
                          <!--===================================================-->
                          <select data-placeholder="Seleccione un tipo" name="usuarioSolicitado" id="usuarioSolicitado" tabindex="2" size="15">
                            <?php
                            //ACA jajajajajaj, me queda muy claro
                            $objUsu = new UsuarioControlador();
                            $datosUsu = $objUsu->listarUsuario();
                            echo "<option value=''> </option>";
                            foreach ($datosUsu as $key) {
                              echo "<option value='".$key['usu_documento']."'>".$key['usuario']."</option>";
                            }
                            ?>

                          </select>
                          <!--===================================================-->
                          <small class="help-block">Seleccione un usuario</small>
                        </div>
                      </div>

                      <!--Text Input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="epsSolicitada">EPS</label>
                        <div class="col-md-9">
                          <!-- Default choosen -->
                          <!--===================================================-->
                          <select data-placeholder="Seleccione un tipo" name="epsSolicitada" id="epsSolicitada" tabindex="2" size="15">

                            <?php
                            echo $obj->retornaOptionEps();
                            ?>

                          </select>
                          <!--===================================================-->
                          <small class="help-block">Seleccione una EPS</small>
                        </div>
                      </div>

                    </div>

                    <div class="col-lg-4">

                      <!--Text Input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="nombreContactoEmergenciaSolicitado">Nombre contacto emergencia</label>
                        <div class="col-md-9">
                          <input type="text" id="nombreContactoEmergenciaSolicitado" name="nombreContactoEmergenciaSolicitado" class="form-control" placeholder="Nombre" autocomplete="off">
                          <small class="help-block">Ingrese nombre de contacto</small>
                        </div>
                      </div>

                      <!--Text Input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="telefonoContactoEmergenciaSolicitado">Teléfono contacto emergencia</label>
                        <div class="col-md-9">
                          <input type="text" id="telefonoContactoEmergenciaSolicitado" name="telefonoContactoEmergenciaSolicitado" class="form-control" placeholder="Telefono" autocomplete="off" >
                          <small class="help-block">Ingrese el teléfono de contacto</small>
                        </div>
                      </div>

                      <!--Text Input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="parentescoContactoEmergenciaSolicitado">Parentezco contacto emergencia</label>
                        <div class="col-md-9">
                          <input type="text" id="parentescoContactoEmergenciaSolicitado" name="parentescoContactoEmergenciaSolicitado" class="form-control" placeholder="Parentezco" autocomplete="off">
                          <small class="help-block">Ingrese el parentezco</small>
                        </div>
                      </div>

                    </div>

                    <div class="col-lg-4">

                      <!--Text Input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="tallaCamisaSolicitada">Talla Camisa</label>
                        <div class="col-md-9">
                          <!-- Default choosen -->
                          <!--===================================================-->
                          <select data-placeholder="Seleccione un tipo" name="tallaCamisaSolicitada" id="tallaCamisaSolicitada" tabindex="2" size="15">

                            <?php

                            echo $obj->retornaTallaCamisa();
                            ?>

                          </select>
                          <!--===================================================-->
                          <small class="help-block">Seleccione una talla</small>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label" for="teminosSolicitados">Acepta términos?</label>
                        <div class="col-md-9">
                          <input type="checkbox" id="teminosSolicitados" name="teminosSolicitados" class="form-control"  >
                          <small class="help-block">Acepta términos</small>
                        </div>
                      </div>

                    </div>

                    <div class="col-lg-12">

                      <div class="form-group">
                        <input type="submit" name="enviarInformacion" class="btn btn-block btn-info" value="Realizar Inscripción">
                      </div>
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
<script src="../plugins/bootstrap-table/bootstrap-table.js"></script> <!-- Utilizo no Minificado-->









</body>
</html>
