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
                <ul class="sidebar-nav">
                <?php $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'agregar_sticker_mueblista';
                    include "paginas/funciones.php";
                    ?>
                    <li>
                    <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    $namex = $_SESSION['correo'];
                    
                    }
                    else echo "<a class='loquito' href='index.php'>INICIAR SESION</a>";
                ?>
                </li>
                <li class="fotoPerfil">
                   <?php mostrar_foto_mueblista($namex) ?>
                </li>
                    <li class="<?php echo $pagina == 'agregar_sticker_mueblista' ? 'active' : ''; ?>"><img class="a" src="imgIndex/qr-codeblanco.png"><a href="?p=agregar_sticker_mueblista">Generar QR</a></li>

                    <li class="<?php echo $pagina == 'leer_qr' ? 'active' : ''; ?>"><img class="a" src="imgIndex/lupa.png"><a href="?p=leer_qr">Consultar QR</a></li> 

                    <li class="<?php echo $pagina == 'mis_creaciones' ? 'active' : ''; ?>"><img class="a" src="imgIndex/creaciones.png"><a href="?p=mis_creaciones">Mis creaciones</a></li>

                    <li class="<?php echo $pagina == 'ranking' ? 'active' : ''; ?>"><img class="a" src="imgIndex/ranking.png"><a href="?p=ranking">Ranking</a></li>

                    <li class="<?php echo $pagina == 'mis_datos_mueblista' ? 'active' : ''; ?>"><img class="a" src="imgIndex/userDatos.png"><a href="?p=mis_datos_mueblista">Mis datos</a></li>

                    <li class="<?php echo $pagina == 'cambiar_clave_mueblista' ? 'active' : ''; ?>"><img class="a" src="imgIndex/key.png"><a href="?p=cambiar_clave_mueblista">Modificar contraseña</a></li>

                    <li class="<?php echo $pagina == 'eliminar_cta_mueblista' ? 'active' : ''; ?>"><img class="a" src="imgIndex/quitar.png"><a href="?p=eliminar_cta_mueblista">Eliminar mi cuenta</a></li>
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