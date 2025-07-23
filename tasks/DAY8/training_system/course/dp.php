<?php
require("../index.php");
require("../navbar.php");?>
<div class="container mt-5">
    <div class=" row ">
    <a href="add_course.php" class="btn btn-success active col-md-3 "   >+add course</a>             

        <table class="table table-striped table-hover mt-5">
  <div class="row">
    <thead>
    <tr>
      <th scope="col" >title</th>
      <th scope="col" >description</th>
      <th scope="col" >hours</th>
      <th scope="col" >price</th>
      <th scope="col" >action</th>

    </tr>
  </thead>  <tbody><?php

 $data=mysqli_query($con,"SELECT * FROM `courses` WHERE 1");
 while($row=mysqli_fetch_assoc($data)){ ?>
    <tr>
      <td><?=$row["title"]?></td>
      <td><?=$row["description"]?></td>
      <td ><?=$row["hours"]?></td> 
      <td ><?=$row["price"]?></td>
    <td >
    <a href="edit_course.php?id=<?=$row["id"]?>" class=" bg-warning btn   "   >edit</a>
    <a href="delet_course.php?id=<?=$row["id"]?>" class=" bg-danger btn "   >delet</a>
           </td>
          </tr>


<?php


 }?>
