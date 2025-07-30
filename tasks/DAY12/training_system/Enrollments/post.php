<?php
if(isset($_SESSION["role"])){
if($_SESSION["role"]=="admin"){
$data=json_decode(file_get_contents("php://input"), true);
$enrollment1->studentid=$data["name"];
$enrollment1->courseid=$data["title"];
$enrollment1->grade=$data["grade"];
$enrollment1->date=$data["enrollment_date"];
/*******************/
$result=$enrollment1->getusetwoid($enrollment1->studentid,$enrollment1->courseid,$con);
if(mysqli_num_rows($result)>0){
  $e=["response"=>"fail","massege"=>"An enrollment already exists ."];
echo json_encode(array_map("htmlspecialchars",$e)); 
}else{
/************************/
$enrollment1->insert($con);
$e=["response"=>"Successful","massege"=>"✅add enrollments successfully"];
echo json_encode(array_map("htmlspecialchars",$e)); 
}}}
?>

