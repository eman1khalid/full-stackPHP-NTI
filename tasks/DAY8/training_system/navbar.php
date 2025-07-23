<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<script src="js/bootstrap.bundle.min.js"></script>
<body>
    <style>
        body{
            background-color: pink;
        }
    </style>

<nav  class="bg-info">
<ul class="nav nav-tabs ">
    <?php if(in_array("students" ,explode("/",$_SERVER["REQUEST_URI"]))){?>
    
  <li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System</h5></strong></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  " aria-current="page" href="dp.php">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../course/dp.php">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../Enrollments/dp.php">Enrollments</a>
  </li>
  <?php } elseif(in_array("course" ,explode("/",$_SERVER["REQUEST_URI"]))){?>
    <li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System</h5></strong></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  " aria-current="page" href="../students/dp.php">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="dp.php">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../Enrollments/dp.php">Enrollments</a>
  </li><?php }
elseif(in_array("Enrollments" ,explode("/",$_SERVER["REQUEST_URI"]))){ ?>
<li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System</h5></strong></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  " aria-current="page" href="../students/dp.php">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../course/dp.php">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="dp.php">Enrollments</a>
  </li>


<?php }else{ ?>
<li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="project.php"><strong class="text-light" ><h5>Training System</h5></strong></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  " aria-current="page" href="students/dp.php">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="course/dp.php">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="Enrollments/dp.php">Enrollments</a>
  </li>








<?php
} ?>










</ul></nav>
