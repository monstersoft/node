<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Node Qr</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styleRanking.css">
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="http://masonry.desandro.com/masonry.pkgd.js"></script>		
    <script src="http://imagesloaded.desandro.com/imagesloaded.pkgd.min.js"></script>
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">node<span class="logo-dec">Qr</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="index.php">home</a></li>
                <li class=""><a href="registroUsuario.php">Registro</a></li>
                <li class=""><a href="#">Nuestros clientes</a></li>
                <li class=""><a href="loginUniversal.php">Login</a></li>
                <li class=""><a href="#contact">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="contenedor">
                <div class="elemento">
                    <img src="imgMueblistas/m1.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m2.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m3.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m4.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m5.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m6.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m7.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m8.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m9.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m10.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m11.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m12.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m13.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m14.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m15.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m16.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m17.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
                <div class="elemento">
                    <img src="imgMueblistas/m18.jpg" width="200px;" alt="">
                    <a href="mueblesAsociados.php">Muebles asociados</a>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <!--<section id="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="imgMueblistas/toolbox.png">
              </div>
              <a class="link" href="ranking.php">
                  <h3 class="pad-bt15">Ranking de mueblistas</h3>
                  <p>NodeQr permite revisar a los mejores mueblistas, con la calificación que les da cada uno de los usuarios.</p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="imgMueblistas/desk.png">
              </div>
                 <a class="link" href="infoms.php">
                  <h3 class="pad-bt15">Información de ms</h3>
                  <p>NodeQr permite revisar información de ms, el tipo de madera con el que están construidos y la calificación que les da cada usuario.</p>
                  </a>
            </div>
          </div>
        </div>
      </div>
    </section>-->
  </div>
    <script src="js/bootstrap.js"></script>
	<script>
		var $container = $('.contenedor'); 
			$container.imagesLoaded( function() {
			$container.masonry();
		});
    </script>
  </body>
</html>