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
    <link rel="stylesheet" type="text/css" href="styleConsultarQr.css">
    <script>
        var gCtx = null;
        var gCanvas = null;
        var c=0;
        var stype=0;
        var gUM=false;
        var webkit=false;
        var moz=false;
        var v=null;

        var vidhtml = '<video id="v" autoplay></video>';

        function handleFiles(f)
        {
            var o=[];

            for(var i =0;i<f.length;i++)
            {
                var reader = new FileReader();
                reader.onload = (function(theFile) {
                return function(e) {
                    gCtx.clearRect(0, 0, gCanvas.width, gCanvas.height);

                    qrcode.decode(e.target.result);
                };
                })(f[i]);
                reader.readAsDataURL(f[i]);	
            }
        }

        function initCanvas(w,h)
        {
            gCanvas = document.getElementById("qr-canvas");
            gCanvas.style.width = w + "px";
            gCanvas.style.height = h + "px";
            gCanvas.width = w;
            gCanvas.height = h;
            gCtx = gCanvas.getContext("2d");
            gCtx.clearRect(0, 0, w, h);
        }

        // CAPTURA
        function captureToCanvas() {
            if(stype!=1)
                return;
            if(gUM)
            {
                try{
                    gCtx.drawImage(v,0,0);
                    try{
                        qrcode.decode();
                    }
                    catch(e){       
                        console.log(e);
                        setTimeout(captureToCanvas, 500);
                    };
                }
                catch(e){       
                        console.log(e);
                        setTimeout(captureToCanvas, 500);
                };
            }
        }

        function htmlEntities(str) {
            return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
        }
        //LEE
        function read(a)
        {
            var html="<br>";
            if(a.indexOf("http://") === 0 || a.indexOf("https://") === 0)
                html+="<a target='_blank' href='"+a+"'>"+a+"</a><br>";
            html+="<b>"+htmlEntities(a)+"</b><br><br>";
            document.getElementById("result").innerHTML=html;
            document.getElementById("codigo").value=a;
        }	

        function isCanvasSupported(){
          var elem = document.createElement('canvas');
          return !!(elem.getContext && elem.getContext('2d'));
        }

        function success(stream) {
            if(webkit)
                v.src = window.webkitURL.createObjectURL(stream);
            else
            if(moz)
            {
                v.mozSrcObject = stream;
                v.play();
            }
            else
                v.src = stream;
            gUM=true;
            setTimeout(captureToCanvas, 500);
        }

        function error(error) {
            gUM=false;
            return;
        }

        function load()
        {
            if(isCanvasSupported() && window.File && window.FileReader)
            {
                initCanvas(800, 600);
                qrcode.callback = read;
                document.getElementById("mainbody").style.display="inline";
                setwebcam();
            }
            else
            {
                document.getElementById("mainbody").style.display="inline";
                document.getElementById("mainbody").innerHTML='<p id="mp1">QR code scanner for HTML5 capable browsers</p><br>'+
                '<br><p id="mp2">sorry your browser is not supported</p><br><br>'+
                '<p id="mp1">try <a href="http://www.mozilla.com/firefox"><img src="firefox.png"/></a> or <a href="http://chrome.google.com"><img src="chrome_logo.gif"/></a> or <a href="http://www.opera.com"><img src="Opera-logo.png"/></a></p>';
            }
        }

        function setwebcam()
        {
            document.getElementById("result").innerHTML="- scanning -";
            if(stype==1)
            {
                setTimeout(captureToCanvas, 500);    
                return;
            }
            var n=navigator;
            document.getElementById("outdiv").innerHTML = vidhtml;
            v=document.getElementById("v");

            if(n.getUserMedia)
                n.getUserMedia({video: true, audio: false}, success, error);
            else
            if(n.webkitGetUserMedia)
            {
                webkit=true;
                n.webkitGetUserMedia({video: true, audio: false}, success, error);
            }
            else
            if(n.mozGetUserMedia)
            {
                moz=true;
                n.mozGetUserMedia({video: true, audio: false}, success, error);
            }
            document.getElementById("qrimg").style.opacity=0.2;
            document.getElementById("webcamimg").style.opacity=1.0;
            stype=1;
            setTimeout(captureToCanvas, 500);
        }
      </script>
      <script src="js/llqrcode.js"></script>
      <script src="js/jquery-1.12.4.min.js"></script>
      <script src="js/bootstrap.js"></script>
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
                <form class="estiloL form-signin" action="mostrar_mueblista.php" method="post" id="formAdmin" enctype="multipart/form-data">
                    <div class="centro">
                        <img src="imgIndex/leyendo.png"> 
                    </div>
                    <div>
                        <div style="display:none" id="result"></div>
	                    <div class="selector" id="webcamimg" onclick="setwebcam()" align="left" ></div>
                        <div class="selector" id="qrimg" onclick="setimg()" align="right" ></div>
                        <center id="mainbody"><div id="outdiv"></div></center>
                        <canvas id="qr-canvas" width="200" height="200"></canvas>
                        <script type="text/javascript">load();</script>
                    </div>  
                    <input type="text" class="form-control" name="txtCodigo" id="codigo" placeholder="Código capturado" autofocus=""/>
                    <input type="submit" name="consulta" class="boton btn-block" value="Consultar">
                </form>
                <!-- PHP ----------------------------------------------------------------------------->

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
  </body>
</html>