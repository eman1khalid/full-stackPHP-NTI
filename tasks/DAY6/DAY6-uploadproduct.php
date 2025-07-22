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
    <a class="nav-link active" aria-current="page" href="DAY6-uploadproduct.php">Upload Product</a>
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

    <div class="container mt-5">
    <div class=" row ">
    <?php if($_SERVER["REQUEST_METHOD"]=="POST"){
    $allowedtype=["image/jpg","image/png","image/jpeg"];
    $ex=pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    $newname=uniqid("img_",true).".".$ex;
    if(!in_array($_FILES["image"]["type"],$allowedtype)){?>
        <div class="alert alert-danger" role="alert">
         please upload image
        </div>
    <?php }else{
        $folder="uploads/".$_SESSION["name"]."/".$_POST["type"]."/";
        if(!file_exists($folder)){mkdir($folder,0777,true);}
        move_uploaded_file($_FILES["image"]["tmp_name"],$folder.$newname);
        ?>
         <div class="alert alert-success" role="alert">
         <?php echo "image uploaded";?>
         </div><?php
         
         


    }
    
}?>




    
   
     <div class="container mt-5">
    <div class=" row ">
    <div class="card border-light mb-3">
    <div class="card-header ">
          <form method="POST" class="was-validated " enctype="multipart/form-data">
          <div class="d-flex">
          <div class="col-md-4 mt-5">
          <input type="file" name="image" class="form-control" aria-label="file example" required >
         </div>
          <div class="  mt-5 col-md-4">
             <select class="form-select is-invalid col-md-4"  name="type" required>
             <option selected disabled value="">choose type...</option>
             <option value="avatar">avatar</option>
             <option value="product">product</option>
             </select></div>
          <div class="col-md-3  mt-5 ">
          <button type="submit" class="btn btn-primary w-100">add product</button>
          </div></div>
          </form>
          <div class="row">
           <a href="DAY6-logout.php" class="  col-md-1  "   >logout</a>
           <a href="DAY6-gallery.php" class="  col-md-1  "   >go gallery</a>
           </div>

        </div>

 