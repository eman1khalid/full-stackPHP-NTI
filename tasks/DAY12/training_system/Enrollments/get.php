<?php 
if(isset($_GET["id"])){
$role=$_SESSION['role'];
$id=$_GET['id'];
/********************/
$res=$enrollment1->getid($id,$con);
if($res->num_rows>0){
$Enrollment=$res->fetch_assoc();
$enrollment1->studentid=$Enrollment["student_id"];
$enrollment1->courseid=$Enrollment["course_id"];
$enrollment1->name=$Enrollment['name'];
$enrollment1->title=$Enrollment["title"];
$enrollment1->grade=$Enrollment["grade"];
$enrollment1->date=$Enrollment["enrollment_date"];
$e=["role"=>$role,"response"=>"Successful","massege"=>" successfully get data","Enrollment"=> ["studentid"=>$enrollment1->studentid,"courseid"=>$enrollment1->courseid,"name"=>$enrollment1->name,"title"=>$enrollment1->title ,"grade"=>$enrollment1->grade,"date"=>$enrollment1->date] ];
 echo json_encode($e);
}
else {
$e=["role"=>$role,"response"=>"fail","massege"=>"id not found"];
echo json_encode(array_map("htmlspecialchars",$e)); 
}}else{
/******************************/
$Enrollment=$enrollment1->getallenrollment($con);
$course=$enrollment1->getallcourse($con);
$student=$enrollment1->getallstudent($con);
 $role=$_SESSION['role'];
 $data=["role"=>$role,"Enrollment"=>$Enrollment,"response"=>"Successful","massege"=>" successfully get data","course"=>$course,"student"=>$student];
 echo json_encode($data);
}