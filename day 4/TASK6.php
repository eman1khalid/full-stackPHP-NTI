<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>
<?php 
$ad=["monitor"=>1200,"chair"=>1000,"headset"=>5000,"keyboard"=>200,"mouse"=>500];?>
<div class="container mt-5"><div class="row">
<ol class="list-group list-group-numbered">
<?php foreach($ad as $ke=>$v):?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto"><?=$ke?>    </div>
    <span class="badge text-bg-primary rounded-pill"><?=$v?></span>
  </li>
  <?php endforeach;
 echo "asort";
   asort($ad); 
  ?>
   </ol>
</div> </div>
<div class="container mt-5"><div class="row">
<ol class="list-group list-group-numbered">
<?php foreach($ad as $ke=>$v):?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto"><?=$ke?>    </div>
    <span class="badge text-bg-primary rounded-pill"><?=$v?></span>
  </li>
  <?php endforeach; 
  echo "ksort";
  ksort($ad); ?>
  
</ol>
</div> </div>
<div class="container mt-5"><div class="row">
<ol class="list-group list-group-numbered">
<?php foreach($ad as $ke=>$v):?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto"><?=strtoupper($ke)?>    </div>
    <span class="badge text-bg-primary rounded-pill"><?=$v?></span>
  </li>
  <?php endforeach;
  echo "arsort";
  arsort($ad); ?>
  
</ol>
</div> </div>
<div class="container mt-5"><div class="row">
<ol class="list-group list-group-numbered">
<?php foreach($ad as $ke=>$v):?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto"><?=$ke?>    </div>
    <span class="badge text-bg-primary rounded-pill"><?=$v?></span>
  </li>
  <?php endforeach; 
  echo "krsort";
  krsort($ad); ?>
  
</ol>
</div> </div>
</ol>
</div> </div>
  

<div class="container mt-5"><div class="row">
<ol class="list-group list-group-numbered">
<?php foreach($ad as $ke=>$v):?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto"><?=$ke?>    </div>
    <span class="badge text-bg-primary rounded-pill"><?=$v?></span>
  </li>
  <?php endforeach;  ?>
  
</ol>
</div> </div>