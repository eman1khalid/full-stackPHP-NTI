<?php session_start();
session_unset();     
session_destroy();  
header("Location:TASK3.PHP");
exit();
?>
