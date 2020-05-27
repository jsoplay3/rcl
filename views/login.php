<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../utils/styles/stylesLogin.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="validation/validateUserSignUp.js"></script>
</head>
<body>

<?php
    require_once('../controller/UsuarioControlador.php');
    $usuario = new UsuarioControlador();
?>

<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <div style="text-align:center">
                        <img src="../landing/images/logoRcl.svg" height="60px"/>
                    </div>
                    
                    <h3>Iniciar Sesión</h3>
                    <form action="../controller/autenticator.php" method="post" onsubmit="return validateLogin()">
                        <div class="form-group">
                            <input name="mail" id="mail" type="text" class="form-control" placeholder="Correo Electrónico *" require />
                        </div>
                        <div class="form-group">
                            <input name="pass" id="pass" type="password" class="form-control" placeholder="Contraseña *" require />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Ingresar"/>
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Recuperar Contraseña</a>
                        </div>
                        <div class="form-group">
                            <a href="../landing/index.php" class="ForgetPwd">Regresar a la Página Principal</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Registrarse</h3>
                    <form action="login.php" method="post" onsubmit="return validateUserSignUp()">
                        <div class="form-group">
                            <input name="document" id="document" type="text" class="form-control" placeholder="Documento *" require/>
                        </div>
                        <div class="form-group">
                            <input name="name" id="name" type="text" class="form-control" placeholder="Nombre *" require/>
                        </div>
                        <div class="form-group">
                            <input name="mail" id="mail" type="text" class="form-control" placeholder="Mail *" require/>
                        </div>
                        <div class="form-group">
                            <input name="pass" id="pass" type="password" class="form-control" placeholder="Contraseña *" require/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="regUsuario" value="Registrarse" />
                        </div>
                        <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                    <?php
                        if(isset($_POST['regUsuario']) == "Registrarse"){
                            $usuario->validarUsuario($_POST);
                          }
                    ?>
                </div>
            </div>
        </div>
</body>
</html>