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
          $company = new EmpresaControlador();
        ?>
        <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
              Gestión de Empresas
            </div>
            <div class="panel-body">

<<<<<<< HEAD
            <div class="row alignRight">
            <button type="button" class="btn btn-default" > <!-- data-toggle="modal" data-target="#myModal"-->
                <a href="formCompany.php"><span class="glyphicon glyphicon-plus"></span> Agregar Empresa</a>
            </button>
=======
            <div class="row alignLeft">
            <form action="adminCompany.php" method="post"> 
            <div class="col-md-3">
              <div class="form-group">
                  <label for="nameCom">Nombre:</label> <input class="form-control" type="text" name="nameCom" placeholder="Nombre empresa" value=""/>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label for="descCom">Descripcion:</label> <input class="form-control" type="text" name="descCom" placeholder="Descripcion empresa" value=""/>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label for="category_company">Empresa:</label>
                  <select class="form-control" name="category_company" requires>
                      <option value="0"></option>
                      <option value="1">Alimentos preparados para consumo inmediato</option>
                      <option value="2">Productos para el cuidado personal</option>
                      <option value="3">Productos de limpieza</option>
                      <option value="4">Productos para el Hogar</option>
                      <option value="5">Tecnología</option>
                      <option value="6">Producto artesanales</option>
                      <option value="7">Productos de entretenimiento y cultura</option>
                  </select>
                </div>
            </div>
            <div class="col-md-2">
                  <input type="submit" name="buscarEmp" value="Buscar Empresa" class="btn btn-primary"/>
            </div>
              </div>
            </div>
            </form>
>>>>>>> 90172076168c9c859b69feeaae107cb6fb465961
            </div>

            <?php
              if(isset($_POST['buscarEmp'])  == "Buscar Empresa"){
                $dataFilt = $company->consultarEmpresaLike($_POST);
              }
            ?>

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
      $emp = $company->consultarEmpresa();

      if($dataFilt == ""){
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

        if(isset($_POST['delete'])  == "Eliminar"){
          $company->inactivaEmpresa($_POST);
        }

        if(isset($_POST['modify'])  == "Modificar"){
          $editar= $_POST['deleteId'];
          echo "<script> window.location='formCompany.php?id=".$editar."' </script>";
        }
      }  else {
        foreach ($dataFilt as $key) {
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

        if(isset($_POST['delete'])  == "Eliminar"){
          $company->inactivaEmpresa($_POST);
        }

        if(isset($_POST['modify'])  == "Modificar"){
          $editar= $_POST['deleteId'];
          echo "<script> window.location='formCompany.php?id=".$editar."' </script>";
        }
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