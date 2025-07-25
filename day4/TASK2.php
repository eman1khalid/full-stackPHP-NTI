<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>
<?php 
$ad=["Name"=>"Mona Hassan","jop title" =>"Fronted","Department" =>"UI/UX","Salary"=>"15,000 EGP"];?>




<div class='container mt-5'>
<div class='row'>
<ul class='list-group'>
    <?php foreach($ad as $t=>$v):?>
 <li class='list-group-item'> <?php echo ("<strong>".$t ." :  </strong>".$v); ?> </li>
<?php endforeach;?>

</ul>
</div>
</div>
<?php


?>








