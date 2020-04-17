<?php
require_once("../../app/models/persona.class.php");
try{
    if ($_GET['id']) {
    $object = new Personas;
    $object->setId($_GET['id']);
    $object->readpersona();
		if(isset($_POST['actualizar'])){		
            $_POST = $object->validateForm($_POST);

			if($object->setNombre($_POST['nombres'])){
				if($object->setApellido($_POST['apellidos'])){
                    if($object->setDui($_POST['dui'])){
                        if($object->setFecha($_POST['fecha'])){
                            if($object->updatepersona()){
                                Page::showMessage(1, "persona Editada", "indexPeople.php");
                            }else{
                                throw new Exception("No se pudo editar el persona");
                            }    
                        }else{
                            throw new Exception("Seleccionar fecha de nacimiento");
                        }
                        
                    }else{
                        throw new Exception("Ingrese el dui");
                    }                                   
                }else{
                    throw new Exception("Ingresar el apellido");
                }
			}else{
				throw new Exception("Ingresar el nombre");
            }
            
        }
    }else{
        Page::showMessage(3, "Seleccione persona", "indexPeople.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/personas/UpdatePeople_view.php");
?>