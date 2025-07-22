<?php
if(isset($_GET["loc"])){
    
        unlink($_GET["loc"]);
    

}
header("Location:DAY6-gallery.php");
    exit();
?>