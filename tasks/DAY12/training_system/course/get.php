<?php 
if(isset($_GET["id"])){
$role=$_SESSION['role'];
$id=$_GET['id'];
/***********************/
$res=$course1->getid($id,$con);
if($res->num_rows>0){ 
$data =$res->fetch_assoc();
$course1->title=$data ['title'];
$course1->description=$data ["description"];
$course1->hours=$data ["hours"];
$course1->price=$data ["price"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","course"=> ["title"=>$course1->title,"description"=>$course1->description ,"hours"=>$course1->hours,"price"=>$course1->price] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"id not found"];
echo json_encode(array_map("htmlspecialchars",$e)); 
}}else{
/**************************/
$result=$course1->getall($con);
 $role=$_SESSION['role'];
 $data=["role"=>$role,"course"=>$result,"response"=>"Successful","massege"=>" successfully get data"];
 echo json_encode($data);
}