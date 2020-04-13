<?php
require_once("../../app/models/usuarios.class.php");
try{
    if ($_GET['id']) {
    $object = new Usuarios;
    $object->setId($_GET['id']);
    $object->readUsuario();
		if(isset($_POST['actualizar'])){		
            $_POST = $object->validateForm($_POST);

			if($object->setNombre($_POST['nombres'])){
				if($object->setApellido($_POST['apellidos'])){
                  if($object->setAlias($_POST['alias'])){
                    if($object->setCorreo($_POST['correo'])){
                        if($object->setTipo($_POST['tipo'])){
                            if($object->updateUsuario()){
                                Page::showMessage(1, "Usuario Editado", "index.php");
                            }else{
                                throw new Exception("No se pudo editar el usuario");
                            }    
                        }else{
                            throw new Exception("Seleccionar tipo de usuario");
                        }
                        
                    }else{
                        throw new Exception("Ingrese el correo");
                    }                                   
                  }else{
                      throw new Exception("Ingresar alias");
                  }
                }else{
                    throw new Exception("Ingresar el apellido");
                }
			}else{
				throw new Exception("Ingresar el nombre");
            }
            
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "index.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/usuarios/update_view.php");
?>