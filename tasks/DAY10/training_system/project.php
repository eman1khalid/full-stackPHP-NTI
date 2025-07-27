<?php
require("index.php");

header("Content-Type: application/json");
if(!isset($_SESSION["role"])){ header("Location:register.html"); exit; } else{
 $student=mysqli_query($con,"SELECT * FROM `students` WHERE 1");
 $course=mysqli_query($con,"SELECT * FROM `courses` WHERE 1");
 $enrollment=mysqli_query($con,"SELECT enrollments.id ,students.NAME , courses.title , enrollments.grade ,enrollments.enrollment_date FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id");
 // num_rows mysqli_num_rows
 $students=mysqli_num_rows( $student);
 $courses=mysqli_num_rows( $course);
$enrollments=mysqli_num_rows( $enrollment);
$data=[ "student"=>$students,"course"=>$courses,"enrollment"=>$enrollments];
echo json_encode($data);



}
?>

  