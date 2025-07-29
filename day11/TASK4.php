<?php 
class vihicle{
    public $model;
    public $make;
   
    public function info(){
    echo "model".$this->model."make " .$this->make;
    }}
   
class car extends vihicle{
    public $fueltype;
    public function info(){
            echo "model :".$this->model."  make :" .$this->make." fueltype :".$this->fueltype;


    }
}
$car1 =new car();
$car1->fueltype="petrol";
$car1->model="Toyota";
$car1->make="japan";
$car1->info();
echo "<br><hr></br>";
//--------------------------------------------------
class bankaccount{
    private $balance=100;
    public function with($x){
        $this->balance-=$x;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function deposit($x){
        $this->balance+=$x;
    }
}
$account=new bankaccount();
$account->deposit(100);
echo $account->getBalance();
echo "</br>";
$account->with(50);
echo $account->getBalance();
echo "<br><hr></br>";
//----------------------------------------------
abstract class employee{
   abstract function calculatesalary($x);

}
class hourlyemployee {
    function calculatesalary($x){
        return $x*50 ;
    }}
$r= new hourlyemployee();
echo "salary of 3 hourse is: ".$r->calculatesalary(3);
echo "<br><hr></br>";
//----------------------------------------------
class shape{
    function draw(){
        echo "no select shape";
    }
}
class rectangle extends shape{
     function draw(){
         echo "shape is rectangle ";
     }

}
class cirlce extends shape{
     function draw(){
        echo "shape is cirlce ";
     }
}
$sh=[new shape(),new rectangle() ,new cirlce() ];
foreach($sh as $v ){
    $v->draw();
    echo "<br>";
}




