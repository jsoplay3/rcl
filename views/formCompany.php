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
              $data = $company->consultarEmpresaPorIdOnly($_GET['id']);
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
                        value="<?php echo isset($data['NIT'])?$data['NIT']:''; ?>" required/>
                        </div>
                    </div>
                
            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name_company">Nombre:</label>
                            <input class="form-control" type="text" name="name_company" placeholder="Nombre de la empresa"
                            value="<?php echo isset($data['NAME_COMPANY'])?$data['NAME_COMPANY']:''; ?>" required/>
                        </div>
                    </div>
            
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address_company">Dirección:</label>
                            <input class="form-control" type="text" name="address_company" placeholder="Dirección de la empresa"
                            value="<?php echo isset($data['ADDRESS_COMPAMY'])?$data['ADDRESS_COMPAMY']:''; ?>"/>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone_company">Teléfono:</label>
                        <input class="form-control" type="tel" name="phone_company" placeholder="555-55-55"
                        value="<?php echo isset($data['PHONE_COMPANY'])?$data['PHONE_COMPANY']:''; ?>"/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="cel_company">Celular:</label>
                        <input class="form-control" type="tel" name="cel_company" placeholder="333-333-33-33" required
                        value="<?php echo isset($data['CEL_COMPANY'])?$data['CEL_COMPANY']:''; ?>"/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="mail_company">Correo electrónico:</label>
                        <input class="form-control" type="email" name="mail_company" placeholder="empresa@empresa.com"
                        value="<?php echo isset($data['MAIL_COMPANY'])?$data['MAIL_COMPANY']:''; ?>" required/>
                    </div>
                  </div>
                </div>
            
                <div class="row">
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="contact_company">Contacto Encargado:</label>
                        <input class="form-control" type="text" name="contact_company" placeholder="Nombre del propietario"
                        value="<?php echo isset($data['CONTACT_COMPANY'])?$data['CONTACT_COMPANY']:''; ?>"/>
                    </div>
                  </div>
            
                  <?php if(!isset($data)){ $logoReq = 'required'; } else {$logoReq = '';} ?>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="logo_url">Logo:</label><span> Medidas: 728px x 458px Formato: PNG</span>
                        <input class="form-control" type="file" name="logo_url" <?php echo $logoReq; ?>/>
                        <br/>
                    </div>
                  </div>
                  

            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="web_url">Sitio Web:</label>
                        <input class="form-control" type="url" name="web_url" placeholder="Nombre del propietario"
                        value="<?php echo isset($data['WEB_URL'])?$data['WEB_URL']:''; ?>"/>
                    </div>
                  </div>
                </div>
            
                <div class="row">
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="fb_url">FaceBook:</label>
                        <input class="form-control" type="url" name="fb_url" placeholder="Nombre del propietario"
                        value="<?php echo isset($data['FB_URL'])?$data['FB_URL']:''; ?>"/>
                    </div>
                  </div>
            
                  <div class="col-md-4">
                    <div class="form-group">
                        <label for="tw_url">Twitter:</label>
                        <input class="form-control" type="url" name="tw_url" placeholder="Nombre del propietario"
                        value="<?php echo isset($data['TW_URL'])?$data['TW_URL']:''; ?>"/>
                    </div>
                  </div>

                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="ins_url">Instagram:</label>
                          <input class="form-control" type="url" name="ins_url" placeholder="Nombre del propietario"
                          value="<?php echo isset($data['INS_URL'])?$data['INS_URL']:''; ?>"/>
                      </div>
                  </div>

                </div>
            

                <div class="row">
                  
            
                  <div class="col-md-4">
                      <div class="form-group">
                          <label for="yt_url">Youtube:</label>
                          <input class="form-control" type="url" name="yt_url" placeholder="Nombre del propietario"
                          value="<?php echo isset($data['YT_URL'])?$data['YT_URL']:''; ?>"/>
                      </div>
                  </div>
            
                  <div class="col-md-4">
                      <label for="category_company">Sector Económico</label>
                      <?php // isset($data['CATEGORY_COMPANY'])?$data['CATEGORY_COMPANY']:''; ?> 
                      <!-- selected="selected" -->
                      <select class="form-control" name="category_company" requires>
                          <option></option>
                          <option value="1" <?php echo isset($data['CATEGORY_COMPANY']) == 1? $select='selected':''?>>Alimentos preparados para consumo inmediato</option>
                          <option value="2" <?php echo isset($data['CATEGORY_COMPANY']) == 2? $select='selected':''?>>Productos para el cuidado personal</option>
                          <option value="3" <?php echo isset($data['CATEGORY_COMPANY']) == 3? $select='selected':''?> >Productos de limpieza</option>
                          <option value="4" <?php echo isset($data['CATEGORY_COMPANY']) == 4? $select='selected':''?>>Productos para el Hogar</option>
                          <option value="5" <?php echo isset($data['CATEGORY_COMPANY']) == 5? $select='selected':''?>>Tecnología</option>
                          <option value="6" <?php echo isset($data['CATEGORY_COMPANY']) == 6? $select='selected':''?>>Producto artesanales</option>
                          <option value="7" <?php echo isset($data['CATEGORY_COMPANY']) == 7? $select='selected':''?>>Productos de entretenimiento y cultura</option>
                          <option value="8" <?php echo isset($data['CATEGORY_COMPANY']) == 8? $select='selected':''?>>Ropa y Calzado</option>
                          <option value="9" <?php echo isset($data['CATEGORY_COMPANY']) == 9? $select='selected':''?>>Publicidad y Medios</option>
                          <option value="10" <?php echo isset($data['CATEGORY_COMPANY']) == 10? $select='selected':''?>>Alimentos Procesados</option>
                          <option value="10" <?php echo isset($data['CATEGORY_COMPANY']) == 11? $select='selected':''?>>Otros</option>
                      </select> 
                  </div>
                  
                  <?php if($_SESSION['TYPE'] == 1){?>
                  <div class="col-md-4">
                      <label for="status_company">Estado</label>
                      <select class="form-control" name="status_company" requires>
                          <option></option>
                          <option value="0" <?php echo isset($data['ESTADO_EMPRESA']) == 0? $select='selected':''?>>Inactivo</option>
                          <option value="1" <?php echo isset($data['ESTADO_EMPRESA']) == 1? $select='selected':$select='selected'?>>Activo</option>
                      </select> 
                  </div>
                  <?php } ?>

                </div>
            
                <div class="form-group">
                  <div class="form-group">
                    <label for="description_company">Descripción del la compañia:</label>
                    <textarea class="form-control" rows="5" name="description_company"required><?php echo isset($data['DESCRIPTION_COMPANY'])?$data['DESCRIPTION_COMPANY']:''; ?></textarea>
                </div>
                </div>
            
                <div class="form-group">
                    <label for="product_description">Descripción del Producto <span>Utilice etiquetas HTML si lo desea</span></label>
                    <textarea class="form-control" rows="5" name="product_description"><?php echo isset($data['PRODUCT_DESCRIPTION'])?$data['PRODUCT_DESCRIPTION']:''; ?></textarea>
                </div>
            
                <?php if(!isset($data)){?>
                <input type="submit" name="enviar" value="Registrar Empresa" class="btn btn-success btn-block"/>
                <?php } ?>

                <?php if(isset($data)){?>
                <input type="submit" name="enviarMod" value="Modificar Empresa" class="btn btn-success btn-block"/>
                <?php } ?>

            </form>

            <?php
            if(isset($_POST['enviar']) == "Registrar Empresa"){
              $company->validarEmpresa($_POST);
            }

            if(isset($_POST['enviarMod']) == "Modificar Empresa"){
              $company->actualizarEmpresa($_POST);
            }

            ?>
            </div>
          </div>
        </div>
    </body>
    
</html>