<?php 
for($i=0;$i<=20;$i+=5){
    echo "$i<br/>";
}
for($i=0;$i<=20;$i++){
    $t=$i%5;
   echo(($t==0)? $i."<br/>":'');
}


?>
