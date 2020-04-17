<?php
#Se crea una clase Usuarios que hereda los elementos de Validator(clase de validaciones)
class Personas extends Validator{
    #Se crean las variables privadas y se inicializan en null
    private $idPersona = null;
    private $nombre = null;
    private $apellido = null;
    private $dui = null;
    private $fecha_n = null;

//Elementos del id para ingresar
    public function setId($value){
        if($this->validateId($value)){
			$this->idPersona = $value;
			return true;
		}else{
			return false;
		}
    }
//Funcion para recolectar el id
    public function getId(){
        return $this->idPersona;
    }

//Elementos del nombre para ingresar
    public function setNombre($value){
        if($this->validateAlphanumeric($value,1,50)){
            $this->nombre = $value;
            return true;
        }else{
            return false;
        }
    }
//Funcion para recolectar el nombre
    public function getNombre(){
        return $this->nombre;
    }

//Elementos del apellido para ingresar
    public function setApellido($value){
        if($this->validateAlphanumeric($value,1,50)){
            $this->apellido = $value;
            return true;
        }else{
            return false;
        }
    }
//Funcion para recolectar el apellido
    public function getApellido(){
        return $this->apellido;
    }
//Elementos del Dui para ingresar
public function setDui($value){
    if($this->validateDui($value)){
        $this->dui = $value;
        return true;
    }else{
        return false;
    }
}
//Funcion para recolectar el Dui
public function getDui(){
    return $this->dui;
}

public function setFecha($value){
    if($this->validateFecha($value)){
        $this->fecha_n = $value;
        return true;
    }else{
        return false;
    }
}
public function getFecha(){
    return $this->fecha_n;
}

#Funcion para crear usuario
    public function createPersona(){    
    
        $sql = "INSERT INTO persona(nombres,apellidos,fecha_nac,dui) VALUES(?,?,?,?)";
        #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array($this->nombre,$this->apellido,$this->fecha_n,$this->dui);
        #Retorna el estado que devuelve el metodo executeRow 
        return Database::executeRow($sql, $params);
    }
    
    #Funcion para leer usuario 
    public function readPersona(){
        #Se guarda la consulta en una variable
		$sql = "SELECT nombres, apellidos, fecha_nac,dui FROM persona WHERE id = ?";
        #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array($this->idPersona);
        #guarda los datos devueltos del metodo getRow
		$Persona = Database::getRow($sql, $params);
		if($Persona){
            #Se guardan los datos obtenidos en las variables pertenecientes a la clase
			$this->nombre = $Persona['nombres'];
			$this->apellido = $Persona['apellidos'];
			$this->fecha_n = $Persona['fecha_nac'];
			$this->dui = $Persona['dui'];        
			return true;
		}else{
			return null;
		}
    }
    #Funcion para actualizar persona
    public function updatePersona(){
        #Se guarda la consulta en una variable
       $sql = "UPDATE persona SET nombres = ?,apellidos = ?,fecha_nac = ?,dui= ? WHERE id = ?";
        #se guardan los parametros (datos recogidos) en una variable,como un arreglo
       $params = array($this->nombre,$this->apellido,$this->fecha_n,$this->dui,$this->idPersona);
         #Retorna el estado que devuelve el metodo executeRow 
       return Database::executeRow($sql, $params);
    
   }

    #Funcion para busqueda de registros
    public function searchPersona($value){
        #Se guarda la consulta en una variable
        $sql = "SELECT * FROM persona WHERE dui like  ? OR nombres like ? ORDER BY nombres";
         #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array("$value%","%$value%");
        #Retorna los datos que devuelve el metodo getRows 
		return Database::getRows($sql, $params);
    }

       #Funcion para eliminar usuario
       public function deletePersona(){
        #Se guarda la consulta en una variable
       $sql = "DELETE FROM persona WHERE id = ?";
        #se guardan los parametros (datos recogidos) en una variable,como un arreglo
       $params = array($this->idPersona);
          #Retorna el estado que devuelve el metodo executeRow 
       return Database::executeRow($sql, $params);
   }
}