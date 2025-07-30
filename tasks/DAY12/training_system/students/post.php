<?php
if(isset($_SESSION["role"])){
if($_SESSION["role"]=="admin"){
$data=json_decode(file_get_contents("php://input"), true);
$student1->name=$data["name"];
$student1->email=$data["email"];
$student1->phone=$data["phone"];
$student1->date_of_birth=$data["date"];

// $stmt = mysqli_prepare($con, "SELECT * FROM `students` WHERE email=?");
// mysqli_stmt_bind_param($stmt, "s", $email);
// mysqli_stmt_execute($stmt);
// $result = mysqli_stmt_get_result($stmt);
$result=$student1->getemail($con);
if($result->num_rows>0){
  $e=["response"=>"fail","massege"=>"An student already exists with the same email."];
  echo json_encode(array_map("htmlspecialchars",$e)); 
}else{
// $stmt = mysqli_prepare($con, "INSERT INTO `students`(`name`, `email`, `phone`, `date_of_birth`) VALUES (?,?,?,?)");
// mysqli_stmt_bind_param($stmt, "ssis", $name,$email,$phone,$date);
// mysqli_stmt_execute($stmt);
$student1->insert($con);
$e=["response"=>"Successful","massege"=>"✅add student successfully"];
 echo json_encode(array_map("htmlspecialchars",$e)); 
}}}
?>

