<?php 
if(isset($_GET["id"])){
$role=$_SESSION['role'];
$id=$_GET['id'];
$stmt = mysqli_prepare($con,"SELECT courses.id AS course_id ,students.id AS student_id, students.name , courses.title , enrollments.grade ,enrollments.enrollment_date FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id
WHERE enrollments.id = ? ");
mysqli_stmt_bind_param($stmt, "i",$id);
mysqli_stmt_execute($stmt);
$res= mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($res)>0){
$Enrollment=mysqli_fetch_assoc($res);
$studentid=$Enrollment["student_id"];
$courseid=$Enrollment["course_id"];
$name=$Enrollment['name'];
$title=$Enrollment["title"];
$grade=$Enrollment["grade"];
$date=$Enrollment["enrollment_date"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","Enrollment"=> ["studentid"=>$studentid,"courseid"=>$courseid,"name"=>$name,"title"=>$title ,"grade"=>$grade,"date"=>$date] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"id not found"];
echo json_encode($e); 
}}else{
$Enrollment=[];
$data=mysqli_query($con,"SELECT  enrollments.id ,courses.id AS course_id ,students.id AS student_id, students.name , courses.title , enrollments.grade ,enrollments.enrollment_date FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id");
 while($row=mysqli_fetch_assoc($data)){
  $Enrollment[]=$row;
 }
 $student=[];
 $s=mysqli_query($con,"SELECT `id`, `name`, `email` FROM `students` WHERE 1");
 while($row=mysqli_fetch_assoc($s)){
  $student[]=$row;
 }
 $course=[];
 $c=mysqli_query($con,"SELECT  `id`, `title` FROM `courses` WHERE 1");
  while($row=mysqli_fetch_assoc($c)){
  $course[]=$row;
 }

 $role=$_SESSION['role'];
 $data=["role"=>$role,"Enrollment"=>$Enrollment,"response"=>"Successful","massege"=>" successfully get data","course"=>$course,"student"=>$student];
 echo json_encode($data);
}