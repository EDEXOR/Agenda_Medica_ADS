<div class="container">

    <div class="row">
        <div class="col">
        <h2 class="text-center">Crear Persona</h2>
        </div>
    </div>
    
    <form method='post'>
  <div class="form-row">
    <div class="form-group col-sm-12 col-md-6 col-lg-6">
      <label for="Nombre">Nombres:</label>
      <input name="nombres" type="text" class="form-control" id="Nombre" placeholder="Nombre">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-6">
      <label for="Apellido">Apellidos:</label>
      <input name="apellidos" type="text" class="form-control" id="Apellido" placeholder="Apellido">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-6">
      <label for="Dui">Dui:</label>
      <input name="dui" type="text" class="form-control" id="Dui" placeholder="Dui">
    </div>
    <div class="form-group col-sm-12 col-md-6 col-lg-6">
      <label for="Dui">Fecha nacimiento:</label>
      <input class="form-control" data-date-format="yyyy-mm-dd" id="datepicker" name="fecha">
    </div>
  </div>



 <div class="row">
 <div class="center center-text mx-auto">
      <button name="crear" type="submit" class=" btn btn-success">Registrar</button>
      <a class="btn btn-danger" href="indexPeople.php" role="button">Cancelar</a>
  </div>
 </div>
</form>
       
</div>