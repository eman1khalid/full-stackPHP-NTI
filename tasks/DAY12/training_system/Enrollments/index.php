<?php
include("../index.php"); 
header("Content-Type: application/json");
if (isset($_SERVER["REQUEST_METHOD"])){
class enrollment{
    public  $studentid;
    public $courseid;
    public $grade;
    public $date;
    public $name;
    public $title;
    public function getid($id,$con){
        $stmt = $con->prepare("SELECT courses.id AS course_id ,students.id AS student_id, students.name , courses.title , enrollments.grade ,enrollments.enrollment_date
        FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id WHERE enrollments.id = ? ");
        $stmt->bind_param( "i",$id);
        $stmt->execute();
        $res= $stmt->get_result();
        return $res;
   }
   public function gettitle($title,$con){
        $corse=$con->prepare("SELECT * FROM `courses` WHERE title= ?");
        $corse->bind_param( "s", $title);
        $corse->execute();
        $re=$corse->get_result();
        
        return $re;
   }
   public function getallenrollment($con){
        $Enrollment=[];
        $data=$con->query("SELECT  enrollments.id ,courses.id AS course_id ,students.id AS student_id, students.name , courses.title , enrollments.grade ,enrollments.enrollment_date FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id");
        while($row=$data->fetch_assoc()){
        $Enrollment[]=$row;}
        return $Enrollment;
    }
    public function getallstudent($con){
        $student=[];
        $s=$con->query("SELECT `id`, `name`, `email` FROM `students` WHERE 1");
        while($row=$s->fetch_assoc()){
        $student[]=$row;}
        return $student;
    }
    public function getallcourse($con){
        $course=[];
        $c=$con->query("SELECT  `id`, `title` FROM `courses` WHERE 1");
        while($row=$c->fetch_assoc()){
        $course[]=$row;}
        return $course;
    }
    public function delete($sid,$cid,$con){
        $stmt =$con->prepare( "DELETE FROM `enrollments` WHERE student_id= ? AND course_id=?");
        $stmt->bind_param( "ii", $sid,$cid);
        $stmt->execute();

    }
    public function getusetwoid($sid,$cid,$con){
        $stmt = $con->prepare( "SELECT `id`, `student_id`, `course_id`, `grade`, `enrollment_date` FROM `enrollments` WHERE student_id=? AND course_id=?");
        $stmt->bind_param( "ii", $sid,$cid);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;

    }
    public function insert($con){
        $stmt =$con->prepare( "INSERT INTO `enrollments`( `student_id`, `course_id`, `grade`, `enrollment_date`) VALUES (?,?,?,?)");
        $stmt->bind_param( "iiis", $this->studentid,$this->courseid,$this->grade,$this->date);
        $stmt->execute();

    }
    public function update($id,$con){
        $stmt = $con->prepare("UPDATE `enrollments` SET `student_id`=? ,`course_id`=?,`grade`=?,`enrollment_date`=? WHERE id= ?");
        $stmt->bind_param( "iiisi", $this->studentid,$this->courseid,$this->grade,$this->date,$id);
        $stmt->execute();

    }

}
$enrollment1=new enrollment();
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
    include("delete.php");
    break;
    default:
    $e=["response"=>"fail","massege"=>"select method"];
    echo json_encode($e);
    break;
   



};

}
