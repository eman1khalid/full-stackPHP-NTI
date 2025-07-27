<?php 
include("index.php"); 
header("Content-Type: application/json");
$data=json_decode(file_get_contents("php://input"), true);
$username=$data["username"];
$email=$data["email"];
$password=$data["password"];
$stmt = mysqli_prepare($con, "SELECT `email`, `username`,  `password` FROM `admin` WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result)>0){
  $e=["response"=>"fail","massege"=>"An account already exists with the same email."];
  echo json_encode($e);
}else{
$pass=password_hash($password,PASSWORD_DEFAULT);
$stmt = mysqli_prepare($con, "INSERT INTO `admin`( `username`, `email`, `password`) VALUES (?,?,?)");
mysqli_stmt_bind_param($stmt, "sss", $username,$email,$pass);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"✅account created successfully","username"=>$username ,"email"=>$email];
 echo json_encode($e);



}

