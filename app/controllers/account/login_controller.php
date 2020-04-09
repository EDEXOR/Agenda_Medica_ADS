<?php
require_once("../../app/models/usuarios.class.php");
try{
	$object = new Usuarios;
	/*if($object->getUsuarios()){*/
		if(isset($_POST['login'])){
			if (!isset($_SESSION['usuario']['id'])){ 			
            $_POST = $object->validateForm($_POST);
			if($object->setNombre($_POST['username'])){
				if($object->checkNombre()){
                    if($object->setClave($_POST['password'])){					
                        if($object->checkPassword()){
							$_SESSION['usuario']['id'] = $object->getId();
							$_SESSION['usuario']['fullname'] = $object->getNombre();
							Page::showMessage(1, "Autenticación correcta", "../inicio/inicio.php");
						}else{
							throw new Exception("Contraseña inexistente");
						}
					}else{
						throw new Exception("Contraseña menor a 6 caracteres");
					}
			}else{
				throw new Exception("Nombre inexistente");
			}
			}else{
				throw new Exception("Nombre incorrecto");
			}
	}else{
		unset($_SESSION['usuario']);
			throw new Exception("Ya existe una seccion iniciada,se cerrara por seguridad");
		}
		}
	/*}else{
		Page::showMessage(3, "No hay usuarios disponibles", "login.php");
	}*/
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/account/login_view.php");
?>