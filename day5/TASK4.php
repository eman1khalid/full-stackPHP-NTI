<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>
<?php 

isset($_POST["name"])? $name=$_POST["name"]:$name='';
isset($_POST["email"])? $email=$_POST["email"]:$email='';
isset($_POST["age"])?$age= $_POST["age"]:$age='';
isset($_POST["city"])? $city=$_POST["city"]:$city='';
$cou=count(explode(".", $_FILES["image"]["name"]))-1;
$exp=explode(".", $_FILES['image']['name'])[$cou];
$vaild=["jpg","jpeg","png"];
$n=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
if(in_array($exp,$vaild)&& explode ("/",$_FILES['image']['type'])[0]=='image'){
move_uploaded_file("$tmp","img/$n");
?>
<div class="container">
    <div class="row">

        
        <?php 
        echo "<img src='img/$n' class='card-img-top' >"; 
        ?>
        <h1 class="text-center" >user profile</h1>
        <div class="alert alert-success" role="alert">
        welcom , <?=explode(" ", $name)[0]?> !
        </div>
        <ul class="list-group">
         <li class="list-group-item"><span>full name : </span> <?=$name ?></li>
         <li class="list-group-item"><span>email : </span> <?=$email ?></li>
         <li class="list-group-item"><span> age : </span> <?= $age ?></li>
         <li class="list-group-item"><span> city : </span> <?= $city ?></li>

        </ul>

    </div>
</div>
<?php }
else{?>
    <div class="alert alert-success" role="alert">
        welcom , <?php echo "eror please enter img jpg,jped";?> !
        </div>

<?php }?>




 
