<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>
<?php 
$tax=fn($x,$y)=> $x*(1+$y);

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
         <li class="list-group-item"><span>total : </span> <?=total(2,3,15) ?></li>
         <li class="list-group-item"><span> tax : </span> <?= $tax(total(2,3,15),0.5); ?></li>
         <li class="list-group-item"><span> str_replace : </span> <?= str_replace("bad","***",strtolower($name)) ?></li>
        <li class="list-group-item"><span>strlen : </span> <?=strlen($name) ?></li>
        <li class="list-group-item"><span>substr : </span> <?=substr($name,0,10) ?></li>
        <li class="list-group-item"><span>ucfirst : </span> <?=ucfirst($name) ?></li>
        <li class="list-group-item"><span>substr : </span> <?=strtoupper($name) ?></li>
        
    </ul>


    </div>
</div>

<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<?php 

function total($x,$y,$z){
    return $x+$y+$z;
}

?>