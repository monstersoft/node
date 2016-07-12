<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>NodeQR</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styleContenido.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>   
  </head>
    <div class="fondo container-fluid">
        <p id="menu" class="logo">node<span class="logo-dec">Qr</span></p>
    </div>
  </header>
  <body class="colorFondo">
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <?php   
                $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'mis_muebles';
                include "paginas/funciones.php";
            ?>
            <ul class="sidebar-nav">
                
                <li>
                    <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    $namex = $_SESSION['correo'];
                    
                    }
                    else echo "<a class='loquito' href='index.php'>INICIAR SESION</a>";
                ?>
                </li>
                <li class="fotoPerfil">
                   <?php mostrar_foto_usuario($namex) ?>
                </li>
                <br>
                <li class="<?php echo $pagina == 'mis_datos_usuario' ? 'active' : ''; ?>"><img class="a" src="imgIndex/userDatos.png"><a href="?p=mis_datos_usuario">Mis datos</a></li>
                <li class="<?php echo $pagina == 'cambiar_clave_usuario' ? 'active' : ''; ?>"><img class="a" src="imgIndex/key.png"><a href="?p=cambiar_clave_usuario">Modificar contraseña</a></li>
                <li class="<?php echo $pagina == 'eliminar_cta_usuario' ? 'active' : ''; ?>"><img class="a" src="imgIndex/quitar.png"><a href="?p=eliminar_cta_usuario">Eliminar mi cuenta</a></li>
                <br>
                <li class="<?php echo $pagina == 'agregar_mueble' ? 'active' : ''; ?>"><img class="a" src="imgIndex/misMuebles.png"><a href="?p=mis_muebles">Mis muebles</a></li>  
                <li class="<?php echo $pagina == 'agregar_mueble' ? 'active' : ''; ?>"><img class="a" src="imgIndex/agregar.png"><a href="?p=agregar_mueble">Agregar mueble</a></li>  
                <li class="<?php echo $pagina == 'ranking' ? 'active' : ''; ?>"><img class="a" src="imgIndex/ranking.png"><a href="?p=ranking">Ranking</a></li>
                <br>
                <li>
                    <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    $namex = $_SESSION['correo'];
                    echo "<img class='a'' src='imgIndex/cerrar.png'><a href='close.php'>Cerrar sesión</a>";
                    }
                    ?>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="contenido">
                    <?php   
                        require_once 'paginas/' . $pagina . '.php';
                    ?>
            </div>
            </div>
    </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
        $('.galeria__img').click(function(e){
          var img = e.target.src;
          var modal = '<div class="modal" id="modal"><img src="'+ img + '" class="modal__img"><div class="modal__boton" id="modal__boton">X</div></div>';
          $('.cuerpo').append(modal);
          $('#modal__boton').click(function(){
            $('#modal').remove();
          })
        });


        $(document).keyup(function(e){
          if (e.which==27) {
            $('#modal').remove();
          }
        })
        </script>
         <script>
            $("#menu").click(function(e) {

                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>  
</body>
</html>

