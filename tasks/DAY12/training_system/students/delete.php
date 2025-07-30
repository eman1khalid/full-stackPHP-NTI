<?php
$data=json_decode(file_get_contents("php://input"), true);
if(isset($data['id'])){
$id=$data['id'];
$result =$student1->getid($id,$con);
if($result->num_rows==0){
$e=["response"=>"fail","massege"=>"id not found"];}
else{
// $stmt = mysqli_prepare($con, "DELETE FROM `students` WHERE id= ?");
// mysqli_stmt_bind_param($stmt, "i", $id);
// mysqli_stmt_execute($stmt);
$student1->delete($id,$con);
$e=["response"=>"Successful","massege"=>"delet Successful"];}}else{
    $e=["response"=>"fail","massege"=>"select id "];
}
echo json_encode(array_map("htmlspecialchars",$e));
?>