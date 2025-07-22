<?php session_start();
if(!isset($_SESSION["VISIT"])){$_SESSION["VISIT"]=0;}
else{$_SESSION["VISIT"]++;}
echo "SESSION VISIT :". $_SESSION["VISIT"];