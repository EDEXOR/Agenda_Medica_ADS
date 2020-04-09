<?php
require_once("../../app/models/database.class.php");
require_once('../../app/helpers/validator.class.php');
require_once('../../app/helpers/component.class.php');

class Page extends Component{
    public static function templateHeader($titulo){
      session_start();
      ini_set('date.timezone','America/El_Salvador');
      if(isset($_SESSION['usuario']['id'])){
        print('
        <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Multiclinicas Merc</title>

  <link href="../../web/recursos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../web/css/estilo.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../web/recursos/bootstrap/css/font.min.css">
  <script src="../../web/js/sweetalert.min.js"></script>
</head>

<body>
<div class="d-flex" id="wrapper">
  <br>
  <br>
  <br>
  <br>
  <br>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a id="titulo"  href="#"><img src="../../web/img/iconM.png">  Multiclinicas MERC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a href="../acount/logout.php" class="btn btn-danger btn-lg">CERRAR SESION</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        ');
      } else{
      print('
        <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Multiclinicas Merc</title>

    <link href="../../web/recursos/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../web/css/estilo.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../web/recursos/bootstrap/css/font.min.css">
    <script src="../../web/js/sweetalert.min.js"></script>
    </head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a id="titulo"  href="#"><img src="../../web/img/iconM.png">  Multiclinicas MERC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a href="login.php" class="btn btn-primary btn-lg">INICIAR SESION</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>');
}
    }

    public static function templateFooter(){
        print('  
    <footer class="footer-distributed">
            <div class="footer-left">
                <h3><img src="../../web/img/icon.png" width="15%"></h3>
                <br>
                <br>
                <a href="www.edexor.com" class="footer-company-name">UDB &copy; 2020</a>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Colonia Medica final 21 calle poniente N° 1633</span> San Salvador, San Salvador</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>2235 6154</p>
                </div>
                 <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">clinicamedicamerbel@hotmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>Clinicas MER</span>
                     
                </p>
                <div class="footer-icons"><a href="https://www.facebook.com/pg/ClinicaMerBel/about/?ref=page_internal"><i> <img src="../../web/img/face.png"> </i></a></div>
            </div>
        </footer>

        <script src="../../web/recursos/jquery/jquery.js"></script>
        <script src="../../web/recursos/bootstrap/js/bootstrap.bundle.js"></script>
        </body>
        </html>
        ');
    }
}
?>