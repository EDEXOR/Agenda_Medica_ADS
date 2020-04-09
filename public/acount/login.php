<?php
require_once("../../app/views/template/template.php"); 
Page::templateHeader("Iniciar session");
require_once("../../app/controllers/account/login_controller.php");
Page::templateFooter();
?>