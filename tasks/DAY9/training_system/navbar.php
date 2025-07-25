<?php include("index.php");
?><head>
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
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System(<?=$_SESSION["role"]?>)</h5></strong></a>
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
  <li class="nav-item">
    <a class="nav-link  nav-left" href="../logout.php">logout</a>
  </li>
    </nav>
    <?php if($_SESSION['role']=="admin"){?>
<div class="container mt-5 ">
    <div class=" row ">
     <div class="col-md-2 ">
         <a href="../admin/dp.php" class="btn btn-outline-info w-100">view admin</a>
     </div>
          <div class="col-md-2 ">
         <a href="../viewloginstatuse/dp.php" class="btn btn-outline-secondary w-100">view login</a>
     </div>

      </div>
</div>
<?php } ?>
  <?php } elseif(in_array("course" ,explode("/",$_SERVER["REQUEST_URI"]))){?>
    <li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System(<?=$_SESSION["role"]?>)</h5></strong></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  " aria-current="page" href="../students/dp.php">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="dp.php">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../Enrollments/dp.php">Enrollments</a>
    <li class="nav-item">
    <a class="nav-link  nav-left" href="../logout.php">logout</a>
  </li>

   </nav>
       <?php if($_SESSION['role']=="admin"){?>
       <div class="container mt-5 ">
    <div class=" row ">
     <div class="col-md-2 ">
         <a href="../admin/dp.php" class="btn btn-outline-info w-100">view admin</a>
     </div>
          <div class="col-md-2 ">
         <a href="../viewloginstatuse/dp.php" class="btn btn-outline-secondary w-100">view login</a>
     </div>

      </div>
</div>
<?php } ?><?php }elseif(in_array("viewloginstatuse" ,explode("/",$_SERVER["REQUEST_URI"]))){?>
    <li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System(<?=$_SESSION["role"]?>)</h5></strong></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  " aria-current="page" href="../students/dp.php">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../course/dp.php">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../Enrollments/dp.php">Enrollments</a>
    <li class="nav-item">
    <a class="nav-link  nav-left" href="../logout.php">logout</a>
  </li>

   </nav>
       <?php if($_SESSION['role']=="admin"){?>
       <div class="container mt-5 ">
    <div class=" row ">
     <div class="col-md-2 ">
         <a href="../admin/dp.php" class="btn btn-outline-info w-100">view admin</a>
     </div>
          <div class="col-md-2 ">
         <a href="../viewloginstatuse/dp.php" class="btn btn-outline-secondary w-100">view login</a>
     </div>

      </div>
</div>
<?php } ?><?php }
elseif(in_array("Enrollments" ,explode("/",$_SERVER["REQUEST_URI"]))){ ?>
<li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System(<?=$_SESSION["role"]?>)</h5></strong></a>
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
<li class="nav-item">
    <a class="nav-link  nav-left" href="../logout.php">logout</a>
  </li>
 </nav>
        <?php if($_SESSION['role']=="admin"){?>
       <div class="container mt-5 ">
    <div class=" row ">
     <div class="col-md-2 ">
         <a href="../admin/dp.php" class="btn btn-outline-info w-100">view admin</a>
     </div>
          <div class="col-md-2 ">
         <a href="../viewloginstatuse/dp.php" class="btn btn-outline-secondary w-100">view login</a>
     </div>

      </div>
</div>
<?php } ?>
<?php } elseif(in_array("admin" ,explode("/",$_SERVER["REQUEST_URI"]))){ ?>
<li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="../project.php"><strong class="text-light" ><h5>Training System(<?=$_SESSION["role"]?>)</h5></strong></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link  " aria-current="page" href="../students/dp.php">Students</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../course/dp.php">Courses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  " href="../Enrollments/dp.php">Enrollments</a>
  </li>
<li class="nav-item">
    <a class="nav-link  nav-left" href="../logout.php">logout</a>
  </li>
 </nav>
        <?php if($_SESSION['role']=="admin"){?>
       <div class="container mt-5 ">
    <div class=" row ">
     <div class="col-md-2 ">
         <a href="dp.php" class="btn btn-outline-info w-100">view admin</a>
     </div>
          <div class="col-md-2 ">
         <a href="../viewloginstatuse/dp.php" class="btn btn-outline-secondary w-100">view login</a>
     </div>

      </div>
</div>
<?php } ?>
<?php }else{ ?>
<li class="nav-item nav-left">
   <a class="nav-link " aria-current="page" href="project.php"><strong class="text-light" ><h5>Training System (<?=$_SESSION["role"]?>)</h5></strong></a>
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
   <li class="nav-item">
    <a class="nav-link  nav-left" href="logout.php">logout</a>
  </li>
 </nav>

       <?php if($_SESSION['role']=="admin"){?>
       <div class="container mt-5 ">
    <div class=" row ">
     <div class="col-md-2 ">
         <a href="admin/dp.php" class="btn btn-outline-info w-100">view admin</a>
     </div>
          <div class="col-md-2 ">
         <a href="viewloginstatuse/dp.php" class="btn btn-outline-secondary w-100">view login</a>
     </div>

      </div>
</div>
<?php } ?>





<?php
} ?>










</ul></nav>
