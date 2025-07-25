<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>
<?php 
$ad=["html","css","js","php"];?>
<div class='container mt-5'>
<div class='row'>
<ul class='list-group'>
    <?php foreach($ad as $v):?>
 <li class='list-group-item'> <?php echo ($v); ?> </li>
<?php endforeach;?>
</ul>
</div>
</div>
<?php
array_push($ad,"mydql");
?>
<div class='container mt-5'>
<div class='row'>
<ul class='list-group'>
    <?php foreach($ad as $v):?>
 <li class='list-group-item'> <?php echo ($v); ?> </li>
<?php endforeach;?>

</ul>
</div>
</div>
<?php
array_unshift($ad,"get");

?>
<div class='container mt-5'>
<div class='row'>
<ul class='list-group'>
    <?php foreach($ad as $v):?>
 <li class='list-group-item'> <?php echo ($v); ?> </li>
<?php endforeach;?>

</ul>
</div>
</div>
<?php
array_shift($ad);

?>
<div class='container mt-5'>
<div class='row'>
<ul class='list-group'>
    <?php foreach($ad as $v):?>
 <li class='list-group-item'> <?php echo ($v); ?> </li>
<?php endforeach;?>

</ul>
</div>
</div>
