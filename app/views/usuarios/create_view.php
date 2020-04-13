<div class="container">

    <div class="row">
        <div class="col">
        <h2 class="text-center">Crear Usuario</h2>
        </div>
    </div>
    
    <form method='post'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nombre">Nombres:</label>
      <input name="nombres" type="text" class="form-control" id="Nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-md-6">
      <label for="Apellido">Apellidos:</label>
      <input name="apellidos" type="text" class="form-control" id="Apellido" placeholder="Apellido">
    </div>
    <div class="form-group col-md-4">
      <label for="Alias">Alias:</label>
      <input name="alias" type="text" class="form-control" id="Alias" placeholder="Alias">
    </div>
    <div class="form-group col-md-4">
    <label for="exampleFormControlInput1">Direccion de Email</label>
    <input name="correo" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Tipo de usuario</label>
      <select id="inputState" name="tipo" class="form-control">
        <option selected value="1">Administrador</option>
        <option  value="2">Secretario</option>
        <option  value="3">Doctor</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input name="clave1" type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword5">Confirmar Contraseña</label>
      <input name="clave2" type="password" class="form-control" id="inputPassword5" placeholder="Contraseña">
    </div>
  </div>
 

 <div class="row">
 <div class="center center-text mx-auto">
      <button name="crear" type="submit" class=" btn btn-success">Registrar</button>
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
 </div>
</form>
        
</div>