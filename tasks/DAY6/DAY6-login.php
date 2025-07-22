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
     <div class="container mt-5  bg-info p-4  ">
        <div class="row justify-content-center d-flex mt-5 ">
            <h1  >login</h1>
        <?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['user']) && isset($_POST['password'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $status="FAIL";
    $allowed = [
      ["user"=>"eman" ,  "email" => "admin@example.com", "password" => "1234","gender"=>"Female","jop"=>"devloper"]
    , ["user"=>"test" , "email" => "test@example.com", "password" => "test123","gender"=>"Male","jop"=>"fronted"]
  ];
    $login = false;
    if(!isset($_SESSION["allowed"])){
    $_SESSION["allowed"]=$allowed;}
    
    foreach ($_SESSION["allowed"] as $v) {
       if ($user == $v["user"] && $password == $v["password"]){ 
        $login = true;
        $_SESSION["name"]=$v["user"];
        $_SESSION["email"]=$v["email"];
        $status="SUCCESS";
        break;
        

        }}
          $_SESSION["LOGLOG"][]=["date"=>date("Y-m-d H:i:s"),"user"=>$_POST["user"],"status"=>$status];
    if ($login == false) { ?>
    <div class="container mt-5 p-4">
    <div class="row justify-content-center d-flex mt-5">
    <div class="alert alert-danger" role="alert">
        ⚠️ login failed
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


          <form class="was-validated " method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center d-flex mt-5">
           
            <div class="  mt-3 ">
             <label for="validationServerUsername" class="form-label text-light">user name</label>
            <input type="text" class="form-control" name="user" id="user" required>
            <div class="invalid-feedback">
              Please enter a user name
            </div>
            </div>
             
              <div class="  mt-3">
             <label for="validationServerUsername" class="form-label text-light">password</label>
            <input type="password" class="form-control" name="password" id="pass " required>
            <div class="invalid-feedback">
             Please enter a password
            </div>
            </div>
             
            <div class="  col-md-12 d-flex mt-5 gap-2">
            <button type="submit" class="btn  btn-success  col-md-6 mr-5" > sign in</button>
            <a href="DAY6-signup.php" class="btn btn-success active  col-md-6"   >sign up</a>             
             </div>
            
             </div>

          </form>

        </div>
    </div>


