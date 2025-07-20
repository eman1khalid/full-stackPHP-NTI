<?php session_start();
session_unset();     
session_destroy();  
header("Location:DAY5-register.php");
exit();
?>
