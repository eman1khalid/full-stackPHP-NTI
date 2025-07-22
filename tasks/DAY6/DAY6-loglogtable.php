<?php session_start(); ?>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<script src="js/bootstrap.bundle.min.js"></script>
<body>
    <style>
        body{
            background-color: pink;
        } </style>
    <nav  class="bg-info">
<ul class="nav nav-tabs ">
  <li class="nav-item">
   <a class="nav-link disabled" aria-disabled="true"><strong class="text-light" ><h5>Dashboard</h5></strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="DAY6-uploadproduct.php">Upload Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="DAY6-gallery.php">Gallery</a>
  </li>
<li class="nav-item">
    <a class="nav-link " href="DAY6-imagelogtable.php">image Log Table</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active " href="DAY6-loglogtable.php" >Log Log Table</a>
  </li>
  <li><a href="DAY6-logout.php" class="  nav-link  "   >logout</a></li>
</ul></nav>

<div class="container mt-5">
    <div class=" row ">


<table class="table table-striped table-hover">
  <div class="row">
    <thead>
    <tr>
      <th scope="col" class="col-md-3">DATE</th>
      <th scope="col" class="col-md-6">USER</th>
      <th scope="col" class="col-md-3">STATUS</th>
    </tr>
  </thead>
  <?php 
  if(isset($_SESSION["LOGLOG"])){
  ?>
  <tbody>
  <?php foreach($_SESSION["LOGLOG"] as $v){
    
    
    
    ?>
  
    <tr>
      <td class="col-md-3"><?=$v["date"]?></td>
      <td class="col-md-6"><?=$v["user"]?></td><?php 
      if($v["status"]=="FAIL"){?>
      <td class="bg-danger text-light p-2  col-md-3"><?=$v["status"]?></td> <?php }else{ ?>
        <td class="bg-success text-light p-2  col-md-3 "><?=$v["status"]?></td>
          </tr>
    <?php }
}} ?>
   
  </tbody>
</table>

</table>
 
    </div>  </div> </div> </div>
    