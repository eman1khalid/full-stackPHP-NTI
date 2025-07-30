<?php 
$con=new mysqli("localhost","root","","training_system",4306);
$id=1;
$result=$con->prepare("SELECT * FROM `students` WHERE id=?");
$result->bind_param("i",$id);
$result->execute();
$x=$result->get_result();
$row=$x->fetch_assoc();
echo $row["name"];