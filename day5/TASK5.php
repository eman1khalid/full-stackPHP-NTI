<html>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <style>
        body{
            background-color: orange;
        }
    </style>

   

    </div>
    </div>
     <div class="container mt-5    ">
        <div class="row justifiy-content-center d-flex mt-5">
          <h1 class ="text-center text-light mt-3">user information</h1>
          <form class="was-validated " method="POST" enctype="multipart/form-data">
            <div class="mb-5 mt-3">
           
             <div class="mb-5">
             <label for="img" class="form-label text-light fw-bold">Choose Images </label>
             <input type="file" id="img"  name="image[ ]" class="form-control"  required multiple>
             <div class="invalid-feedback">please select file </div>
             </div>
              <div class="col-12">
             <input class="btn btn-primary mt-2 text-light text-center p- w-100" type="submit">Submit form</button>
              </div>
          </form>

        </div>
    </div>

 
<?php 
 $name=$_FILES ["image"] ["name"];
 
 $cou=count($name);
 $type=$_FILES ["image"] ["type"];
 $i=0;
 foreach($name as $val):
 $cou1=count(explode(".",$val));
 $ex=explode(".",$val)[$cou1-1];
 $allowed=["jpg","jped"];
 $size=$_FILES["image"]["size"][$i];
 $type1=explode(".",$type[$i]);
 $allowedtype=["image","wave"];
 $tmp=$_FILES["image"]["tmp_name"][$i];
 if(!in_array($ex,$allowed)){?>
<div class="alert alert-warning" role="alert">
**Check the file type, it must be jpg or jped 
Error in the file <?php echo $i;
} else if(in_array($type1,$allowedtype)){?>
**Check the file type, it must be img  or wave 
Error in the file <?php echo $i; }else if($size>=4000000000){?>
File size <?php echo $i;?> large please upload files less than 4GB
</div>
<?php }else {
          move_uploaded_file($tmp, "img/$val");
          echo "<img src='img/$val[0]' class='img-thumbnail m-2' width='150'>";

}
$i+=1;
  endforeach; ?>
    

 








?>