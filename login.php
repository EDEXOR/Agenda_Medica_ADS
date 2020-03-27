<?php session_start(); ?>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Multiclinicas Merc</title>


  <link href="recursos/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="css/estilo.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a id="titulo"  href="#"><img src="img/iconM.png">  Multiclinicas MERC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a href="#" class="btn btn-primary btn-lg">INICIO</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
     <br>
      <br>
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" id="header">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      
    </header>
    <!-- Page Features -->
    <header class="jumbotron my-4" >
        <div class="container">
<div class="row">
<div class="col-md-6">
		<h2>INICIO DE SESION</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-primary">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
    
  </header>
</div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="footer-distributed">
            <div class="footer-left">
                <h3><img src="img/icon.png" width="15%"></h3>
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
                <div class="footer-icons"><a href="https://www.facebook.com/pg/ClinicaMerBel/about/?ref=page_internal"><i> <img src="img/face.png"> </i></a></div>
            </div>
        </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
