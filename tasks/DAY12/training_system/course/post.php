<?php
if(isset($_SESSION["role"])){
if($_SESSION["role"]=="admin"){
$data=json_decode(file_get_contents("php://input"), true);
$course1->title=$data ['title'];
$course1->description=$data ["description"];
$course1->hours=$data ["hours"];
$course1->price=$data ["price"];
/****************************/
$result=$course1->gettitle($con);
if($result->num_rows>0){
  $e=["response"=>"fail","massege"=>"An course already exists with the same title."];
echo json_encode(array_map("htmlspecialchars",$e)); 
}else{
/******************************/
$course1->insert($con);
$e=["response"=>"Successful","massege"=>"✅add student successfully"];
echo json_encode(array_map("htmlspecialchars",$e)); 
}}}
?>

