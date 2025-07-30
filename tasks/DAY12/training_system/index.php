<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
class DB{
    private $local="localhost";
    private $root="root";
    private $password="";
    public $database="";
    public $port=4306;
 function conn($x){
    $this->database=$x;
    
   $c= new mysqli($this->local,$this->root,$this->password,$this->database,$this->port);
   if($c->connect_error){
    die("fail connection ");
   }
   return $c;

 }
}
$connection=new DB();
$con=$connection->conn("training_system");

