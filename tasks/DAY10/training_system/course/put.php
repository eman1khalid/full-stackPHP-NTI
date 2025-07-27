<?php

$data=json_decode(file_get_contents("php://input"), true);
if(isset($data["id"])){
$title=$data["title"];
$description=$data["description"];
$hours=$data["hours"];
$price=$data["price"];
$id=$data["id"];
$role=$_SESSION["role"];
$stmt = mysqli_prepare($con,"UPDATE `courses` SET `title`=?,`description`=?,`hours`=?,`price`=? WHERE id=$id");
mysqli_stmt_bind_param($stmt, "ssii", $title,$description,$hours,$price);
mysqli_stmt_execute($stmt);
$e=["role"=>$role,"response"=>"Successful","massege"=>"✅edit course successfully"];
 echo json_encode($e);
} else {
  $e=["response"=>"fail","massege"=>"error reqiuerd id "];
   echo json_encode($e);
  
}

