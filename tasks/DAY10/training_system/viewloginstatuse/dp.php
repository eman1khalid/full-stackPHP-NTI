<?php require("../index.php");
header("Content-Type: application/json");
$login=[];
$data=mysqli_query($con,"SELECT  `email`, `state` FROM `log` WHERE 1");
 while($row=mysqli_fetch_assoc($data)){
  $login[]=$row;
 }
 echo json_encode($login);
