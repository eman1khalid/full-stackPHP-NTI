<?php

$data=json_decode(file_get_contents("php://input"), true);
if(isset($data["id"])){
$course1->title=$data ['title'];
$course1->description=$data ["description"];
$course1->hours=$data ["hours"];
$course1->price=$data ["price"];
$id=$data["id"];
$role=$_SESSION["role"];
/************************************/
$course1->update($id,$con);
$e=["role"=>$role,"response"=>"Successful","massege"=>"✅edit course successfully"];
echo json_encode(array_map("htmlspecialchars",$e)); 
} else {
  $e=["response"=>"fail","massege"=>"error reqiuerd id "];
echo json_encode(array_map("htmlspecialchars",$e)); 
  
}

