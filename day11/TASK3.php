<?php 
class course{
    private $title;
    private $instructor;
    function __construct($x,$y){
        $this->title=$x;
        $this->instructor=$y;
    
    } 
    public function describe(){
    echo "title".$this->title."instractor " .$this->instructor;
    }}
   
$t1=new course ("php","ahmed");

$t1->describe() ;?>