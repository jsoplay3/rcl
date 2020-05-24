<!DOCTYPE html>
<html>
    <head>
        <title>tbl_empresas</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../utils/styles/style.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            require('menu/menu.php')
        ?>
        <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
              Gestión de Empresas
            </div>
            <div class="panel-body">

            <div class="row alignRight">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-plus"></span> Agregar Empresa
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
      <tr>
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
      </tr>
      
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