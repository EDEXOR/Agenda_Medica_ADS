<?php
#Se crea una clase Usuarios que hereda los elementos de Validator(clase de validaciones)
class Usuarios extends Validator{
    #Se crean las variables privadas y se inicializan en null
    private $idUsuario = null;
    private $nombre = null;
    private $apellido = null;
    private $alias = null;
    private $clave = null;
    private $correo = null;
    private $tipo = null;

//Elementos del id para ingresar
    public function setId($value){
        if($this->validateId($value)){
			$this->idUsuario = $value;
			return true;
		}else{
			return false;
		}
    }
//Funcion para recolectar el id
    public function getId(){
        return $this->idUsuario;
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

//Elementos del alias para ingresar
    public function setAlias($value){
        if($this->validateAlphanumeric($value,1,50)){
            $this->alias = $value;
            return true;
        }else{
            return false;
        }
    }
//Funcion para recolectar el alias
    public function getAlias(){
        return $this->alias;
    }

//Elementos de clave para ingresar
    public function setClave($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		  }else{
		  	return false;
		  } 
    }
    //Funcion para recolectar la clave
	public function getClave(){
		return $this->clave;
    }

//Elementos del correo para ingresar
    public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo = $value;
			return true;
		}else{
			return false;
		}
    }
//Funcion para recolectar el correo
	public function getCorreo(){
		return $this->correo;
    }

    //Elementos del id para tipo
    public function setTipo($value){
        if($this->validateId($value)){
			$this->tipo = $value;
			return true;
		}else{
			return false;
		}
    }
//Funcion para recolectar el tipo
    public function getTipo(){
        return $this->tipo;
    }

#Funcion para crear usuario
    public function createUsuario(){    
        #Se ocupa una funcion nativa de php para encriptar contraseña   
        $hash = password_hash($this->clave,PASSWORD_DEFAULT);
        #Se guarda la consulta en una variable
        $sql = "INSERT INTO user(nombres,apellidos,username,email,`password`,tipo) VALUES(?,?,?,?,?,?)";
        #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array($this->nombre,$this->apellido,$this->alias,$this->correo,$hash,$this->tipo);
        #Retorna el estado que devuelve el metodo executeRow        
        return Database::executeRow($sql, $params);
    }

    public function insertTipo(){
        $lastId = Database::getLastRowId();
        if($this->tipo == 3){
        $sql = "INSERT INTO medico(id_usuario) VALUES(?)";
        $params = array($lastId);
        return Database::executeRow($sql,$params);    
        }else{
            return true;
        }
    }

    #Funcion para leer usuario 
    public function readUsuario(){
        #Se guarda la consulta en una variable
		$sql = "SELECT nombres, apellidos, username,email,`password`,tipo FROM user WHERE id = ?";
        #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array($this->idUsuario);
        #guarda los datos devueltos del metodo getRow
		$usuario = Database::getRow($sql, $params);
		if($usuario){
            #Se guardan los datos obtenidos en las variables pertenecientes a la clase
			$this->nombre = $usuario['nombres'];
			$this->apellido = $usuario['apellidos'];
			$this->alias = $usuario['username'];
			$this->correo = $usuario['email'];
            $this->clave = $usuario['password'];
            $this->tipo = $usuario['tipo'];            
			return true;
		}else{
			return null;
		}
	}
    #Funcion para actualizar usuario
    public function updateUsuario(){
         #Se guarda la consulta en una variable
        $sql = "UPDATE user SET nombres = ?,apellidos = ?,username = ?,email = ?,tipo = ? WHERE id = ?";
         #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array($this->nombre,$this->apellido,$this->alias,$this->correo,$this->tipo,$this->idUsuario);
          #Retorna el estado que devuelve el metodo executeRow 
        return Database::executeRow($sql, $params);
    }
    public function updateClave(){
        $hash = password_hash($this->clave,PASSWORD_DEFAULT);
        $sql = "UPDATE user SET `password` = ? WHERE id = ?";
        $params = array($hash,$this->idUsuario);
        return Database::executeRow($sql, $params);
    }
    #Funcion para eliminar usuario
    public function deleteUsuario(){
         #Se guarda la consulta en una variable
        $sql = "DELETE FROM user WHERE id = ?";
         #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array($this->idUsuario);
           #Retorna el estado que devuelve el metodo executeRow 
		return Database::executeRow($sql, $params);
	}
    #Funcion para busqueda de registros
    public function searchUsuario($value){
        #Se guarda la consulta en una variable
        $sql = "SELECT * FROM user WHERE username like  ? ORDER BY username";
         #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array("%$value%");
        #Retorna los datos que devuelve el metodo getRows 
		return Database::getRows($sql, $params);
    }
    
    public function getUsuarios(){
        #Se guarda la consulta en una variable
        $sql = "SELECT * FROM user WHERE id <> ? ORDER BY nombres";
         #se guardan los parametros (datos recogidos) en una variable,como un arreglo
        $params = array($_SESSION['usuario']['id']);
        #Retorna los datos que devuelve el metodo getRows 
		return Database::getRows($sql, $params);
	}

    public function checkNombre(){
        $sql = "SELECT id,tipo FROM user WHERE username = ?";
        $params = array($this->nombre);
        $data = Database::getRow($sql, $params);
        if($data){
            $this->idUsuario = $data['id'];
            $this->tipo = $data['tipo'];
            return true;
        }else{
            return false;
        }
    }

    public function checkPassword(){
        $sql = "SELECT `password` FROM user WHERE id = ?";
        $params = array($this->idUsuario);
        $data = Database::getRow($sql, $params);	
        if(password_verify($this->clave,$data['password'])){
            return true;
        }else{
            return false;
        }
    }
}
?>