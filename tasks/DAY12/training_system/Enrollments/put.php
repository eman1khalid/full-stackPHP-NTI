<?php

$data=json_decode(file_get_contents("php://input"), true);
if(isset($data["id"])){
$enrollment1->studentid=$data["name"];
$enrollment1->courseid=$data["title"];
$enrollment1->grade=$data["grade"];
$enrollment1->date=$data["date"];
$id=$data["id"];
$role=$_SESSION["role"];
/***********************************/
$enrollment1->update($id,$con);
$e=["role"=>$role,"response"=>"Successful","massege"=>"✅edit enrollments successfully"];
echo json_encode(array_map("htmlspecialchars",$e)); 
} else {
  $e=["response"=>"fail","massege"=>"error reqiuerd id "];
echo json_encode(array_map("htmlspecialchars",$e)); 
  
}

