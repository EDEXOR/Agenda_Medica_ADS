<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registrar.php';</script>";
			}
			$sql = "insert into user(username,fullname,email,password,tipo,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$_POST[password]\",\"$_POST[tipo]\",NOW())";
			$id_usuario = $con->query($sql);
			$sql2= "select id from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$id_usuarioQ = $con->query($sql2);
			$id_usuario = mysqli_fetch_array($id_usuarioQ);

			$val = $id_usuario[0];
			
			
   $sql3 = "insert into persona(fullname,fecha_nac,dui,id_usuario) value(\"$_POST[fullname]\",\"$_POST[fecha_nac]\",\"$_POST[dui]\",\"$val\")";
   echo $sql3;
			$queryy = $con->query($sql3);
			
			if($queryy!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}



?>