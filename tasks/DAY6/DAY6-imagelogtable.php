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
    <a class="nav-link active" href="DAY6-imagelogtable.php">image Log Table</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="DAY6-loglogtable.php" >Log Log Table</a>
  </li>
  <li><a href="DAY6-logout.php" class="  nav-link  "   >logout</a></li>
</ul></nav>
<div class="container mt-5">
    <div class=" row ">


<table class="table table-striped table-hover">
  <div class="row">
    <thead>
    <tr>
      <th scope="col" >DATE</th>
      <th scope="col" >USER</th>
      <th scope="col" >TYPE</th>
      <th scope="col" >Path</th>
      <th scope="col" >MIME</th>

    </tr>
  </thead>
  
  <tbody><?php 
   if(file_exists("uploads/")){
    $user=scandir("uploads/");foreach($user as $u){if($u != '.' && $u != '..'){
    $type=scandir("uploads/".$u."/");
    foreach($type as $t){if($t != '.' && $t != '..'){
    $images=glob("uploads/".$u."/".$t."/"."*.{jpg,png,jpeg}",GLOB_BRACE);
    foreach($images as $v){

    ?>
    
    
  
    <tr>
      <td><?=date("Y-m-d H:i:s", filemtime($v))?></td>
      <td><?=$u?></td>
      <td ><?=$t?></td> 
        <td ><?=$v?></td>
        <td ><?=mime_content_type($v)?></td>
          </tr>
    <?php  }} 
}}} }?>
   
  </tbody>
</table>

</table>
 
    </div>  </div> </div> </div>
    