<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>

  <body >
      <style>
        body{
            background-color: green;
        }
    </style>
    
<?php 
$deviece=[["name"=>"ali","department"=>"IT","salary"=>15000],
["name"=>"ahmed","department"=>"UX/UI","salary"=>10000],
["name"=>"eman","department"=>"php","salary"=>7000]];
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
     <?php foreach ($deviece as $v ):
        if($v["salary"]>=8000){?>
    <tr>
     
      <td><?php echo $v["name"];?></td>
      <td><?php echo $v["department"];?></td>
      <td><?php echo $v["salary"];?></td>
      
    </tr>
    <?php } endforeach;?>
  </tbody>
  
</table>
</div>
</div>
</body>