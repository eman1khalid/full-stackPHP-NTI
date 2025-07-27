<?php
$data=json_decode(file_get_contents("php://input"), true);
if(isset($data['id'])){
$id=$data['id'];
$s = mysqli_prepare($con, "SELECT * FROM `courses` WHERE id= ?");
mysqli_stmt_bind_param($s, "i", $id);
mysqli_stmt_execute($s);
$res=mysqli_stmt_get_result($s);
if(mysqli_num_rows($res)==0){$e=["response"=>"fail","massege"=>"id not found"];}
else{
$stmt = mysqli_prepare($con, "DELETE FROM `courses` WHERE id= ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"delet Successful"];}}else{
    $e=["response"=>"fail","massege"=>"select id "];
}
echo json_encode($e);
?>