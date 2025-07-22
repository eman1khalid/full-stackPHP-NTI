<?php 
session_start(); 
$user= $_SESSION["name"];?>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<script src="js/bootstrap.bundle.min.js"></script>
<nav  class="bg-info">
<ul class="nav nav-tabs ">
  <li class="nav-item">
   <a class="nav-link disabled" aria-disabled="true"><strong class="text-light" ><h5>Dashboard</h5></strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="DAY6-uploadproduct.php">Upload Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="DAY6-gallery.php">Gallery</a>
  </li>
 <li class="nav-item">
    <a class="nav-link" href="DAY6-imagelogtable.php">image Log Table</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="DAY6-loglogtable.php" >Log Log Table</a>
  </li>
  <li><a href="DAY6-logout.php" class="  nav-link  "   >logout</a></li>
</ul></nav>


 <div class="container mt-5  p-4  ">
        <div class="row justify-content-center d-flex mt-5 "></div></div>
<h1>welcom to your Dashboard ,<?=$user?></h1>


