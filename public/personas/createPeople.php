<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Crear persona");
require_once("../../app/controllers/personas/createPeople_controller.php");
Page::templateFooter();
?>