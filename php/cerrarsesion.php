<?php
session_unset();
session_destroy($_SESSION["user_id"]);
header("Location: ../login.php")
?>