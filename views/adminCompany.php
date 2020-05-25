<?php
  include('../controller/modSession.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gestion Empresas</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../utils/styles/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
          require_once('../controller/EmpresaControlador.php');
          require('menu/menu.php');
        ?>
        <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
              Gestión de Empresas
            </div>
            <div class="panel-body">

            <div class="row alignRight">
            <button type="button" class="btn btn-default" > <!-- data-toggle="modal" data-target="#myModal"-->
                <a href="formCompany.php"><span class="glyphicon glyphicon-plus"></span> Agregar Empresa</a>
            </button>
            </div>

            <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Sector</th>
        <th>Celular</th>
        <th>Mail</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $empresa = new EmpresaControlador();
      $emp = $empresa->consultarEmpresa();
      foreach ($emp as $key) {
        echo "<tr>
        <td>".$key['NAME_COMPANY']."</td>
        <td>".$key['CATEGORY_COMPANY']."</td>
        <td>".$key['CEL_COMPANY']."</td>
        <td>".$key['MAIL_COMPANY']."</td>
        <td class='alignRight'>
            <form action='adminCompany.php' method='post'>
            
            <input type='hidden' name='deleteId' value='".$key['ID']."'/>
            <input type='submit' name='delete' value='Eliminar' class='glyphicon-trash'/>
            
            <!--<button type='button' class='btn btn-default'>
                <span class='glyphicon glyphicon-trash'></span>
            </button>-->

            <!--<button type='button' class='btn btn-default'>
                <span class='glyphicon glyphicon-pencil'></span>
            </button>-->

            <input type='submit' name='modify' value='Modificar' class='glyphicon-pencil'/>
            </form>
        </td>
        </tr>
        ";
      }

      $company = new EmpresaControlador();
      if(isset($_POST['delete'])  == "Eliminar"){
        $company->inactivaEmpresa($_POST);
      }

      if(isset($_POST['modify'])  == "Modificar"){
        $editar= $_POST['deleteId'];
        echo "<script> window.location='formCompany.php?id=".$editar."' </script>";
      }

      ?>
      <!-- <tr>
        <td>Exito</td>
        <td>Alimentos</td>
        <td>3005006832</td>
        <td>gerenciaexito@grupo-exito.com</td>
        <td class="alignRight">
            <form action="../controller/deleteCompany.php" method="post">
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-trash"></span>
            </button>
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-pencil"></span>
            </button>
            </form>
        </td>
      </tr>
      <tr>
        <td>Nacional de Chocolates</td>
        <td>Alimentos</td>
        <td>3124569870</td>
        <td>gerencia@lanacho.com</td>
        <td class="alignRight">
        <form action="../controller/deleteCompany.php" method="post">
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-trash"></span>
            </button>
            <button type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-pencil"></span>
            </button>
            </form>
        </td>
      </tr> -->
      
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