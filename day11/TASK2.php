<?php class Employee{
    public $name;
    protected $salary=100;
    private $bounus=25;
    
    public function read(){
        echo "name :".$this->name ." salary:". $this->salary ."bounus : ".$this->bounus;
    }
}
$t1=new Employee ();
$t1->name="eman";
$t1->read() ;?>