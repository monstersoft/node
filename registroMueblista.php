<?php
  include "paginas/funciones.php";
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
    <link rel="stylesheet" type="text/css" href="styleRegistroMueblista.css">
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
                <li class="active"><a href="registroUsuario.php">Registro</a></li>
                <li class=""><a href="#">Nuestros clientes</a></li>
                <li class=""><a href="loginUniversal.php">Login</a></li>
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
                <form class="estiloL form-signin" action="registroUsuario.php" method="post" id="formAdmin" enctype="multipart/form-data">
                <div class="centro">
                    <img src="imgIndex/loginMueblista.png"> 
                </div>  
                  <h2 class="form-signin-heading">Registro mueblista</h2>
                      <input type="text" class="form-control" name="nombre" id="nombre" autofocus="" placeholder="Nombre"/>
                      <input type="text" class="form-control" name="apellido" id="apellido" autofocus="" placeholder="Apellido"/>
                      <input type="file" class="form-control" name="foto" id="foto" autofocus="" placeholder="Adjuntar foto"/>
                      <input type="email" class="form-control" name="correo" id="correo" autofocus="" placeholder="Correo"/>
                      <input type="password" class="form-control" name="contrasena" id="correo" placeholder="Contraseña" autofocus=""/>
                      <input type="password" class="form-control" name="contrasena" id="correo" placeholder="Confirmar contraseña" autofocus=""/>
                      <input type="submit" name="registrar" class="boton btn-block" id="registrar" value="Registrar"><br>
                </form>
                <!-- PHP ----------------------------------------------------------------------------->
                <?php
                if(isset($_POST['guardar'])){

                    /*$ruta = "C:\wamp\www\NodeQr\paginas\Perfil\..";*/
                    $ruta = "C:\xampp\htdocs\NodeQr\paginas\Perfil\..";
                    opendir($ruta);
                    $destino = $ruta.$_FILES['foto']['name'];
                    copy($_FILES['foto']['tmp_name'],$destino);
                    $foto=$_FILES['foto']['name']; 

                    $contrasena=$_POST['contrasena'];
                    $rcontrasena=$_POST['rcontrasena'];
                    $nombre=$_POST['nombre'];
                    $apellido=$_POST['apellido'];
                    $correo=$_POST['correo'];

                    if (($contrasena!=$rcontrasena)|| ($nombre=="")||($apellido=="")|| ($foto=="")|| ($rcontrasena=="")||($contrasena=="")||(strlen($nombre)>30)||(strlen($correo)>30)){
                    }else{
                        $resultado = registrar_usuario($correo,$contrasena,$nombre,$apellido,$foto);
                        if($resultado == true){
                        }
                         //Redireccionar                   
                    header ("Location: index.php");
                    }
                }
                ?>
                <!-- PHP ----------------------------------------------------------------------------->
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