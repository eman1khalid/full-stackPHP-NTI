<?php 
trait timestampable{
    function currenttimestamp(){
        echo date("Y-m-d h:i:s");
    }
}

class order {
    use timestampable;
    function printt(){
       return $this->currenttimestamp();
    }
}
class invoice{
    use timestampable;
    function printt(){
       return $this->currenttimestamp();
    }

}
$o=new order();
echo $o->printt();
echo "</br>";
$i=new invoice();
echo $i->printt();
