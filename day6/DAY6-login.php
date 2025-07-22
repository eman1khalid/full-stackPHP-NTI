
<?php session_start(); ?>
<head>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<script src="js/bootstrap.bundle.min.js"></script>
<body>
    <style>
        body{
            background-color: pink;
        }
    </style>
     <div class="container mt-5  bg-dark p-4  ">
        <div class="row justifiy-content-center d-flex mt-5 ">
          <form class="was-validated " method="POST" enctype="multipart/form-data">
            <div class="row justifiy-content-center d-flex mt-5">
           
            <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">user name</label>
            <input type="text" class="form-control" name="user" id="validationServerUsername" required>
            <div class="invalid-feedback">
              Please enter a user name
            </div>
            </div>
             
              <div class="  mt-3">
             <label for="validationServerUsername" class="form-label text-light">password</label>
            <input type="password" class="form-control" name="password" id="validationServerUsername " required>
            <div class="invalid-feedback">
             Please enter a password
            </div>
            </div>
             
            <div class="  col-md-12 mt-5">
            <button type="submit" class="btn btn-primary btn-success w-100" > login</button>             
             </div>
            
             </div>

          </form>

        </div>
    </div>


<?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $allowed = [
      ["user"=>"admma"   "email" => "admin@example.com", "password" => "123456"]
    , ["user"=>"test"  "email" => "test@example.com", "password" => "test123"]
  ];
    $login = false;
    $_SESSION["allowed"][]=$allowed;
    foreach ($_SESSION["allowed"] as $v) {
       if ($email == $v["email"] && $password == $v["password"]){ 
        $login = true;
        break;

        }}
    if ($login == false) { ?>
    <div class="container mt-5 p-4">
    <div class="row justify-content-center d-flex mt-5">
    <div class="alert alert-danger" role="alert">
        ⚠️ wrong user or pass
    </div>
    </div>
    </div>



    <?php }
    else{
      header("Location:DAY6-welcom.php");
      exit();
    }

  }
}?>
