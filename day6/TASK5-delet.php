<?php
if(isset($_GET["loc"])){
    
        unlink($_GET["loc"]);
    

}
header("Location:TASK5.PHP");
    exit();
?>