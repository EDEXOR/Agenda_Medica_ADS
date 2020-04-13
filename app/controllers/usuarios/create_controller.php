<?php
require_once("../../app/models/usuarios.class.php");
try{
	$object = new Usuarios;
		if(isset($_POST['crear'])){		
            $_POST = $object->validateForm($_POST);

			if($object->setNombre($_POST['nombres'])){
				if($object->setApellido($_POST['apellidos'])){
                  if($object->setAlias($_POST['alias'])){
                    if(!$object->checkNombre()){     
                        if($_POST['clave1'] === $_POST['clave2']){
                            if($object->setClave($_POST['clave1'])){
                                if($object->setCorreo($_POST['correo'])){
                                    if($object->setTipo($_POST['tipo'])){
                                        if($object->createUsuario()){
                                            Page::showMessage(1, "Usuario creado", "index.php");
                                        }else{
                                            throw new Exception("No se pudo crear el usuario");
                                        }    
                                    }else{
                                        throw new Exception("Seleccionar tipo de usuario");
                                    }
                                    
                                }else{
                                    throw new Exception("Ingrese el correo");
                                }
                        }else{
                            throw new Exception("Ingresar clave");
                        }   
                        }else{
                            throw new Exception("Las contraseñas no coinciden");
                        }                                    
                    }else{
                        throw new Exception("El Alias ya existe");
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
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/usuarios/create_view.php");
?>