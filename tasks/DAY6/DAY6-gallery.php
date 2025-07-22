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
    <a class="nav-link active" href="DAY6-gallery.php">Gallery</a>
  </li>
<li class="nav-item">
    <a class="nav-link" href="DAY6-imagelogtable.php">image Log Table</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="DAY6-loglogtable.php" >Log Log Table</a>
  </li>
  <li><a href="DAY6-logout.php" class="  nav-link  "   >logout</a></li>
</ul></nav>
 <div class="container mt-5">
    <div class=" row ">


<table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">image</th>
      <th scope="col">name</th>
      <th scope="col">type</th>
      <th scope="col">size</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        if(file_exists("uploads/".$_SESSION["name"]."/")){
         $folders=scandir("uploads/".$_SESSION["name"]."/");
         foreach($folders as $f){
        $images=glob("uploads/".$_SESSION["name"]."/".$f."/"."*.{jpg,png,jpeg}",GLOB_BRACE);
         foreach($images as $v ){
          ?>
         
    
  
    <tr>
      <td>  <img src=<?=$v?> class='img-thumbnail m-2' width='150'></td>
      <td><?=explode("/",$v)[count(explode("/",$v))-1]?></td>
      <td><?=explode(".",$v)[count(explode(".",$v))-1]?></td>
      <td><?=filesize($v)?></td>
      <td><a href="DAY6-delet.php?loc=<?=$v?>" class="btn btn-danger active mt-5  col-md-6"   >clear</a></td>
    </tr>
    <?php }
}} ?>
   
  </tbody>
</table>

</table>
 <div class="row">
           <a href="DAY6-logout.php" class="  col-md-1  "   >logout</a>
           <a href="DAY6-uploadproduct.php" class="  col-md-2  "   >back to upload</a>
           </div>
    </div>  </div> </div> </div>
    