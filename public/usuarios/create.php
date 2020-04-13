<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Crear usuario");
require_once("../../app/controllers/usuarios/create_controller.php");
Page::templateFooter();
?>