<?php
require("../index.php");
require("../navbar.php");
$student=mysqli_query($con,"SELECT * FROM `students` WHERE 1");
$corse=mysqli_query($con,"SELECT * FROM `courses` WHERE 1");?>

<div class="container mt-5 bg-info">
    <div class=" row ">
    <form class="was-validated " method="POST" enctype="multipart/form-data" action="insert_enrollment.php">
        <div class="row justify-content-center d-flex mt-5">
           
            <div class="  mt-3  ">
             <label for="validationServerUsername" class="form-label text-light"> name</label>
             <select class="form-select is-invalid "  name="name" required>
              <option selected disabled value="">select course...</option>
             <?php while($row=mysqli_fetch_assoc($student)){?>
             <option value="<?= htmlspecialchars($row["id"]) ?>"><?= htmlspecialchars($row["NAME"]) ?></option>
             <?php } ?>
             </select>

            </div>
             
              <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">course</label>
             <select class="form-select is-invalid "  name="corse" required>
             <option selected disabled value="">select course...</option>
             <?php while($row=mysqli_fetch_assoc($corse)){?>
             <option value="<?= htmlspecialchars($row["id"]) ?>"><?= htmlspecialchars($row["title"]) ?></option>
             <?php } ?>
             </select>

            </div>
             <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">grade</label>
            <input type="number" class="form-control" name="grade"  required>
            </div>
            
             <div class="  mt-3">
             <label for="validationServer04" class="form-label">enrollment_date </label>
             <input type="date" class="form-control" name="enrollment_date"  required>
            </div>
            <div class="  col-md-12 d-flex mt-5 gap-2">
            <button type="submit" class="btn  btn-success  col-md-6 mr-5" > add</button>
           
             </div>
            
             </div> </div>

          </form>

        </div>
    </div>


