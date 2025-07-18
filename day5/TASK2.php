<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<?php

if($_SERVER["REMOTE_ADDR"]=="127.0.0.1"){?>
<div class="container m-5">
    <div class="row ">
  <div class="alert alert-danger" role="alert">
  acsses denied :invalid host </br>
</div>
</div>
</div>


<?php
header("Location: denied.php");
exit();}
else{?>
<div class="container m-5">
    <div class="row ">
 <div class="alert alert-success" role="alert">
 acsses ok :good host "</br>"


</div>
</div>
</div>

<div class="container m-5">
    <div class="row ">

<?php 
 echo ($_SERVER["REMOTE_ADDR"]."</br>");
 echo $_SERVER["REQUEST_METHOD"]."</br>";
}
?>
</div>
</div>




 
