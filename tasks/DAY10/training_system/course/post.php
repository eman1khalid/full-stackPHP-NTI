<?php
if(isset($_SESSION["role"])){
if($_SESSION["role"]=="admin"){
$data=json_decode(file_get_contents("php://input"), true);
$title=$data["title"];
$description=$data["description"];
$hours=$data["hours"];
$price=$data["price"];
$stmt = mysqli_prepare($con, "SELECT * FROM `courses` WHERE title=?");
mysqli_stmt_bind_param($stmt, "s", $title);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result)>0){
  $e=["response"=>"fail","massege"=>"An course already exists with the same title."];
  echo json_encode($e);
}else{
$stmt = mysqli_prepare($con, "INSERT INTO `courses`(`title`, `description`, `hours`, `price`) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, "ssii", $title,$description,$hours,$price);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"✅add student successfully"];
 echo json_encode($e);
}}}
?>

