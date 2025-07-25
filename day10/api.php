<?php 
header("Content-Type:application/json");
header("Access-control-Allow-Origin:*");

if($_SERVER["SERVER_NAME"]=='127.0.0.1'){
$data=["massege"=>"error please change domain","connection"=>false];
echo json_encode($data);}else{
$data=["student"=>[[
    "name"=>"eman",
    "age"=>21,
    "email"=>"eman@ex.com"
],[
     "name"=>"aya",
    "age"=>25,
    "email"=>"aya@ex.com"

]],
"connection"=>true];
echo json_encode($data);

}
