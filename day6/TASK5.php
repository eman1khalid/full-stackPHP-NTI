<html>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<?php 
$folder="uploads/".date("Y-m-d")."/";
$images=glob($folder."*.{jpg,png,jpeg}",GLOB_BRACE);?>

<table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">name</th>
    </tr>
  </thead><?php 
  $i=1;
  foreach($images as $v ){?>
  <tbody>
    <tr>
      <th scope="row"><?=$i?></th>
      <td>  <img src="<?=$folder.basename($v)?>" class='img-thumbnail m-2' width='150'></td>
      <td><?= basename($v)?></td>
      
      <td><a href="TASK5-delet.php?loc=<?=$folder.basename($v)?>" class="btn btn-danger active mt-5  col-md-6"   >clear</a></td>
    </tr>
    <?php } ?>
   
  </tbody>
</table>

</table>

