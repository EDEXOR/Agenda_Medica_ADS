<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Eliminar usuario");
require_once("../../app/controllers/usuarios/delete_controller.php");
Page::templateFooter();
?>