<head><link href="CSS/bootstrap.min.css" rel="stylesheet"></head>

<div class="container">
<div class="row">
<table class="table table-striped table-hover mt-5">
 <thead>
    <tr>
      <th scope="col">key</th>
      <th scope="col">value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td>PHP_SELF</td>
      <td><?=$_SERVER['PHP_SELF']?></td>
      
    </tr>
    <tr>
      
       <td>SERVER NAME</td>
      <td><?=$_SERVER['SERVER_NAME']?></td>
    </tr>
    <tr>
      <td>HTTP_HOST</td>
      <td><?=$_SERVER['HTTP_HOST']?></td>
    </tr>
     <tr>
      <td>HTTP_USER_AGENT</td>
      <td><?=$_SERVER['HTTP_USER_AGENT']?></td>
    </tr>
    </tr>
     <tr>
      <td>REQUEST_METHOD</td>
      <td><?=$_SERVER['REQUEST_METHOD']?></td>
    </tr>
  </tbody>
</table>

</div>
</div>


