<?php
require_once("../../app/models/usuarios.class.php");
try{
    if ($_GET['id']) {
    $object = new Usuarios;
    $object->setId($_GET['id']);
    $object->readUsuario();
		if(isset($_POST['actualizar'])){		
            $_POST = $object->validateForm($_POST);
			if($_POST['clave1'] === $_POST['clave2']){
				if($object->setClave($_POST['clave1'])){
                    if($object->updateClave()){
                        Page::showMessage(1, "Usuario Editado", "index.php");
                    }else{
                        throw new Exception("No se pudo editar el usuario");
                    }    
                }else{
                    throw new Exception("Ingrese la contraseña, tiene que llevar: mayusculas,minusculas,numeros y simbolos min:8 caracteres");
                }
			}else{
				throw new Exception("Las contraseñas no coinciden");
            }
            
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "index.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/usuarios/clave_view.php");
?>