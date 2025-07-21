<?php session_start();?>
<html>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css"
</head>

<body>
    <style>
        .card{
            width: fit-content;
            margin: 50px auto;
            padding: 50px;
            background-color: black;
            color: aliceblue;
        }
    </style>
  
      <div class="container mt-5 bg-dark  ">
        <div class="row justifiy-content-center d-flex mt-5">
          <form class="was-validated text-end" method="POST">
            <div class="mb-5 mt-3">
            <label for="validationServerUsername" class="form-label text-light">الاسم</label>
            <input type="text" class="form-control is-invalid " id="validationServerUsername" name="name" required>
            <div class="invalid-feedback">
             Please enter a name
            </div>
             </div>
            <div class="mb-5">
             <label for="validationServerUsername" class="form-label text-light">الايميل</label>
            <input type="email" class="form-control is-invalid " id="validationServerUsername" name="email" required>
            <div class="invalid-feedback">
             Please enter a email
            </div>
            </div>
           
             
            <div class="mb-5">
            <button type="submmit" class="btn btn-success  w-100">Save</button>
                <div class="d-flex">
                <a href="TASK3-logout.php" class="btn btn-primary active mt-5  col-md-6"   >clear</a>
                <a href="TASK3-removelast.php" class="btn btn-primary active mt-5  col-md-6"   >clearlast</a>
            </div>
            </div>
          </form>

        </div>
    </div>
   
</body>



   <div class="container py-5">
    <div class="row d-flex justify-content-center ">
        <h1 class="text-Light d-flex justify-content-center">sample data table</h1>
        <table class="table table-striped table-hover ">
            <tr class="r  col-md-6">
                <th class="bg-dark text-light">user name</th>
                <th class="bg-dark text-light">user email</th>
            </tr>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
 $_SESSION["user"][]=[
    "name"=>$_POST['name'],
    "email"=>$_POST['email']
];
}

if(!isset($_SESSION["user"])){ ?>
    <div class="alert alert-danger" role="alert">
 no user
</div>
<?php }else{ ?>
            <?php 
            foreach($_SESSION["user"] as $v){?>
            <tr>
                
                <td><?=$v["name"]?></td>
                <td><?=$v["email"]?></td>
                
            </tr>
  
         
   


<?php }} ?>
</table>
 </div>
    </div>
