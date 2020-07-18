<?php session_start(); 
include("conexion.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Ecoobamboo | Tienda Virtual</title>
    <link href="icon/logo.png" rel="icon" type="image/png"/>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estiloI.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
<body>

    <div class="container-portada">
        <header class="row">
            <div class="col-12">
                <div class="container-bar">
                    <nav id="nav-b" class="navbar fixed-top navbar-expand-md navbar-dark ">
                        <a href="index.php" class="navbar-brand"> <img  src="icon/logot.png" width="50%" height="50%"></a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span></button>
                        <div id="menu" class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item active"><a class="nav-link" href="#">PRODUCTOS</a></li>
                                <li class="nav-item"><a class="nav-link" href="promocion.php">PROMOCIONES</a></li>
                                <li class="nav-item"><a class="nav-link" href=href="https://www.facebook.com/pg/ecoobamboo/about/?ref=page_internal">INFORMACIÓN</a></li>
                            </ul>
                
                        
                        <a id="ver" href="salir.php" class="btn btn-primary">Salir</a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>   
         <div class="row">
             <div id="texto"class="col-xs-12 col-md-10 col-lg-9">
                   <h4 id="bienvenido"> Bienvenido <?php print($_POST['user'] ); ?>!</h4>
                   <p>
                   Ecoobambo es una tienda de productos ecológicos. Te brindamos alternativas para un estilo de vida sostenible y más responsable con el planeta.
                   </p>
            </div>

            <div class="container-fluid0">
                <div class="row">
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                            <img class="card-img-top" src="img/seda.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Seda Dental</h5>
                                <h6 class="card-title2">15,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                        <img class="card-img-top" src="img/p.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Peine de Bambú pequeño</h5>
                                <h6 class="card-title2">16,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-3">
                        <div class="card" >
                        <img class="card-img-top" src="img/g.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Peine de Bambú grande</h5>
                                <h6 class="card-title2">25,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                        <img class="card-img-top" src="img/m.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Peine de Bambú mediano</h5>
                                <h6 class="card-title2">20,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                        <img class="card-img-top" src="img/travel.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Travel Case de Bambú</h5>
                                <h6 class="card-title2">12,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                        <img class="card-img-top" src="img/carbon.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Carbón Activado</h5>
                                <h6 class="card-title2">9,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                        <img class="card-img-top" src="img/pitillos.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Pitillos en acero Inoxidable</h5>
                                <h6 class="card-title2">14,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-3">
                        <div class="card" >
                        <img class="card-img-top" src="img/cepillos.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Cepillos de dientes de bambú</h5>
                                <h6 class="card-title2">9,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                        <img class="card-img-top" src="img/cubiertos.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Cubiertos de Bambú</h5>
                                <h6 class="card-title2">16,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="col-xs-5 col-md-4 col-lg-2">
                        <div class="card" >
                        <img class="card-img-top" src="img/sprout.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Lápices Sprout</h5>
                                <h6 class="card-title2">4,000$</h6>
                            </div>
                            <a id="ver" href="https://api.whatsapp.com/send?phone=573219805156&text=Quiero%20comprar%20este%20producto&source=&data=" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="index2.php">Previous</a></li>
                <li class="page-item"><a class="page-link" href="index.php">(1)</a></li>
                <li class="page-item"><a class="page-link" href="index2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="Index2.php">Next</a></li>
            </ul>
        </nav>
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
                                <img  src="icon/logot.png" width="50%" height="80%">
                                </img>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-lg-4" id="I">
                                <a href="https://www.instagram.com/ecoobamboo/?hl=es-la" target="_blank">
                                    <img class="RS" src="icon/I.jpeg" width="100%" height="100%">
                                    </img>
                                </a>
                            </div>
                            <div class="col-xs-4 col-lg-4" id="F">
                                <a href="https://www.facebook.com/ecoobamboo" target="_blank">
                                    <img class="RS"  src="icon/F.jpeg" width="100%" height="100%">
                                    </img>
                                </a>
                            </div>
                            <div class="col-xs-4 col-lg-4" id="W">
                                <a href="https://api.whatsapp.com/send?phone=573219805156&text=Hola%2c%20me%20interesan%20tus%20productos.Por%20favor%20puedes%20brindarme%20m%c3%a1s%20informaci%c3%b3n&source=&data=" target="_blank">
                                    <img class="RS" src="icon/W.jpeg" width="100%" height="100%">
                                    </img>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-lg-4" id="r">
                        <address>
                             <br>
                                Designed by :
                                 <br>
                                 <br>
                                Cristian Osorio
                                 <br>
                                Daniel Alvarez
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
</body>

</html>
