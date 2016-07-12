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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styleLogin.css">
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
                <li class="active"><a href="loginUniversal.php">Login</a></li>
                <li class=""><a href="#">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <!--FORMULARIO-->
        <div class="wrapper">
        <div class="container">
          <div class="row">
           <div class="wrapper">
                <form method="post" class="estiloL form-signin" action="checklogin_universal.php" id="formAdmin">
                <div class="centro">
                    <img src="imgIndex/user.png"> 
                </div>  
                  <h2 class="form-signin-heading">Login</h2>
                      <input type="mail" class="form-control" name="correo" placeholder="&#128588; Correo" id="correo" autofocus="" />
                      <input type="password" class="form-control" name="contrasena" placeholder="&#128273; Password" id="contrasena"/>      
                      <input type="submit" name="iniciar" class="boton btn-block" value="Iniciar sesión"><br>
                    <div class="">
                        <a href="registroUsuario.php">Crear cuenta</a> /
                        <a href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                </form>
                <?php
                if(isset($_POST['iniciar'])){
                    $correo=$_POST['correo'];
                    $contrasena=$_POST['contrasena'];
                    if (($correo == "")|| ($contrasena=="")){
                    }else{
                        header ("Location: checklogin_universal.php");
                    }
                    }
                ?>
          </div>
            </div>
          </div>
        </div>
        <!--FORMULARIO-->
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
    <script src="js/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
        $("#formAdmin").validate({
            rules:{
                contrasena:{
                    required:true,
                    rangelength: [6,12]
                },
                correo:{
                    required:true,
                    email:true

                },  
            },
            messages:{
                contrasena:{
                    required:"Campo obligatorio",
                    rangelength:"Mínimo 6 y máximo 12 caracteres"
                },
                correo:{
                    required:"Campo obligatorio",
                    email:"Formato erróneo"
                }

            }


            });
            });
    </script>
  </body>
</html>