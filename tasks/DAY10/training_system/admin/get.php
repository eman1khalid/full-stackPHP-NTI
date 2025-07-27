<?php 
if(isset($_GET["email"])){
$role=$_SESSION['role'];
$email=$_GET['email'];
$stmt = mysqli_prepare($con,"SELECT `username`, `email`, `role` FROM `admin` WHERE email=?");
mysqli_stmt_bind_param($stmt, "s",$email);
mysqli_stmt_execute($stmt);
$res= mysqli_stmt_get_result($stmt);
if(mysqli_num_rows($res)>0){
$admin=mysqli_fetch_assoc($res);
$username=$admin['username'];
$email=$admin["email"];
$role=$admin["role"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","admin"=> ["username"=>$username,"email"=>$email ,"role"=>$role ] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"email not found"];
echo json_encode($e); 
}}else{
$admin=[];
$data=mysqli_query($con,"SELECT `username`, `email`, `role` FROM `admin` WHERE 1");
 while($row=mysqli_fetch_assoc($data)){
  $admin[]=$row;
 }
 $role=$_SESSION['role'];
 $data=["role"=>$role,"admin"=>$admin,"response"=>"Successful","massege"=>" successfully get data"];
 echo json_encode($data);
}