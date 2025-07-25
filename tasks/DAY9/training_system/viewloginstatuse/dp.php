<?php require("../index.php");
require("../navbar.php");?>
<div class="container mt-5">
    <div class=" row "> 
    
        <table class="table table-striped table-hover mt-5">
  <div class="row">
    <thead>
    <tr>
      
      <th scope="col" >Email</th>
      <th scope="col" >status</th>

    </tr>
  </thead>  <tbody><?php

 $data=mysqli_query($con,"SELECT  `email`, `state` FROM `log` WHERE 1");
 while($row=mysqli_fetch_assoc($data)){ ?>
    <tr>
      <td><?=$row["email"]?></td>
      <td ><?=$row["state"]?></td> 
          </tr>


<?php


 }?>
