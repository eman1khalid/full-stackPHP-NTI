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
            <h1  >sign up</h1>
        <?php

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email=$_POST["email"];
  $user=$_POST["user"];
    $login=true;
    foreach ($_SESSION["allowed"] as $v) {
       if ( $user==$v["user"]||$email == $v["email"]){ 
        $login=false;?>
            <div class="container mt-5 p-4">
           <div class="row justify-content-center d-flex mt-5">
            <div class="alert alert-danger" role="alert">
            ⚠️ sign up faild There is already an account with the same email.
    </div>
    </div>
    </div>
    break;


       <?php }}
    
    if($login==true){?>
       <div class="container mt-5 p-4">
           <div class="row justify-content-center d-flex mt-5">
            <div class="alert alert-success" role="alert">
            user registered You can now login
    </div>
    </div>
    </div>
    <?php  $_SESSION["allowed"][]=["user"=>$_POST['user'] ,  "email" => $_POST['email'] , "password" => $_POST['password'] ,"gender"=>$_POST['gender'],"jop"=>$_POST['jop']];
      
    }

  }
?>


    <form class="was-validated " method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center d-flex mt-5">
           
            <div class="  mt-3 col-md-4 ">
             <label for="validationServerUsername" class="form-label text-light">user name</label>
            <input type="text" class="form-control" name="user" id="user" required>
            <div class="invalid-feedback">
              Please enter a user name
            </div>
            </div>
             
              <div class="  mt-3 col-md-4">
             <label for="validationServerUsername" class="form-label text-light">password</label>
            <input type="password" class="form-control" name="password" id="pass " required>
            <div class="invalid-feedback">
             Please enter a password
            </div>
            </div>
             <div class="  mt-3 col-md-4">
             <label for="validationServerUsername" class="form-label text-light">email</label>
            <input type="email" class="form-control" name="email" id="email " required>
            <div class="invalid-feedback">
             Please enter a password
            </div>
            </div>
            
             <div class="  mt-3 col-md-4">
             <label for="validationServer04" class="form-label">gender</label>
             <select class="form-select is-invalid col-md-4"  name="gender" required>
             <option selected disabled value="">select gender...</option>
             <option value="Male">Male</option>
             <option value="Female">Female</option>
             </select>
             <div id="validationServer04Feedback" class="invalid-feedback">
             Please select a valid state.
            </div></div>
            <div class="  mt-3 col-md-4">
             <label for="validationServer04" class="form-label">jop</label>
             <select class="form-select is-invalid col-md-4"  name="jop" required>
             <option selected disabled value="">select jop...</option>
             <option value="devloper">devloper</option>
             <option value="fronted">fronted</option>
             <option value="UI/UX">UI/UX</option>
             </select>
             <div id="validationServer04Feedback" class="invalid-feedback">
             Please select a valid state.
            </div></div>
            <div class="  mt-3 col-md-4">
            <label for="validationServer04" class="form-label">Profile picture</label>            
            <input type="file" class="form-control col-md-4" aria-label="file example" required>
            <div class="invalid-feedback">Example invalid form file feedback</div>
            </div> </div>
            <div class="  col-md-12 d-flex mt-5 gap-2">
            <button type="submit" class="btn  btn-success  col-md-6 mr-5" > sign up</button>
            <a href="DAY6-login.php" class="btn btn-success active  col-md-6"   >sign in</a>             
             </div>
            
             </div> </div>

          </form>

        </div>
    </div>


