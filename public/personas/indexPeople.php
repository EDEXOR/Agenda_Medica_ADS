<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Tabla persona");
require_once("../../app/controllers/personas/indexPeople_controller.php");
Page::templateFooter();
?>