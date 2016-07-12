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
    <header>
        <div class="fondo container-fluid">
            <p id="menu" class="logo">node<span class="logo-dec">Qr</span></p>
        </div>
    </header>
    <body class="colorFondo">
        <div id="wrapper">
            <div id="sidebar-wrapper">
                <?php   
                    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'agregar_sticker';
                ?>
                <ul class="sidebar-nav">
                    <li class="fotoPerfil">
                        <img width="100px;" class="img-circle" src="paginas/Perfil/admin-with-cogwheels.png">
                    </li>
                    <li>
                        <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                                $namex = $_SESSION['correo'];
                            }
                            else echo "<a class='loquito' href='login_administrador.php'>INICIAR SESION</a>";
                        ?>
                    </li>
                    <br>
                    <li class="<?php echo $pagina == 'agregar_sticker' ? 'active' : ''; ?>">
                    <img class="a" src="imgIndex/qr-codeblanco.png"><a href="?p=agregar_sticker">Generar Qr</a></li>

                    <li class="<?php echo $pagina == 'leer_qr' ? 'active' : ''; ?>"><img class="a" src="imgIndex/lupa.png"><a href="?p=leer_qr">Consultar Qr</a></li>
                    <br>

                    <li class="<?php echo $pagina == 'agregar_administrador' ? 'active' : ''; ?>"><img class="a" src="imgIndex/agregar.png"><a href="?p=agregar_administrador">Agregar administrador</a></li>

                    <li class="<?php echo $pagina == 'quitar_administrador' ? 'active' : ''; ?>"><img class="a" src="imgIndex/quitar.png"><a a href="?p=quitar_administrador">Quitar administrador</a></li>

                    <li class="<?php echo $pagina == 'agregar_mueblista' ? 'active' : ''; ?>"><img class="a" src="imgIndex/agregar.png"><a href="?p=agregar_mueblista">Agregar mueblista</a></li>

                    <li class="<?php echo $pagina == 'quitar_mueblista' ? 'active' : ''; ?>"><img class="a" src="imgIndex/quitar.png"><a href="?p=quitar_mueblista">Quitar mueblista</a></li>

                    <li class="<?php echo $pagina == 'agregar_madera' ? 'active' : ''; ?>"><img class="a" src="imgIndex/agregar.png"><a href="?p=agregar_madera">Agregar madera</a></li>

                    <li class="<?php echo $pagina == 'quitar_madera' ? 'active' : ''; ?>"><img class="a" src="imgIndex/quitar.png"><a a href="?p=quitar_madera">Quitar madera</a></li>
                    <br>
                    <li>
                        <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                                $namex = $_SESSION['correo'];
                            echo "<img class='a' src='imgIndex/cerrar.png'><a href='close.php'>Cerrar sesión</a>";
                            }
                        ?>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <div class="contenido">
                    <div class="row">
                            <?php   
                                require_once 'paginas/' . $pagina . '.php';
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
        $("#menu").click(function(e) {

        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
        </script>  
    </body>
</html>
