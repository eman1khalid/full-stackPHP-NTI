<?php
include("../index.php"); 
header("Content-Type: application/json");
if (isset($_SERVER["REQUEST_METHOD"])){
class course{
public $title;
public $description;
public $hours;
public $price;
public function getid($id,$con){
    $stmt = $con->prepare("SELECT  `title`, `description`, `hours`, `price` FROM `courses` WHERE id=?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $res=$stmt->get_result();
    return $res;
}
public function getall($con){
    $course=[];
    $data=$con->query("SELECT  `id`, `title`, `description`, `hours`, `price` FROM `courses` WHERE 1");
    while($row=$data->fetch_assoc()){
   $course[]=$row;
 } return $course;}
 public function delete($id,$con){
    $stmt = $con->prepare( "DELETE FROM `courses` WHERE id= ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

 }
 public function gettitle($con){
    $stmt =$con->prepare( "SELECT * FROM `courses` WHERE title=?");
    $stmt->bind_param( "s", $this->title);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
 }
 public function insert($con){
    $stmt = $con->prepare( "INSERT INTO `courses`(`title`, `description`, `hours`, `price`) VALUES (?,?,?,?)");
    $stmt->bind_param( "ssii", $this->title,$this->description,$this->hours,$this->price);
   $stmt->execute();

 }
 public function update($id,$con){
    $stmt = $con->prepare("UPDATE `courses` SET `title`=?,`description`=?,`hours`=?,`price`=? WHERE id=$id");
    $stmt->bind_param( "ssii",  $this->title,$this->description,$this->hours,$this->price);
    $stmt->execute();

 }






}
$course1=new course();
    $method=$_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "GET":
    include("get.php");
    break;
    case "POST":
    include("post.php");
    break;
    case "PUT":
    include("put.php");
    break;
    case 'DELETE':
    include("delete.php");;
    break;
    default:
    $e=["response"=>"fail","massege"=>"select method"];
    echo json_encode($e);
    break;
   



};

}
