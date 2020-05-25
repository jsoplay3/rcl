<?php
  include('../controller/modSession.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registro de Empresas</title>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            require_once('../controller/EmpresaControlador.php');
            require('menu/menu.php');
            $company = new EmpresaControlador();
            if(isset($_GET['id'])){
              $data = $company->consultarEmpresaPorId($_GET['id']);
            }
        ?>
        <div class="container">

          
          <div class="panel panel-primary">
            <div class="panel-heading">
              Registro de Empresas
            </div>
            <div class="panel-body">
              <form action="formCompany.php" method="post" role="form" enctype="multipart/form-data">
                
                <div class="row">
            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nit">Nit:</label>
                        <input class="form-control" type="text" name="nit" placeholder="000000000-1" 
                        value="<?php echo $data['NIT']; ?>" required/>
                        </div>
                    </div>
                
            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name_company">Nombre:</label>
                            <input class="form-control" type="text" name="name_company" placeholder="Nombre de la empresa" required/>
                        </div>
                    </div>
            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address_company">Dirección:</label>
                            <input class="form-control" type="text" name="address_company" placeholder="Dirección de la empresa"/>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone_company">Teléfono:</label>
                        <input class="form-control" type="tel" name="phone_company" placeholder="555-55-55"/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="cel_company">Celular:</label>
                        <input class="form-control" type="tel" name="cel_company" placeholder="333-333-33-33" required/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="mail_company">Correo electrónico:</label>
                        <input class="form-control" type="email" name="mail_company" placeholder="empresa@empresa.com" required/>
                    </div>
                  </div>
                </div>
            
                <div class="row">
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="contact_company">Contacto Encargado:</label>
                        <input class="form-control" type="text" name="contact_company" placeholder="Nombre del propietario"/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="logo_url">Logo:</label><span> Medidas: 300px x 300px JPG/PNG</span>
                        <input class="form-control" type="file" name="logo_url" required/>
                        <br/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="web_url">Sitio Web:</label>
                        <input class="form-control" type="url" name="web_url" placeholder="Nombre del propietario"/>
                    </div>
                  </div>
                </div>
            
                <div class="row">
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="fb_url">FaceBook:</label>
                        <input class="form-control" type="url" name="fb_url" placeholder="Nombre del propietario"/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="tw_url">Twitter:</label>
                        <input class="form-control" type="url" name="tw_url" placeholder="Nombre del propietario"/>
                    </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="ins_url">Instagram:</label>
                          <input class="form-control" type="url" name="ins_url" placeholder="Nombre del propietario"/>
                      </div>
                  </div>

                </div>
            

                <div class="row">
                  
            
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="yt_url">Youtube:</label>
                          <input class="form-control" type="url" name="yt_url" placeholder="Nombre del propietario"/>
                      </div>
                  </div>
            
                  <div class="col-md-4">
                      <label for="category_company">Sector Económico</label>
                      <select class="form-control" name="category_company" requires>
                          <option></option>
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
            
                <div class="form-group">
                  <div class="form-group">
                    <label for="description_company">Descripción del la compañia:</label>
                    <textarea class="form-control" rows="5" name="description_company" required></textarea>
                </div>
                </div>
            
                <div class="form-group">
                    <label for="product_description">Descripción del Producto</label>
                    <textarea class="form-control" rows="5" name="product_description"></textarea>
                </div>
            
                <input type="submit" name="enviar" value="Registrar Empresa" class="btn btn-success btn-block"/>
            </form>

            <?php
            if(isset($_POST['enviar']) == "Registrar Empresa"){
              $company->validarEmpresa($_POST);
            }
            ?>
            </div>
          </div>
        </div>
    </body>
    
</html>
