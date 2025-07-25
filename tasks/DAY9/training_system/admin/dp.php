<?php require("../index.php");
require("../navbar.php");?>
<div class="container mt-5">
    <div class=" row "> <?php 
      if($_SESSION["role"]=="admin"){ ?>
    <a href="add_admin.php" class="btn btn-success active col-md-3 "   >+add user or admin</a>             
  <?php }?>
        <table class="table table-striped table-hover mt-5">
  <div class="row">
    <thead>
    <tr>
      <th scope="col" >username</th>
      <th scope="col" >Email</th>
      <th scope="col" >role</th>
       <?php
      if($_SESSION["role"]=="admin"){?>
      <th scope="col" >action</th> <?php }?>

    </tr>
  </thead>  <tbody><?php

 $data=mysqli_query($con,"SELECT * FROM `admin` WHERE 1");
 while($row=mysqli_fetch_assoc($data)){ ?>
    <tr>
      <td><?=$row["username"]?></td>
      <td><?=$row["email"]?></td>
      <td ><?=$row["role"]?></td> 
 <?php 
      if($_SESSION["role"]=="admin"){ ?>
    <td >
    <a href="edit_admin.php?email=<?=$row["email"]?>" class=" bg-warning btn   "   >edit</a>
    <a href="delet_admin.php?email=<?=$row["email"]?>" class=" bg-danger btn "   >delet</a>
           </td> <?php }?>
          </tr>


<?php


 }?>
