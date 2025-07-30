<?php

$data=json_decode(file_get_contents("php://input"), true);
if(isset($data["emailchange"])){
$username=$data["username"];
$email=$data["email"];
$role=$data["role"];
$emailchange=$data["emailchange"];
$role=$_SESSION["role"];
$stmt = mysqli_prepare($con,"UPDATE `admin` SET `username`=?,`email`=?,`role`=? WHERE email=?");
mysqli_stmt_bind_param($stmt, "ssss", $username,$email,$role,$emailchange);
mysqli_stmt_execute($stmt);
$e=["role"=>$role,"response"=>"Successful","massege"=>"✅edit $role successfully"];
echo json_encode(array_map("htmlspecialchars",$e)); 
} else {
  $e=["response"=>"fail","massege"=>"error reqiuerd email "];
echo json_encode(array_map("htmlspecialchars",$e)); 
  
}

