<?php
include("../index.php"); 
header("Content-Type: application/json");
if (isset($_SERVER["REQUEST_METHOD"])){
    $method=$_SERVER["REQUEST_METHOD"];
switch ($method) {
    case "GET":
    include("get.php");
    break;
    case "POST":
    include("post.php");
    break;
    case "PUT":
    include("put.php");
    break;
    case 'DELETE':
    include("delete.php");;
    break;
    default:
    $e=["response"=>"fail","massege"=>"select method"];
    echo json_encode($e);
    break;
   



};

}
