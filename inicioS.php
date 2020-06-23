<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <title>
            Ecoobamboo | Tienda Virtual
        </title>
       <link href="icon/logo.png" rel="icon" type="image/png"/>
        <!-- Required meta tags  -->
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no " >
                <!-- Bootstrap CSS -->
                <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">
                    <link href="css/estilo.css" rel="stylesheet" type="text/css">
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet prefetch">
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet prefetch">
                                <!-- Optional JavaScript -->
                                <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
                                    <!--libreria para animar registro-->
                                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                    <script crossorigin="anonymous" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" src="https://code.jquery.com/jquery-3.4.1.slim.min.js">
                                    </script>
                                    <script crossorigin="anonymous" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
                                    </script>
                                    <script crossorigin="anonymous" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
                                    </script>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div class="container-portada">
            <div class="login">
                <div class="login-contenedor">
                    <div class="login-encabezado clearfix">
                        <a class="acceder modo-activo " href="#">
                            Ingresar
                        </a>
                        <a class="registrarse " href="#">
                            Crear
                            <br/>
                            tu Cuenta
                        </a>
                    </div>
                    <!-- logearse -->
                    <div class="modo-mostrar" id="logearse">
                        <div class="login-contenido">
                            <div class="formulario">
                                <form>
                                    <ul>
                                        <li>
                                            <span>
                                                E-mail:
                                            </span>
                                            <input placeholder="E-mail" type="text"/>
                                        </li>
                                    </ul>
                                </form>
                                <input placeholder="Contraseña" type="password"/>
                            </div>
                            <div class="formulario confirmar">
                                <input id="logeado" type="checkbox"/>
                                <label for="logeado">
                                    Mantener la sesión activa
                                </label>
                            </div>
                            <div class="formulario login-boton">
                              <a  href="index.php" class="enviar">Iniciar Sesión</a>
                            </div>
                        </div>
                        <div class="login-footer">
                            <hr/>
                            <a class="clave-olvidada" href="index.php">
                                Ingresar como invitado
                            </a>
                        </div>
                    </div>
                    <!-- registrarse -->
                    <div class="esconder" id="registrarse">
                        <div class="login-contenido">
                            <div class="formulario">
                                <form>
                                    <ul>
                                        <li>
                                            <span for="name">
                                                Escribe tu correo electrónico
                                            </span>
                                            <input placeholder="E-mail" type="text"/>
                                        </li>
                                    </ul>
                                </form>
                                <input placeholder="Contraseña" type="password"/>
                            </div>
                            <div class="formulario confirmar">
                                <input id="condiciones" type="checkbox"/>
                                <label for="condiciones">
                                    He leído y acepto las condiciones de uso
                                </label>
                            </div>
                            <div class="formulario login-boton">
                                <a  href="index.php" class="enviar">Crear cuenta</a>
                            </div>
                            <hr/>
                            <a class="clave-olvidada" href="index.php">
                                Ingresar como invitado
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row" id="footer">
                    <div class="col-xs-4 col-lg-4" id="l">
                        <br>
                            <a href="https://www.facebook.com/pg/ecoobamboo/about/?ref=page_internal" target="_blank">
                                ¿Quienes somos?
                            </a>
                            <br>
                                <br>
                                    <a href="https://goo.gl/maps/tD5e546wfTszHots6" target="_blank">
                                        ¿Dónde estamos ubicados?
                                    </a>
                                </br>
                            </br>
                        </br>
                    </div>
                    <div class="col-xs-4 col-lg-4" id="c">
                        <div class="row">
                            <div class="col-12" id="CR">
                                <img  src="icon/logot.png" width="65%" height="110%">
                                </img>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-lg-4" id="I">
                                <a href="https://www.instagram.com/ecoobamboo/?hl=es-la" target="_blank">
                                    <img class="RS" src="icon/I.jpeg" width="80%" height="80%">
                                    </img>
                                </a>
                            </div>
                            <div class="col-xs-4 col-lg-4" id="F">
                                <a href="https://www.facebook.com/ecoobamboo" target="_blank">
                                    <img class="RS"  src="icon/F.jpeg" width="80%" height="80%">
                                    </img>
                                </a>
                            </div>
                            <div class="col-xs-4 col-lg-4" id="W">
                                <a href="https://api.whatsapp.com/send?phone=573219805156&text=Hola%2c%20me%20interesan%20tus%20productos.Por%20favor%20puedes%20brindarme%20m%c3%a1s%20informaci%c3%b3n&source=&data=" target="_blank">
                                    <img class="RS" src="icon/W.jpeg" width="80%" height="80%">
                                    </img>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-lg-4" id="r">
                        <address>
                            <br>
                                Designed by :
                                Cristian Osorio
                                <br>
                                    E-mail :   
                                cstiven.osorio@udea.edu.co
                                </br>
                            </br>
                        </address>
                        <p>
                            ©2020 Copyright :
                            <b>
                                <i>
                                    ECOOBAMBOO.
                                </i>
                            </b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/codigo.js" type="text/javascript">
        </script>
    </body>
</html>