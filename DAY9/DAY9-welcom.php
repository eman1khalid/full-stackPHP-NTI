<?php session_start(); 
include("dp.php");?>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<?php

  if (isset($_SESSION['username']) && $_SESSION["logstate"]==true) {?>



<script src="js/bootstrap.bundle.min.js"></script>
<div class="container mt-5">
    <div class="row justify-content-center d-flex mt-5">
      <div class="col-6 mx-auto mt-5 container">
        <div class="card" style="width: 30rem;">

    <div class="alert alert-success" role="alert">
        ✅  welcome,Admin(<?=$_SESSION["username"]?> ) 
    </div>
    <p class="d-inline-flex gap-1">
    <a href="DAY9-logout.php" class="btn btn-primary active  col-md-4"   >Logout</a>
    <a href="DAY9-products.php" class="btn btn-primary active  col-md-4" ">products</a>
    <a href="DAY9-creataccount.php" class="btn btn-primary active  col-md-4" >creat account</a>


    </div>
      </div>

 </div>

    </div><?php }else{
      header("Location:DAY9-register.php");
      exit();
    }?>
