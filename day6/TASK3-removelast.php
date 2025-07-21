<?php 
session_start();
array_pop($_SESSION["user"]);
header("Location:TASK3.php");
exit();
?>