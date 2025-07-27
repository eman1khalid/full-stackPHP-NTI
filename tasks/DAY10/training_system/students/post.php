<?php
if(isset($_SESSION["role"])){
if($_SESSION["role"]=="admin"){
$data=json_decode(file_get_contents("php://input"), true);
$name=$data["name"];
$email=$data["email"];
$phone=$data["phone"];
$date=$data["date"];
$stmt = mysqli_prepare($con, "SELECT * FROM `students` WHERE email=?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result)>0){
  $e=["response"=>"fail","massege"=>"An student already exists with the same email."];
  echo json_encode($e);
}else{
$stmt = mysqli_prepare($con, "INSERT INTO `students`(`name`, `email`, `phone`, `date_of_birth`) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, "ssis", $name,$email,$phone,$date);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"✅add student successfully"];
 echo json_encode($e);
}}}
?>

