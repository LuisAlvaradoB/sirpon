<?php
session_start(); 
require("conexion2.php");
session_unset();
session_destroy();
echo '<script>window.location="login.php"</script>';
?>