<?php

$data=json_decode(file_get_contents("php://input"), true);
if(isset($data["id"])){
$name=$data["name"];
$email=$data["email"];
$phone=$data["phone"];
$date=$data["date"];
$id=$data["id"];
$role=$_SESSION["role"];
$stmt = mysqli_prepare($con,"UPDATE `students` SET `name`=?,`email`=?,`phone`=?,`date_of_birth`=? WHERE id=$id");
mysqli_stmt_bind_param($stmt, "ssis", $name,$email,$phone,$date);
mysqli_stmt_execute($stmt);
$e=["role"=>$role,"response"=>"Successful","massege"=>"✅edit student successfully"];
 echo json_encode($e);
} else {
  $e=["response"=>"fail","massege"=>"error reqiuerd id "];
   echo json_encode($e);
  
}

