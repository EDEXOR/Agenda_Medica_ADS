<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Actualizar usuario");
require_once("../../app/controllers/usuarios/update_controller.php");
Page::templateFooter();
?>