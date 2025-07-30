<?php
include("../index.php"); 
header("Content-Type: application/json");
if (isset($_SERVER["REQUEST_METHOD"])){
    $method=$_SERVER["REQUEST_METHOD"];
class student{
    public $name;
    public $email;
    public $phone;
    public $date_of_birth;
    public function getid($id,$con){
        $stmt =$con->prepare("SELECT  `id`, `name`, `email`, `phone`, `date_of_birth` FROM `students` WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $res=$stmt->get_result();
        return $res;
    }
    public function getall($con){
        $st=[];
        $data=$con->query("SELECT  `id`, `name`, `email`, `phone`, `date_of_birth` FROM `students` WHERE 1");
        while($row=$data->fetch_assoc()){
        $st[]=$row; }
        return $st;
    }
    public function delete($id,$con){
        $stmt = $con->prepare( "DELETE FROM `students` WHERE id= ?");
        $stmt->bind_param( "i", $id);
        $stmt->execute();

    }
    public function getemail($con){
        $stmt = $con->prepare( "SELECT * FROM `students` WHERE email=?");
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result= $stmt->get_result();
        return $result;
    }
   public function insert($con){
        $stmt = $con->prepare( "INSERT INTO `students`(`name`, `email`, `phone`, `date_of_birth`) VALUES (?,?,?,?)");
        $stmt->bind_param( "ssis", $this->name,$this->email,$this->phone,$this->date_of_birth);
        $stmt->execute();

   }
   public function update($id,$con){
        $stmt = $con->prepare("UPDATE `students` SET `name`=?,`email`=?,`phone`=?,`date_of_birth`=? WHERE id=?");
        $stmt->bind_param( "ssisi", $this->name,$this->email,$this->phone,$this->date_of_birth,$id);
        $stmt->execute();

   }

} 
$student1=new student();
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
