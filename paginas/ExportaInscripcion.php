<!DOCTYPE html>
<html lang="en">


<head>
  <?php
  header('Content-type:application/xls');
  header('Content-Disposition: attachment; filename=reporteInscripciones.xls');

  require_once("../controller/UsuarioControlador.php");

  require_once("../controller/InscripcionControlador.php");
  require_once("../controller/CarreraControlador.php");

  ?>
                    <table>
                    <thead>
                      <tr>
                        <th data-field="id"   >Fecha/Registro</th>
                        <th  >Documento</th>
                        <th  >Nombres/Apellidos</th>
                        <th  >Fecha Nacimiento</th>
                        <th  >Teléfono</th>
                        <th  >Correo</th>
                        <th  >País Origen</th>
                        <th  >Ciudad Residencia</th>
                        <th  >Tipo Sangre</th>
                        <th  >EPS</th>
                        <th  >Talla</th>
                        <th  >Distancia</th>
                        <th  >Categoria</th>
                        <th  >Equipo</th>
                        <th  >Contacto Emergencia</th>
                        <th  >Teléfono Contacto</th>
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
