<?php
$data=json_decode(file_get_contents("php://input"), true);
if(isset($data['email'])){
$email=$data['email'];
$s = mysqli_prepare($con, "SELECT * FROM `admin` WHERE email= ?");
mysqli_stmt_bind_param($s, "i", $email);
mysqli_stmt_execute($s);
$res=mysqli_stmt_get_result($s);
if(mysqli_num_rows($res)==0){$e=["response"=>"fail","massege"=>"email not found"];}
else{
$stmt = mysqli_prepare($con, "DELETE FROM `admin` WHERE email= ?");
mysqli_stmt_bind_param($stmt, "i", $email);
mysqli_stmt_execute($stmt);
$e=["response"=>"Successful","massege"=>"delet Successful"];}}else{
    $e=["response"=>"fail","massege"=>"select email "];
}
echo json_encode($e);
?>