<?php 
$con=mysqli_connect("localhost","root","","training_system",4306);
$id=1;
$r=mysqli_prepare($con,"SELECT * FROM `students` WHERE id=?");
mysqli_stmt_bind_param($r,"i",$id);
mysqli_stmt_execute($r);
$x=mysqli_stmt_get_result($r);
$r=mysqli_fetch_assoc($x);
echo $r["name"];