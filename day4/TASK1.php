<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>

  <body >
      <style>
        body{
            background-color: green;
        }
    </style>
    
<?php 
$deviece=[["laptop","15000","3"],["phone","8000","5"],["tablet","6000","2"]];
?>
<div class="container mt-5">
 <div class="row">
<table class="table table-striped table-hover">
      <thead>
    <tr class="r  col-md-6">
               
                <th class="bg-dark text-light">Name</th>
                <th class="bg-dark text-light">Email</th>
                <th class="bg-dark text-light">role</th>
            </tr>
  </thead>
  <tbody>
     <?php foreach ($deviece as $v ):?>
    <tr>
     
      <td><?php echo $v[0];?></td>
      <td><?php echo $v[1];?></td>
      <td><?php echo $v[2];?></td>
      
    </tr>
    <?php endforeach;?>
  </tbody>
  
</table>
</div>
</div>
</body>