<div class="container">

    <div class="row">
        <div class="col">
        <h2 class="text-center">Actualizar Usuario</h2>
        <h5 class="text-center">Alias: <?php print($object->getAlias());?></h5>
        </div>
    </div>
    
    <form method='post'>
  <div class="form-row">
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
      <button name="actualizar" type="submit" class=" btn btn-success">Actualizar</button>
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
  </div>
 </div>
</form>
        
</div>