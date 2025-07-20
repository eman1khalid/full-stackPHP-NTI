<?php session_start(); ?>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<?php

  if (isset($_SESSION['email'])) {
$emai = explode("@",$_SESSION["email"]);?>


<script src="js/bootstrap.bundle.min.js"></script>
<div class="container mt-5">
    <div class="row justify-content-center d-flex mt-5">
      <div class="col-6 mx-auto mt-5 container">
        <div class="card" style="width: 30rem;">

    <div class="alert alert-success" role="alert">
        ✅  welcome,Admin(<?=$emai[0]?> ) 
    </div>
    <p class="d-inline-flex gap-1">
    <a href="DAY5-logout.php" class="btn btn-primary active  col-md-4"   >Logout</a>
    <a href="DAY5-products.php" class="btn btn-primary active  col-md-4" ">products</a>
    <a href="DAY5-creataccount.php" class="btn btn-primary active  col-md-4" >creat account</a>


    </div>
      </div>

 </div>

    </div><?php }?>
