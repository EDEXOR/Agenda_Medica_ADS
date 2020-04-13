<div class="container">

    <div class="row">
        <div class="col">
        <h2 class="text-center">Actualizar Usuario</h2>
        </div>
    </div>
    
    <form method='post'>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Nombre">Nombres:</label>
      <input name="nombres" type="text" class="form-control" id="Nombre" placeholder="Nombre" value="<?php print($object->getNombre());?>" required/>
    </div>
    <div class="form-group col-md-6">
      <label for="Apellido">Apellidos:</label>
      <input name="apellidos" type="text" class="form-control" id="Apellido" placeholder="Apellido" value="<?php print($object->getApellido());?>" required/>
    </div>
    <div class="form-group col-md-4">
      <label for="Alias">Alias:</label>
      <input name="alias" type="text" class="form-control" id="Alias" placeholder="Alias" value="<?php print($object->getAlias());?>" required/>
    </div>
    <div class="form-group col-md-4">
    <label for="exampleFormControlInput1">Direccion de Email</label>
    <input name="correo" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php print($object->getCorreo());?>" required/>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Tipo de usuario</label>
      <select id="inputState" name="tipo" class="form-control">
        <option <?php (print($object->getTipo()) == 1)?print('selected'):''?> value="1">Administrador</option>
        <option <?php (print($object->getTipo()) == 2)?print('selected'):''?> value="2">Secretario</option>
        <option <?php (print($object->getTipo()) == 3)?print('selected'):''?> value="3">Doctor</option>
      </select>
    </div>
</div>
 

 <div class="row">
 <div class="center center-text mx-auto">
      <button name="actualizar" type="submit" class=" btn btn-success">Actualizar</button>
      <a class="btn btn-danger" href="index.php" role="button">Cancelar</a>
      <?php print('<a class="btn btn-info"   href="clave.php?id='.$object->getId().'" role="button">Actualizar Clave</a>')?>
  </div>
 </div>
</form>
        
</div>