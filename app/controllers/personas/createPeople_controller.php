<?php
require_once("../../app/models/persona.class.php");
try{
	$object = new Personas;
		if(isset($_POST['crear'])){	
            
            $_POST = $object->validateForm($_POST);

			if($object->setNombre($_POST['nombres'])){
				if($object->setApellido($_POST['apellidos'])){
                    if($object->setDui($_POST['dui'])){
                       if($object->setFecha($_POST['fecha'])){
                        if($object->createPersona()){
                            if($object->insertPaciente()){
                                Page::showMessage(1, "Persona creada", "indexPeople.php");
                            }else{
                                throw Exception("No se pudo crear el paciente");
                            }                            
                        }else{
                            throw new Exception("No se pudo crear la persona");
                        }   
                       }else{
                           throw new Exception("Fecha incorrecta");
                       }               
                        }else{
                            throw new Exception("Ingresar DUI");
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
require_once("../../app/views/personas/CreatePeople_view.php");
?>