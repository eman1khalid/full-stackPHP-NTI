<?php

require("../index.php");
require("../navbar.php");
$id=$_GET["id"];
$course=mysqli_fetch_assoc(mysqli_query($con,"SELECT  `title`, `description`, `hours`, `price` FROM `courses` WHERE id=$id "));?>
<div class="container mt-5 bg-info">
    <div class=" row ">
    <form class="was-validated " method="POST" enctype="multipart/form-data" action="update_course.php?id=<?=$id?>">
        <div class="row justify-content-center d-flex mt-5">
           
            <div class="  mt-3  ">
             <label for="validationServerUsername" class="form-label text-light"> title</label>
            <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($course["title"]) ?>" required>
            </div>
             
              <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">description</label>
            <input type="text" class="form-control" name="description" value="<?= htmlspecialchars($course["description"]) ?>" required>
            </div>
             <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">hours</label>
            <input type="number" class="form-control" name="hours" value=<?=$course["hours"] ?> required>
            </div>
            
             <div class="  mt-3">
             <label for="validationServer04" class="form-label">price </label>
             <input type="number" class="form-control" name="price" value=<?=$course["price"] ?> required>
            </div>
            <div class="  col-md-12 d-flex mt-5 gap-2">
            <button type="submit" class="btn  btn-success  col-md-6 mr-5" > edit</button>
           
             </div>
            
             </div> </div>

          </form>

        </div>
    </div>
