<?php session_start(); ?>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<div class="container mt-5">
    <div class=row>
        <div class="card border-light mb-3">
        <div class="card-header">

      <form method="POST" enctype="multipart/form-data">
        <div class="d-flex">
      <div class="col-md-6 mt-5">
      <label for="validationCustom01" class="form-label">product name</label>
      <input type="text" class="form-control" name="name" id="validationCustom01"  required>
      </div>
     <div class="col-md-6 mt-5">
    <label for="validationCustom01" class="form-label">Description</label>
    <input type="text" class="form-control" id="validationCustom01"  name="description" required>
    </div>  
    </div>
    <div class="col-md-12 mt-5">
    <input type="file" name="image[]" class="form-control" aria-label="file example" required multiple>
    </div>
    <div class="col-6 mx-auto mt-5 container">
    <button type="submit" class="btn btn-primary w-100">add product</button>
    </div>
    </form>

        </div>

        <div class="card-body d-flex">
        <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          $n=$_POST["name"];
          $d=$_POST["description"];
         $name=$_FILES ["image"] ["name"];
         $cou=count($name);
         $type=$_FILES ["image"] ["type"];
         $i=0;
         foreach($name as $val):
         $cou1=count(explode(".",$val));
         $ex=explode(".",$val)[$cou1-1];
         $allowed=["jpg","jped","png","jpeg"];
         $size=$_FILES["image"]["size"][$i];
         $type1=explode("/",$type[$i]);
         $allowedtype=["image","wave"];
         $tmp=$_FILES["image"]["tmp_name"][$i];
         if(!in_array($ex,$allowed)){?>
         <div class="alert alert-warning" role="alert">
         **Check the file type, it must be jpg or jped 
         Error in the file <?php echo $i;
         } else if(!in_array($type1[0],$allowedtype)){?>
         **Check the file type, it must be img  or wave 
         Error in the file <?php echo $i; }else if($size>=4000000000){?>
         File size <?php echo $i;?> large please upload files less than 4GB
         </div>
         <?php }else {
          move_uploaded_file($tmp, "img/$val");?>
          <div class="card col-md-4">
          <?php echo "<img src='img/$val' class='card-img-top' >";?>
          <div class="card-body">
          <h5 class="card-title"><?=$n?></h5>
          <p class="card-text"><?=$d?></p>
          <span>added by </span><a href="#" ><?=$_SESSION["email"]?></a>
         </div>
         </div>

          


        <?php  
        }
         $i+=1;
         endforeach;} 
    


    
 








?>