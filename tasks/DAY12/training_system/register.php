<?php 
session_start();
include("index.php");
header("Content-Type: application/json");
$data=json_decode(file_get_contents("php://input"), true);
$email=$data["email"];
$password=$data["password"];
$stmt = mysqli_prepare($con, "SELECT `role`, `username`,  `password` FROM `admin` WHERE email = ?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
 $state="fail";
if(mysqli_num_rows($result)==0){
   
    $e=["massege"=>"wrong email" ,"response"=>"fail"];
    echo json_encode($e);}
    else{
        $row=mysqli_fetch_assoc($result);
        if(password_verify($password,$row['password'])){
            $state="Successful";
        $s=["username"=>$row["username"],"role"=>$row["role"],"response"=>"Successful"];
         $_SESSION['role']=$row["role"];
         $_SESSION["username"]=$row["username"];
         echo json_encode($s);
        }else{
            
            $e=["massege"=>"wrong password" ,"response"=>"fail"];
            echo json_encode($e);
        }
        
        
        }
       
        mysqli_query($con,"INSERT INTO `log`(`email`, `state`) VALUES ('$email','$state')"); ?>
