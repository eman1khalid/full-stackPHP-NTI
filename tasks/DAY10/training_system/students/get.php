<?php 
if(isset($_GET["id"])){
$role=$_SESSION['role'];
$id=$_GET['id'];
$stmt = mysqli_prepare($con,"SELECT  `id`, `name`, `email`, `phone`, `date_of_birth` FROM `students` WHERE id=?");
mysqli_stmt_bind_param($stmt, "i",$id);
mysqli_stmt_execute($stmt);
$res= mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($res)>0){
$student=mysqli_fetch_assoc($res);
$name=$student['name'];
$email=$student["email"];
$phone=$student["phone"];
$date=$student["date_of_birth"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","student"=> ["name"=>$name,"email"=>$email ,"phone"=>$phone,"date"=>$date] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"id not found"];
echo json_encode($e); 
}}else{
$student=[];
$data=mysqli_query($con,"SELECT  `id`, `name`, `email`, `phone`, `date_of_birth` FROM `students` WHERE 1");
 while($row=mysqli_fetch_assoc($data)){
  $student[]=$row;
 }
 $role=$_SESSION['role'];
 $data=["role"=>$role,"student"=>$student,"response"=>"Successful","massege"=>" successfully get data"];
 echo json_encode($data);
}