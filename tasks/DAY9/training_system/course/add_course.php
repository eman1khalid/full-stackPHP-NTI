<?php
require("../index.php");
require("../navbar.php");?>
<div class="container mt-5 bg-info">
    <div class=" row ">
    <form class="was-validated " method="POST" enctype="multipart/form-data" action="insert_course.php">
        <div class="row justify-content-center d-flex mt-5">
           
            <div class="  mt-3  ">
             <label for="validationServerUsername" class="form-label text-light"> title</label>
            <input type="text" class="form-control" name="title"  required>
            </div>
             
              <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">description</label>
            <input type="text" class="form-control" name="description"  required>
            </div>
             <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">hours</label>
            <input type="number" class="form-control" name="hours"  required>
            </div>
            
             <div class="  mt-3">
             <label for="validationServer04" class="form-label">price </label>
             <input type="number" class="form-control" name="price"  required>
            </div>
            <div class="  col-md-12 d-flex mt-5 gap-2">
            <button type="submit" class="btn  btn-success  col-md-6 mr-5" > add</button>
           
             </div>
            
             </div> </div>

          </form>

        </div>
    </div>


