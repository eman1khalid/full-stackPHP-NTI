<?php
if(isset($_SESSION["role"])){
if($_SESSION["role"]=="admin"){
$data=json_decode(file_get_contents("php://input"), true);
$name=$data["name"];
$title=$data["title"];
$grade=$data["grade"];
$date=$data["enrollment_date"];
$stmt = mysqli_prepare($con, "SELECT `id`, `student_id`, `course_id`, `grade`, `enrollment_date` FROM `enrollments` WHERE student_id=? AND course_id=?");
mysqli_stmt_bind_param($stmt, "ii", $name,$title);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($result)>0){
  $e=["response"=>"fail","massege"=>"An enrollment already exists ."];
  echo json_encode($e);
}else{
$stmt = mysqli_prepare($con, "INSERT INTO `enrollments`( `student_id`, `course_id`, `grade`, `enrollment_date`) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, "iiis", $name,$title,$grade,$date);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"✅add enrollments successfully"];
 echo json_encode($e);
}}}
?>

