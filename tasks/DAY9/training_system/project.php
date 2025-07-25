<?php
require("index.php");
require("navbar.php");
 $student=mysqli_query($con,"SELECT * FROM `students` WHERE 1");
 $course=mysqli_query($con,"SELECT * FROM `courses` WHERE 1");
 $enrollment=mysqli_query($con,"SELECT enrollments.id ,students.NAME , courses.title , enrollments.grade ,enrollments.enrollment_date FROM `enrollments` JOIN students ON enrollments.student_id =students.id JOIN courses ON enrollments.course_id =courses.id");
 // num_rows




?>

  <style>
    .card-img-top {
      height: 200px;          
      object-fit: cover;      /* عشان الصورة تتملى الإطار بدون تشويه */
    }
  </style>
<div class="container mt-5 ">
    <div class=" row gap-5">

<div class="card" style="width: 25rem;">
  <img src="img/student.jpg" class="card-img-top img-thumbnail fixed-size" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">students</h5>
    <p class="card-text">number students : <?=mysqli_num_rows($student)?></p>
    <a href="students/dp.php" class="btn btn-info">view</a>
  </div>
</div>

<div class="card" style="width: 25rem;">
  <img src="img/course.jpg" class="card-img-top img-thumbnail fixed-size" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">courses</h5>
    <p class="card-text">courses : <?=mysqli_num_rows($course)?></p>
    <a href="course/dp.php" class="btn btn-info">view</a>
  </div>
</div>


<div class="card" style="width: 25rem;">
  <img src="img/enrollments.jpg" class="card-img-top img-thumbnail fixed-size" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">enrollments</h5>
    <p class="card-text">enrollments : <?=mysqli_num_rows($student)?> </p>
    <a href="Enrollments/dp.php" class="btn btn-info	">view</a>
  </div>
</div>

</div></div>ش