<?php
$data=json_decode(file_get_contents("php://input"), true);
if(isset($data['id'])){
$id=$data['id'];
/***************** */
$res=$course1->getid($id,$con);
if($res->num_rows==0){$e=["response"=>"fail","massege"=>"id not found"];}
else{
/***************** */
$course1->delete($id,$con);
$e=["response"=>"Successful","massege"=>"delet Successful"];}}else{
    $e=["response"=>"fail","massege"=>"select id "];
}
echo json_encode(array_map("htmlspecialchars",$e)); 

?>