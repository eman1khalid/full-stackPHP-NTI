<?php session_start();
include("index.php");
header("Content-Type: application/json");
if(isset($_SESSION["role"])){
$role=$_SESSION["role"];
$username=$_SESSION["username"];
$r=["role"=>$role,"username"=>$username];
echo json_encode($r);}else{header("register.html");}
