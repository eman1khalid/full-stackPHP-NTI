<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>
<?php 
$name=isset($_GET["name"])? $_GET["name"]:'';
$email=isset($_GET["email"])? $_GET["email"]:'';
$age=isset($_GET["age"])? $_GET["age"]:'';
$city=isset($_GET["city"])? $_GET["city"]:'';?>
<div class="container">
    <div class="row">
        <h1 class="text-center" >user profile</h1>
        <div class="alert alert-success" role="alert">
        welcom , <?=explode(" ", $name)[0]?> !
        </div>
        <ul class="list-group">
         <li class="list-group-item"><span>full name : </span> <?=$name ?></li>
         <li class="list-group-item"><span>email : </span> <?=$email ?></li>
         <li class="list-group-item"><span> age : </span> <?= $age ?></li>
         <li class="list-group-item"><span> city : </span> <?= $city ?></li>
        </ul>












    </div>
</div>


