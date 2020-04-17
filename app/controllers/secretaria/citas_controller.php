<?php
if(!isset($_SESSION['usuario']['id']) || $_SESSION['usuario']['id'] == null){
    print "<script>window.location='../acount/login.php';</script>";
}else{
    require_once("../../app/views/inicio/panelcitas.php");
}
?>