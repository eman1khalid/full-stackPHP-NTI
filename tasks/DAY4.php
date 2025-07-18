
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<script src="js/bootstrap.bundle.min.js"></script>
<div class="container mt-5">
<div class="row">
<table class="table table-bordered">
    <thead>
    <tr>
      <th scope=" col" class="text-light bg-dark" >name</th>
      <th scope=" col" class="text-light bg-dark" >course</th>
      <th scope=" col" class="text-light bg-dark" >grade</th>
      <th scope=" col" class="text-light bg-dark" >status</th>
      <th scope=" col" class="text-light bg-dark" >details</th>
    </tr>
  </thead>
  <tbody>
<?php 
$i=0;
$student=[
     ["name"=>"ahmed","course"=>"js","grade"=>95],
     ["name"=>"khalid","course"=>"php","grade"=>75],
     ["name"=>"yasir","course"=>"flutter","grade"=>65],
     ["name"=>"laila","course"=>"html","grade"=>48]];
     foreach($student as $v):
        $modalId = "modal_" . $i;
        if($v["grade"]<50){?>
    <tr>
      <td class="bg-danger-subtle text-dark" ><?=$v["name"]?></td>
      <td class="bg-danger-subtle text-dark"><?=$v["course"]?></td>
      <td class="bg-danger-subtle text-dark"><?=$v["grade"]?></td>
       <?php $stutes="faild"; ?>
      <td class="bg-warning-subtle text-dark"><?=$stutes?></td>
      <td class="bg-danger-subtle text-dark"><button type="button" class="btn btn-primary btn-danger w-100" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>"> view</button></td>

    </tr>
    <?php } else{?>
    <tr>
      <td class="bg-success-subtle  text-dark" ><?=$v["name"]?></td>
      <td class="bg-success-subtle  text-dark"><?=$v["course"]?></td>
      <td class="bg-success-subtle  text-dark"><?=$v["grade"]?></td>
     <?php $stutes="passed"; ?>
      <td class="bg-success-subtle  text-dark"><?=$stutes?></td>
      
      <td class="bg-success-subtle  text-dark"><button type="button" class="btn btn-primary btn-success w-100" data-bs-toggle="modal" data-bs-target="#<?=$modalId?> "> view</button></td>

    </tr>
       
    <?php }?>
  </tbody>


<!-- Modal -->

<div class="modal fade" id="<?=$modalId?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $i?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-end" id="staticBackdropLabel">قائمه الطلاب</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="container py-5">
    <div class="row d-flex justify-content-center ">
       
                    <p><strong>Name:</strong> <?= $v['name'] ?></p>
                    <p><strong>Course:</strong> <?= $v['course'] ?></p>
                    <p><strong>Grade:</strong> <?= $v['grade'] ?></p>
                    <p><strong>Status:</strong> <?= $stutes ?></p>
    </div>
    </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>

<?php $i++; endforeach;?>
</table>  
</div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>