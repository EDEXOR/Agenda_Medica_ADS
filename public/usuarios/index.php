<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Usuarios");
require_once("../../app/controllers/usuarios/index_controller.php");
Page::templateFooter();
?>