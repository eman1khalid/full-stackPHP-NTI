<?php

$data=json_decode(file_get_contents("php://input"), true);
if(isset($data["id"])){
$name=$data["name"];
$title=$data["title"];
$grade=$data["grade"];
$date=$data["date"];
$id=$data["id"];
$role=$_SESSION["role"];
$stmt = mysqli_prepare($con,"UPDATE `enrollments` SET `student_id`=? ,`course_id`=?,`grade`=?,`enrollment_date`=? WHERE id= ?");
mysqli_stmt_bind_param($stmt, "iiisi", $name,$title,$grade,$date,$id);
mysqli_stmt_execute($stmt);
$e=["role"=>$role,"response"=>"Successful","massege"=>"✅edit enrollments successfully"];
 echo json_encode($e);
} else {
  $e=["response"=>"fail","massege"=>"error reqiuerd id "];
   echo json_encode($e);
  
}

