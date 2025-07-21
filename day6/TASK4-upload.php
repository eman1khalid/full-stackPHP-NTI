<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<div class="container mt-5">
<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
$folder="uploads/".date("Y-m-d")."/";
if(!file_exists($folder)){mkdir($folder,0777,true);}
$ex=pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
$newname=uniqid("img_",true).$ex;
$allowed=["image/jpeg","image/png"];
$target=$folder.time()."_".$newname;
if(in_array($_FILES["image"]["type"],$allowed)){
    move_uploaded_file($_FILES["image"]["tmp_name"],$target);
   ?> <div class="alert alert-success" role="alert">
  <?php echo "upload to $target";?>
</div>
<?php } else{ ?>
    <div class="alert alert-danger" role="alert">
     <?php echo "invaild type of image check it out ";?>
</div>

<?php } } ?></div>

