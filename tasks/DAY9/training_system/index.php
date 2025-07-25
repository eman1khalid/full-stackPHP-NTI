<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();

$con=mysqli_connect("localhost","root","","training_system",4306);
if(!isset($con)){
    echo error;
} ?>