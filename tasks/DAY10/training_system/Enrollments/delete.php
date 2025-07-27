<?php
$data=json_decode(file_get_contents("php://input"), true);
if(isset($data['id'])&&isset($data["title"])){
$id=$data['id'];
$title=$data["title"];
$s = mysqli_prepare($con, "SELECT * FROM `enrollments` WHERE student_id= ?");
mysqli_stmt_bind_param($s, "i", $id);
mysqli_stmt_execute($s);
$res=mysqli_stmt_get_result($s);
$corse=mysqli_prepare($con,"SELECT * FROM `courses` WHERE title= ?");
mysqli_stmt_bind_param($corse, "s", $title);
mysqli_stmt_execute($corse);
$re=mysqli_stmt_get_result($corse);
$row=mysqli_fetch_assoc($re);
if(mysqli_num_rows($res)==0 || mysqli_num_rows($re)==0){$e=["response"=>"fail","massege"=>"id or title  not found"];}
else{
$stmt = mysqli_prepare($con, "DELETE FROM `enrollments` WHERE student_id= ? AND course_id=?");
mysqli_stmt_bind_param($stmt, "ii", $id,$row["id"]);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"delet Successful"];}}else{
    $e=["response"=>"fail","massege"=>"select id and title "];
}
echo json_encode($e);
?>