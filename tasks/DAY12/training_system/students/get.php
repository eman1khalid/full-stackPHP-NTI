<?php 
if(isset($_GET["id"])){
$role=$_SESSION['role'];
$id=$_GET['id'];
// $stmt = mysqli_prepare($con,"SELECT  `id`, `name`, `email`, `phone`, `date_of_birth` FROM `students` WHERE id=?");
// mysqli_stmt_bind_param($stmt, "i",$id);
// mysqli_stmt_execute($stmt);
// $res= mysqli_stmt_get_result($stmt);
 
$result =$student1->getid($id,$con);
if($result->num_rows>0){
$row=$result->fetch_assoc();
$student1->name=$row['name'];
$student1->email=$row["email"];
$student1->phone=$row["phone"];
$student1->date_of_birth=$row["date_of_birth"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","student"=> ["name"=>$student1->name,"email"=>$student1->email ,"phone"=>$student1->phone,"date"=>$student1->date_of_birth] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"id not found"];
echo json_encode(array_map("htmlspecialchars",$e)); 
}}else{
// $student=[];
// $data=mysqli_query($con,"SELECT  `id`, `name`, `email`, `phone`, `date_of_birth` FROM `students` WHERE 1");
//  while($row=mysqli_fetch_assoc($data)){
//   $student[]=$row;
//  }
 
$result=$student1->getall($con);

 $role=$_SESSION['role'];
 $e=["role"=>$role,"student"=>$result,"response"=>"Successful","massege"=>" successfully get data"];
 echo json_encode($e);
}