<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Eliminar persona");
require_once("../../app/controllers/personas/DeletePeople_controller.php");
Page::templateFooter();
?>