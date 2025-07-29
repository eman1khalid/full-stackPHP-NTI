<?php 
class student{
    public $name;
    public $age;
    public $email;
    private $isactive;
    function __construct($n,$a,$e){
        $this->name=$n;
        $this->age=$a;
        $this->email=$e;
    }
    function activate(){
     $this->isactive=true;
    }
    function getstatus(){
        return $this->isactive?true:false;

    }
    function sjson(){
        $s=["name"=>$this->name ,"age"=>$this->age ,"email"=>$this->email ,"status"=>$this->getstatus()];
        return json_encode($s);
    }
}

if($_SERVER["REQUEST_METHOD"]){
$data=json_decode(file_get_contents("php://input"),true);
$s=new student($data["name"],$data["age"],$data["email"]);
$status=$s->getstatus();
$welcom="";
if($s->getstatus()){
    $welcom="wlcome ".$s->name;}
    echo json_encode(["status"=>$status,"welcome"=>$welcom]);
    

$s->activate();
$status=$s->getstatus();
if($s->getstatus()){
    $welcom="wlcome ".$s->name;}
echo json_encode(["status"=>$status,"welcome"=>$welcom]);
echo sjson();
}




