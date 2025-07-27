<?php
if(isset($_SESSION["role"])){
if($_SESSION["role"]=="admin"){
$data=json_decode(file_get_contents("php://input"), true);
$username=$data["username"];
$email=$data["email"];
$password=$data["password"];
$role=$data["role"];
$stmt = mysqli_prepare($con, "SELECT * FROM `admin` WHERE email=?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result)>0){
  $e=["response"=>"fail","massege"=>"An student already exists with the same email."];
  echo json_encode($e);
}else{
$pass=password_hash($password,PASSWORD_DEFAULT);
$stmt = mysqli_prepare($con, "INSERT INTO `admin`(`username`, `email`, `password`, `role`) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, "ssss", $username,$email,$pass,$role);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"✅add $role successfully"];
 echo json_encode($e);
}}}
?>

