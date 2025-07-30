<?php

$data=json_decode(file_get_contents("php://input"), true);
if(isset($data["id"])){
    $student1->name=$data["name"];
    $student1->email=$data["email"];
    $student1->phone=$data["phone"];
    $student1->date_of_birth=$data["date"];
    $id=$data["id"];
    $role=$_SESSION["role"];
    $student1->update($id,$con);
    $e=["role"=>$role,"response"=>"Successful","massege"=>"✅edit student successfully"];
    echo json_encode(array_map("htmlspecialchars",$e)); 
} else {
    $e=["response"=>"fail","massege"=>"error reqiuerd id "];
    echo json_encode(array_map("htmlspecialchars",$e)); 
  
}

