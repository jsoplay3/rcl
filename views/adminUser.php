<!DOCTYPE html>
<html>
    <head>
        <title>tbl_usuarios</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../utils/styles/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
          require_once('../controller/USuarioControlador.php');
          require('menu/menu.php');
        ?>
        <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
              Gestión de Usuarios
            </div>
            <div class="panel-body">
            <table class="table table-hover">
    <thead>
      <tr>
        <th>Documento</th>
        <th>Nombre</th>
        <th>Correo Electronico</th>
        <th>Estado</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $usuario = new UsuarioControlador();
      $usu = $usuario->consultarUsuarios();

      foreach ($usu as $key) {
        echo "<tr>
        <td>".$key['DOCUMENT']."</td>
        <td>".$key['NAME']."</td>
        <td>".$key['MAIL']."</td>
        <td>".$key['STATE_USER']."</td>
        <td class='alignRight'>
            <form action='adminUser.php' method='post'>
            
            <input type='hidden' name='idUser' value='".$key['ID']."'/>
            <input type='hidden' name='estado' value='".$key['STATE']."'/>";

            if($key['STATE'] == 0){
              echo "<input type='submit' name='modify' value='Activar' class='glyphicon-pencil'/>";
            } else {
              echo "<input type='submit' name='modify' value='Inactivar' class='glyphicon-pencil'/>";
            }
            echo "</form>
        </td>
        </tr>
        ";
      }

      if(isset($_POST['modify'])){
        $usuario->inactivaUsuario($_POST);
        echo "<script> window.location='adminUser.php' </script>";
      }
      ?>     
    </tbody>
  </table>

            </div>
        </div>

        <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

        </div>
    </body>
    
</html>