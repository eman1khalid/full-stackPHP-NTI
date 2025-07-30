<?php
$data=json_decode(file_get_contents("php://input"), true);
if(isset($data['id'])&&isset($data["title"])){
$id=$data['id'];
$title=$data["title"];
/**************************/
$res=$enrollment1->getid($id,$con);
/****************************/
$re=$enrollment1->gettitle($title,$con);
$row=$re->fetch_assoc();
if(mysqli_num_rows($res)==0 || mysqli_num_rows($re)==0){$e=["response"=>"fail","massege"=>"id or title  not found"];}
else{
/****************************/
$enrollment1->delete($id,$row["id"],$con);
$e=["response"=>"Successful","massege"=>"delet Successful"];}}else{
    $e=["response"=>"fail","massege"=>"select id and title "];
}
echo json_encode(array_map("htmlspecialchars",$e)); 
?>