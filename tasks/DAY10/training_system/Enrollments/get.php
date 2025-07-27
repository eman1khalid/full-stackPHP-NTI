<?php 
if(isset($_GET["id"])){
$role=$_SESSION['role'];
$id=$_GET['id'];
$stmt = mysqli_prepare($con,"SELECT students.id , students.name , courses.title , enrollments.grade ,enrollments.enrollment_date FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id ");
mysqli_stmt_bind_param($stmt, "i",$id);
mysqli_stmt_execute($stmt);
$res= mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($res)>0){
$Enrollment=mysqli_fetch_assoc($res);
$name=$Enrollment['name'];
$email=$Enrollment["email"];
$phone=$Enrollment["phone"];
$date=$Enrollment["date_of_birth"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","Enrollment"=> ["name"=>$name,"email"=>$email ,"phone"=>$phone,"date"=>$date] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"id not found"];
echo json_encode($e); 
}}else{
$Enrollment=[];
$data=mysqli_query($con,"SELECT students.id , students.name , courses.title , enrollments.grade ,enrollments.enrollment_date FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id ");
 while($row=mysqli_fetch_assoc($data)){
  $Enrollment[]=$row;
 }
 $role=$_SESSION['role'];
 $data=["role"=>$role,"Enrollment"=>$Enrollment,"response"=>"Successful","massege"=>" successfully get data"];
 echo json_encode($data);
}