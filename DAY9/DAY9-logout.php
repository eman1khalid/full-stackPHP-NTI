<?php session_start();
session_unset();     
session_destroy();  
header("Location:DAY9-register.php");
exit();
?>
