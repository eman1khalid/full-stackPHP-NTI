<?php 
if(isset($_GET["id"])){
$role=$_SESSION['role'];
$id=$_GET['id'];
$stmt = mysqli_prepare($con,"SELECT  `title`, `description`, `hours`, `price` FROM `courses` WHERE id=?");
mysqli_stmt_bind_param($stmt, "i",$id);
mysqli_stmt_execute($stmt);
$res= mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($res)>0){
$course=mysqli_fetch_assoc($res);
$title=$course['title'];
$description=$course["description"];
$hours=$course["hours"];
$price=$course["price"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","course"=> ["title"=>$title,"description"=>$description ,"hours"=>$hours,"price"=>$price] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"id not found"];
echo json_encode($e); 
}}else{
$course=[];
$data=mysqli_query($con,"SELECT  `id`, `title`, `description`, `hours`, `price` FROM `courses` WHERE 1");
 while($row=mysqli_fetch_assoc($data)){
  $course[]=$row;
 }
 $role=$_SESSION['role'];
 $data=["role"=>$role,"course"=>$course,"response"=>"Successful","massege"=>" successfully get data"];
 echo json_encode($data);
}