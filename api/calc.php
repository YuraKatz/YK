<?php
  //  include("./include/params.php");
 
  include($_ENV["MYAPP_CONFIG"]);
$x =$_REQUEST["x"];
$y =$_REQUEST["y"];
$a =$_REQUEST["a"];


if($a==1)
$z =$x+$y;
else
$z =$x-$y;

$B_URL="localhost";
$B_USER="calc";
$B_PWD="gY2LBcF6WrD/ZDxv";
$B_NAME="calc";




// Create connection
 

 $conn = mysqli_connect($B_URL, $B_USER, $B_PWD,$B_NAME);
//$conn = mysqli_connect($DB_URL, $DB_USER, $DB_PWD,$DB_NAME);
 
 $sql ="INSERT INTO log(Number1,Number2,Result,UserID,Timestamp) VALUES($x,$y,$z,'anonym',now())";

 mysqli_query($conn ,$sql);
 if($conn->error)
 echo(mysqli_error($conn));
 mysqli_close($conn);


 










echo($z);


