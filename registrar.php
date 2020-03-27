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
  <link rel="stylesheet" type="text/css" href="recursos/bootstrap/css/font.min.css">

</head>

<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Menu</div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Opcion</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Opcion</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Opcion</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Opcion</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Opcion</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Opcion</a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a id="titulo"  href="#"><img src="img/iconM.png">  Multiclinicas MERC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a href="#" class="btn btn-danger btn-lg">CERRAR SESION</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="col-md-6">
    <h2>Registro</h2>

    <form role="form" name="registro" action="php/registro.php" method="post">
      <div class="form-group">
        <label for="username">Nombre de usuario</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
      </div>
      <div class="form-group">
        <label for="fullname">Nombre Completo</label>
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
      </div>
      <div class="form-group">
        <label for="fecha_nac">Fecha de nacimiento</label>
        <div class='input-group date' >
                    <input type='date' class="form-control"  id='fecha_nac' name='fecha_nac'/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
      </div>
      <script type="text/javascript">
            $(function () {
                $('#fecha_nac').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
      <div class="form-group">
        <label for="fullname">DUI</label>
        <input type="text" class="form-control" id="dui" name="dui" placeholder="12345678-9">
      </div>
      <div class="form-group">
        <label for="fullname">Tipo de usuario</label>
        <select id="tipo" name="tipo" class="form-control"> 
          <option value="1">Secretaria</option>
          <option value="2">Medico</option>
          <option value="0">Administrador</option>
      </select>
      </div>
      <div class="form-group">
        <label for="email">Correo Electronico</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
      </div>
      <div class="form-group">
        <label for="password">Contrase&ntilde;a</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
      </div>

      <button type="submit" class="btn btn-default">Registrar</button>
    </form>
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
  <script src="recursos/jquery/jquery.js"></script>
  <script src="recursos/bootstrap/js/bootstrap.bundle.js"></script>
  

</body>

</html>
