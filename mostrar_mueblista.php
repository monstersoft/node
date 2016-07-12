<?php
    include "paginas/funciones.php";
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
    <link rel="stylesheet" type="text/css" href="styleMostrarMueblista.css">
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
              <!--<div class="col-xs-12 col-md-4">
                  <img src="imgMueblistas/m1.jpg" width="300px;" class="img-responsive img-circle">
              </div>
              <div class="col-xs-12 col-md-8">
                  <h1 class="nombreMueblista">Juanito perez perez</h1>
                  <p class="infoMueblista">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus reiciendis officia perferendis ipsa, fugiat praesentium maxime magnam veniam nobis labore quaerat nostrum corrupti cumque, fuga rerum quis ipsum impedit! Illum.</p>
                  <a href="mueblesAsociados.php">Muebles asociados</a>-->
             <div class="col-xs-12 col-md-6">
                <form method="post" action="mueblesAsociados.php">
                    <?php
                        if(isset($_POST['consulta'])){
                        $id_sticker=$_POST['txtCodigo'];

                        if (($id_sticker == "")){
                        }else{
                            $resultado = listar_mueblista_sticker($id_sticker);
                        }
                        }
                    ?>
                <input class="btn-lg btn-block" type="submit" value="Muebles asociados" name="consulta">
            </form>
              </div>
              <div class="col-xs-12 col-md-6">
        <form method="post" action="maderas.php">
        <?php
            if(isset($_POST['consulta'])){
            $id_sticker=$_POST['txtCodigo'];
        
            if (($id_sticker == "")){
                }else{
                    $resultado = listar_madera_sticker($id_sticker);
                }
            }
       ?>
        </div>
          </div>
            </form>
                </div>
              </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="imgIndex/toolbox.png">
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
                <img src="imgIndex/desk.png">
              </div>
                 <a class="link" href="#">
                  <h3 class="pad-bt15">Información de muebles</h3>
                  <p>NodeQr permite revisar información de ms, el tipo de madera con el que están construidos y la calificación que les da cada usuario.</p>
                  </a>
            </div>
          </div>
        </div>
      </div>
    </section>
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