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
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Iniciar Sesión</h3>
                    <form action="../controller/autenticator.php" method="post">
                        <div class="form-group">
                            <input name="mail" type="text" class="form-control" placeholder="Correo Electrónico *" require />
                        </div>
                        <div class="form-group">
                            <input name="pass" type="password" class="form-control" placeholder="Contraseña *" require />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Ingresar" />
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
                    <form action="..controller/singUp.php" method="post">
                        <div class="form-group">
                            <input name="document" type="text" class="form-control" placeholder="Documento *" require />
                        </div>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Nombre *" require />
                        </div>
                        <div class="form-group">
                            <input name="mail" type="text" class="form-control" placeholder="Mail *" require />
                        </div>
                        <div class="form-group">
                            <input name="pass" type="password" class="form-control" placeholder="Contraseña *" require />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Registrarse" />
                        </div>
                        <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
</body>
</html>