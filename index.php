<?php
    //session_start();
    include "paginas/funciones.php";
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
    <link rel="stylesheet" type="text/css" href="styleIndex.css">
    <link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />
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
                <li class="active"><a href="#">Home</a></li>
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
            <div class="banner-info text-center">
              <img src="imgIndex/qr-code(3).png">
              <h2 class="bnr-sub-title">¿Quieres saber más de tu mueble ?</h2>
              <p class="bnr-para">NodeQr permite indentificar información de los muebles del mercado, a través de un dispositivo móvil y el código indetificar Qr adherido al mueble.</p>
              <div class="brn-btn">
                <a href="consultarQr.php" class="btn btn-download">Consultar código!</a>
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
                 <a class="link" href="infoMuebles.php">
                  <h3 class="pad-bt15">Información de muebles</h3>
                  <p>NodeQr permite revisar información de muebles, el tipo de madera con el que están construidos y la calificación que les da cada usuario.</p>
                  </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>