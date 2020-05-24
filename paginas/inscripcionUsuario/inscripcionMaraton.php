<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inscripción | Media Maratón Internacional</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">



    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">


    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
              <div class="col-lg-4">

                <hr class="new-section-sm bord-no">
                <div class="col-md-12 eq-box-md text-center box-vmiddle-wrap bord-hor">

                    <!-- Simple Promotion Widget -->
                    <!--===================================================-->
                    <div class="box-vmiddle pad-all">
                        <h3 class="text-main">Inscripción Media Maratón Internacional</h3>
                        <div class="pad-ver">
                            <i class="demo-pli-bag-coins icon-5x"></i>
                        </div>
                        <div>
                          <img src="img/LogoMedia.png" width="100%">
                        </div><br>
                        <div>
                          <!--Warning Panel-->
                            <!--===================================================
                            <div class="panel panel-bordered panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Antes de realizar el pago tenga en cuenta</h3>
                                </div>
                                <div class="panel-body">
                                    <p>El costo de la inscripción a la Media Maratón Internacional es de <a class="btn-link text-semibold add-tooltip" data-toggle="tooltip" href="#" data-original-title="Another tooltip"> 55.000</a> pesos colombianos, sin embargo a este valor se agrega un costo de <a class="btn-link text-semibold add-tooltip" data-toggle="tooltip" href="#" data-original-title="Another tooltip"> 3.000</a> pesos colombianos correspondientes a los sobrecostos generados por el pago a través de internet, por lo que el costo final de inscripción es de <a class="btn-link text-semibold add-tooltip" data-toggle="tooltip" href="#" data-original-title="Another tooltip"> 58.000</a> pesos colombianos.</p>
                                </div>
                            </div>
                            ===================================================-->
                            <!--End Primary Panel-->
                        </div>

                        <p class="pad-btn text-sm">Para registrarse en la Media Maraton Internacional diligencie el siguiente formulario.</p>
                        <br>
                        <a class="btn btn-lg btn-primary" href="https://imer.gov.co/sitio/media-maraton-internacional/">Regresar</a>
                    </div>
                    <!--===================================================-->

                </div>

              </div>


					    <div class="col-lg-8">



					        <hr class="new-section-sm bord-no">
					        <h4 class="text-main pad-btm bord-btm">Formulario de Registro</h4>

					        <div class="panel">

					            <!-- Form wizard with Validation -->
					            <!--===================================================-->
					            <div id="demo-bv-wz">
					                <div class="wz-heading pad-top">

					                    <!--Nav-->
					                    <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
                                  <li class="col-xs-3">
                                      <a data-toggle="tab" href="#demo-bv-tab1">
                                          <span class="text-danger"><i class="demo-pli-male icon-2x"></i></span>
                                          <p class="text-semibold mar-no">Información Personal</p>
                                      </a>
                                  </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab2">
					                                <span class="text-warning"><i class="demo-pli-home icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Inscripción</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab3">
					                                <span class="text-info"><i class="demo-pli-information icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Clausula</p>
					                            </a>
					                        </li>
					                        <li class="col-xs-3">
					                            <a data-toggle="tab" href="#demo-bv-tab4">
					                                <span class="text-success"><i class="demo-pli-medal-2 icon-2x"></i></span>
					                                <p class="text-semibold mar-no">Realizar Pago</p>
					                            </a>
					                        </li>
					                    </ul>
					                </div>

					                <!--progress bar-->
					                <div class="progress progress-xs">
					                    <div class="progress-bar progress-bar-primary"></div>
					                </div>


					                <!--Form-->
					                <form id="demo-bv-wz-form" class="form-horizontal" method="post" action="../../validacionesBack/validaInscripcionFront.php">
					                    <div class="panel-body">
					                        <div class="tab-content">



                                      <!--First tab-->
                                      <div id="demo-bv-tab1" class="tab-pane">
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Tipo de Documento</label>
                                            <div class="col-lg-7">
                                                <!--<input type="text" placeholder="Seleccione un tipo de documento" name="tipoDocumentoSolicitado" class="form-control">-->
                                                <select name="tipoDocumentoSolicitado" required>
                                                  <option></option>
                                                  <option value="1">Cédula de Ciudadanía</option>
                                                  <option value="2">Cédula de Extranjería</option>
                                                  <option value="3">Pasaporte</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Documento</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Número de documento" name="documentoSolicitado" class="form-control" required>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Nombres</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Nombres completos" name="nombreSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Apellidos</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Apellidos Completos" name="apellidoSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Género</label>
                                            <div class="col-lg-7">
                                                <!--<input type="text" placeholder="Genero" name="generoSolicitado" class="form-control">-->
                                                <select name="generoSolicitado" required>
                                                  <option></option>
                                                  <option value="1">Masculino</option>
                                                  <option value="2">Femenino</option>
                                                  <option value="3">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Fecha Nacimiento</label>
                                            <div class="col-lg-7">
                                                <input type="date" placeholder="Fecha de nacimiento" name="fechaNacimientoSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Tipo de Sangre</label>
                                            <div class="col-lg-7">
                                                <!--<input type="text" placeholder="Seleccione un tipo de sangre" name="tipoSangreSolicitado" class="form-control">-->
                                                <select name="tipoSangreSolicitado" required>
                                                  <option></option>
                                                  <option value="1">A+</option>
                                                  <option value="2">A-</option>
                                                  <option value="3">B+</option>
                                                  <option value="4">B-</option>
                                                  <option value="5">AB+</option>
                                                  <option value="6">AB-</option>
                                                  <option value="7">O+</option>
                                                  <option value="8">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">País de Residencia</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Ingrese un país de residencia" name="paisResidenciaSolicitado" class="form-control">
                                                <!--<select name="paisResidenciaSolicitado" required>
                                                  <option></option>
                                                  <option value="1">Colombia</option>
                                                  <option value="2">Venezuela</option>
                                                  <option value="3">Otro</option>
                                                </select>
                                                -->
                                            </div>
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Estado de Residencia</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Seleccione un estado/departamento de residencia" name="estadoResidenciaSolicitado" class="form-control">
                                                <select name="estadoResidenciaSolicitado"required>
                                                  <option></option>
                                                  <option value="1">Antioquia</option>
                                                  <option value="2">Risaralda</option>
                                                  <option value="3">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        -->
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Ciudad de Residencia</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Ingrese la ciudad de residencia" name="ciudadResidenciaSocilitado" class="form-control">
                                                <!--<select name="ciudadResidenciaSocilitado" required>
                                                  <option></option>
                                                  <option value="1">Rionegro</option>
                                                  <option value="2">La Ceja</option>
                                                  <option value="3">Otro</option>
                                                </select>
                                                -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Dirección</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Dirección de residencia" name="direccionResidenciaSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Teléfono</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Teléfono fijo o celular" name="telefonoSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Correo Electrónico</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Correo electrónico" name="correoElectronicoSolicitado" class="form-control" required>
                                            </div>
                                        </div>


                                      </div>

					                            <!--Second tab-->
					                            <div id="demo-bv-tab2" class="tab-pane fade">

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Carrera</label>
                                            <div class="col-lg-7">
                                                <!--<input type="text" placeholder="Seleccione una carrera" name="carreraSolicitada" class="form-control">-->
                                                <select name="carreraSolicitada" required>
                                                  <option></option>
                                                  <option value="1">Media Maratón Internacional</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Categoría</label>
                                            <div class="col-lg-7">
                                                <!--<input type="text" placeholder="Ingrese su categoría" name="categoriaSolcitado" class="form-control" required>-->
                                                <select name="categoriaSolicitado" required>

                                                    <option></option>

                                                  <optgroup label="DISTANCIA: 21K">
                                                    <option value="1">Hombre - Elite 20 a 39 años</option>
                                                    <option value="2">Hombre - Discapacidad</option>
                                                    <option value="4">Hombre - Veteranos - 40 a 49 años</option>
                                                    <option value="5">Hombre - Veteranos - 50 años o más</option>
                                                    <option value="6">Mujer - Elite 20 a 39 años</option>
                                                    <option value="7">Mujer - Discapacidad</option>
                                                    <option value="9">Mujer - Veteranos</option>

                                                  </optgroup>
                                                  <optgroup label="DISTANCIA: 10.5K">
                                                    <option value="10">Hombre - Abierta</option>
                                                    <option value="11">Mujer - Abierta</option>

                                                  </optgroup>
                                                  <optgroup label="DISTANCIA: 5.5K">
                                                    <option value="12">Hombre - Abierta</option>
                                                    <option value="13">Mujer - Abierta</option>
                                                  </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Equipo o Club</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Ingrese su equipo" name="equipoSolicitado" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">EPS</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Ingrese su EPS" name="epsSolicitada" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Nombre Contacto Emergencia</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Nombre del contacto" name="nombreContactoEmergenciaSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Teléfono Contacto Emergencia</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Teléfono de contacto" name="telefonoContactoEmergenciaSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        <!--<div class="form-group">
                                            <label class="col-lg-3 control-label">Parentesco Contacto Emergencia</label>
                                            <div class="col-lg-7">
                                                <input type="text" placeholder="Parentesco con el contacto" name="parentescoContactoEmergenciaSolicitado" class="form-control" required>
                                            </div>
                                        </div>
                                        -->

                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Talla de Camisa</label>
                                            <div class="col-lg-7">
                                                <!--<input type="text" placeholder="Talla de camisa" name="tallaCamisaSolicitada" class="form-control" required>-->
                                                <select name="tallaCamisaSolicitada" required>
                                                  <option></option>
                                                  <option value="16">16</option>
                                                  <option value="S">S</option>
                                                  <option value="M">M</option>
                                                  <option value="L">L</option>
                                                  <option value="XL">XL</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Aqui deberia ir el boton -->


					                            </div>

					                            <!--Third tab-->
					                            <div id="demo-bv-tab3" class="tab-pane">

                                        <!--Put the scrollbar inside the panel-->
                <!--===================================================-->
                <div class="panel">

                    <!--Panel heading-->
                    <div class="panel-heading">
                        <h3 class="panel-title">TÉRMINOS Y CONDICIONES DE PARTICIPACIÓN EN LA CARRERA MEDIA MARATÓN INTERNACIONAL “CIUDAD SANTIAGO DE ARMA DE RIONEGRO”</h3>
                    </div>

                    <!--Panel body-->
                    <div class="panel-body">
                        <div class="nano" style="height: 150px">
                            <div class="nano-content">

                                    <p>
                                    DECLARACIÓN DE EXONERACIÓN DE RESPONSABILIDADES
                                    </p>
                                    Declaro de manera libre, espontánea y voluntaria que he decidido asistir bajo mi propio riesgo y responsabilidad a la carrera atlética “MEDIA MARATÓN CIUDAD SANTIAGO DE ARMA DE RIONEGRO” la cual se realizará el día 09 de junio del año 2019, sobre diferentes sectores del municipio de Rionegro
                                    Por tal razón habiendo leído esta declaración, conociendo los riesgos y considerando que los acepto por el hecho de participar en la carrera, yo, en mi nombre y en el de cualquier persona que actúe en mi representación, soy consciente de los siguientes términos y condiciones:
                                  </p>
                                  <p>
                                    1.	Estoy en perfectas condiciones físicas, mentales y de salud óptimas, así como adecuadamente informado(a) que debo estar entrenado para participar en las diferentes categorías y recorridos programados, así mismo, manifiesto que acatare las recomendaciones de la organización del evento, en lo referente a someterme a una estricta evaluación médica previa; de igual manera informo que no padezco ninguna enfermedad, lesión y/o incapacidad y/o condición que me inhabilite para participar en la carrera, ni que haga aconsejable no participar en la misma.
                                  </p>
                                  <p>
                                    2.	Estoy enterado de las recomendaciones deportivas y médicas que debo adoptar para participar apropiadamente en la carrera, teniendo en cuenta mi condición física y circunstancias personales.
                                  </p>
                                  <p>
                                    3.	Tengo pleno conocimiento que si a la fecha establecida para la realización del evento presento alguna de las siguientes condiciones no podré participar en la misma, ni podré solicitar la devolución del dinero correspondiente al valor de la inscripción: estado de embarazo, estado de embriaguez, bajo el efecto de sustancias psicoactivas, enfermedades del corazón, enfermedades respiratorias, utilización de muletas, yesos y/o prótesis, situaciones o motivos personales y/o laborales y todas aquellas condiciones que inhabiliten mi participación, en caso de participar en algunas de estas circunstancias o en otras similares libero de toda responsabilidad a la organización, pues participo bajo mi propia responsabilidad. aceptaré cualquier decisión de la organización sobre mi participación en la carrera.
                                  </p>
                                  <p>
                                    4.	Asumo todos los riesgos asociados con mi participación en la carrera, relacionados por: mis antecedentes médicos o clínicos, por el contacto con los participantes, deshidratación, las consecuencias del clima, tales como temperatura y/o humedad, tránsito vehicular y condiciones del camino, y en general todo el riesgo que declaro conocido y valorado por mí, en razón a que la actividad durante el desarrollo de la carrera se encontrará bajo mi control y ejecución exclusiva como participante. Así mismo acredito que me encuentro afiliado(a) a seguridad social en salud.
                                  </p>
                                  <p>
                                    5.	Exonero a los organizadores de la carrera: IMER y Alcaldía de Rionegro, Ligas de Atletismo de Antioquia, Centro Comerciales aliados, así como los demás socios, aliados, y/o patrocinadores de la carrera, de cualquier responsabilidad derivada de daños o pérdida de bienes (incluyendo extravío y/o hurto de los mismos), daños o lesiones personales, y/o perjuicios de cualquier índole que directa o indirectamente surjan de mi participación en este evento.
                                  </p>
                                  <p>
                                    6.	Así mismo, acepto que los organizadores de la carrera, podrán suspender o cancelar el evento por cualquier causa, incluyendo sin limitar, cuestiones asociadas al clima, orden público, actos vandálicos, o aquellas que pongan en riesgo la integridad de los participantes, situación por la cual también exonero a los anteriormente mencionados de cualquier responsabilidad asociada.
                                  </p>
                                  <p>
                                    7.	La premiación de la carrera será definida por el tiempo pistola, NO por tiempo chip. El tiempo pistola es el tiempo medido desde el inicio de la carrera hasta la meta. El tiempo chip será solo para fines informativos y/o estadísticos.
                                  </p>
                                  <p>
                                    8.	Será mi responsabilidad conocer muy bien el recorrido de la carrera en la que participaré, por lo tanto, eximo de toda responsabilidad a todos los organizadores o involucrados en el evento, en caso de perderme en la ruta, o tomar la ruta incorrecta. En este caso no habrá lugar a reclamación de premios, posiciones o tiempos registrados.
                                  </p>
                                  <p>
                                    9.	Entiendo y acepto que el día de la carrera es obligatorio portar la camiseta oficial del evento y el número de competencia en la parte delantera.
                                    Declaro que conozco y he leído el reglamento y la declaración de exoneración de la carrera publicado en cualquiera de los medios de inscripción (físico o virtual) y entiendo que la inscripción a la carrera me da el derecho a participar en la misma.
                                    Mediante está inscripción directa hecha por mi o interpuesta por otra persona, acepto los términos y condiciones establecidos en el presente documento, los cuales he entendido y aceptado voluntariamente.
                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--===================================================-->
                <!--End scrollbar inside the panel-->

                                          <div class="form-group">
                                              <label class="col-lg-3 control-label">Acepta Términos</label>
                                              <div class="col-lg-7">
                                                  <input type="checkbox" name="teminosSolicitados" class="form-control" value="1" required>
                                              </div>
                                          </div>
					                            </div>



					                            <!--Fourth tab-->
					                            <div id="demo-bv-tab4" class="tab-pane  mar-btm text-center">
					                                <h4>Falta poco para estar inscrito</h4>
                                          <!-- Warning Alert -->
                  					                <!--===================================================-->
                  					                <!-- <div class="alert alert-warning">
                  					                    <strong>Recuerde!</strong> <p>El costo de la inscripción a la Media Maratón Internacional es de <a class="btn-link text-semibold add-tooltip" data-toggle="tooltip" href="#" data-original-title="Another tooltip"> 55.000</a> pesos colombianos, sin embargo a este valor se agrega un costo de <a class="btn-link text-semibold add-tooltip" data-toggle="tooltip" href="#" data-original-title="Another tooltip"> 3.000</a> pesos colombianos correspondientes a los sobrecostos generados por el pago a través de internet, por lo que el costo final de inscripción es de <a class="btn-link text-semibold add-tooltip" data-toggle="tooltip" href="#" data-original-title="Another tooltip"> 58.000</a> pesos colombianos.</p>
                  					                </div>-->


                                            <!--Danger Panel-->
                                            <!--===================================================-->
                                            <div class="panel panel-bordered panel-danger">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Entregas de Kit de Carrera</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <p>Reclama tu kit de carrera el sábado 8 de junio en el Centro Comercial San Nicolás de Rionegro entre las 10:00 A.M. y 6:00 P.M.</p>
                                                </div>
                                            </div>
                                            <!--===================================================-->
                                            <!--End Danger Panel-->
                                      </div>
					                        </div>
					                    </div>

					                    <!--Footer button-->
					                    <div class="panel-footer text-right">
					                        <div class="box-inline">
					                            <button type="button" class="previous btn btn-primary">Anterior</button>
					                            <button type="button" class="next btn btn-primary">Siguiente</button>
                                      <input type="submit" class="finish btn btn-warning" disabled value="Guardar y Pagar"/>
					                            <!--<button type="button" class="finish btn btn-warning" disabled>Fin</button>-->
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





        <!-- Botón de Ir Arriba -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- Fin Botón de Ir Arriba -->





    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>




    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/nifty-demo.min.js"></script>


    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src="plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>


    <!--Form Wizard [ SAMPLE ]-->
    <script src="js/demo/form-wizard.js"></script>




</body>
</html>
